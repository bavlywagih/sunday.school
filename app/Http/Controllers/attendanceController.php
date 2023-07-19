<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Session;
use App\Models\User;
use App\Models\Attentance;




class attendanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function attendance()
    {
        return view('attendance.attendance', [
            'grades' => Grade::orderBy('id', 'desc')->get(),
            'sessions' => Session::with('attentances', 'grade', 'grade.users')->get(),
            'users' => User::orderBy('id', 'desc')->get()
        ]);
    }

    public function Grade($id)
    {
        $grades = grade::where('id', $id)->orderBy('created_at', 'desc')->first();
        // $grades = grade::where('id', $id)->orderBy('created_at', 'desc')->first();
        return view('attendance.ShowPage.grade', ['grades' => $grades]);
        // return view('attendance.ShowPage.grade', ['grades' => grade::findorfail($id)]);
    }

    public function Session($id)
    {
        $Session = session::findorfail($id);
        $point = $Session->point;
        $pointArray = explode("\n", $point);
        $detailedString = "<ul>";
        foreach ($pointArray as $info) if (trim($info) !== "") $detailedString .= "<h5><li style='margin-top: 1rem; font-size=14px;'>" . $info . "</li></h5>";
        $detailedString .= "</ul>";
        // dd($detailedString);
        return view('attendance.ShowPage.session', ['sessions' => session::findorfail($id) , 'detailedString' => $detailedString]);
    }
    public function create_session()
    {
        $grades = Grade::orderBy('id', 'desc')->get();

        return view('attendance.create.create-session' , compact('grades'));
    }

    public function CreateGrade(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required'],
        ]);
        Grade::create(['title' => $request->title]);
        return redirect('/attendance');
    }

    public function CreateSession(Request $request  )
    {
        // dd($request->file);

        if ( $request->grade_id == '0') {
            return redirect()->back()->withErrors(['الدرس' => 'لا يمكن انشاء درس بدون فصل']);
        }
        else{
            if ($request->file == null) {
                if ( $request->title == null){
                    return redirect()->back()->withErrors(['اسم الدرس' => 'لا يمكن انشاء درس بدون اسم الدرس']);
                }
                elseif ( $request->body == null){
                    return redirect()->back()->withErrors(['الدرس' => 'لا يمكن انشاء درس بدون الدرس']);
                }
                elseif ( $request->point == null){
                    return redirect()->back()->withErrors(['نقاط الدرس' => 'لا يمكن انشاء درس بدون نقاط الدرس']);
                };

                Session::create([
                    'title' =>  $request->title , 'body' => $request->body,
                    'grade_id' =>  $request->grade_id , 'point' => $request->point ,
                ]);
            }
             else {
                $validated = $request->validate([
                    'title' => ['required'],
                    'body' => ['required'],
                    'point' => ['required'],
                    'file' => ['required'],
                    'grade_id' => ['required'],
                ]);

                // dd($validated['file']);
                $file_extension = $validated['file']->getClientOriginalExtension();
                $filename = '/' . time() . '.' . $file_extension;
                $path = 'images\session';
                $file = $validated['file']->move($path, $filename);
                Session::create([
                    'title' =>   $validated['title'], 'body' => $validated['body'],
                    'grade_id' =>   $validated['grade_id'], 'point' => $validated['point'],
                    'file' =>  env('APP_URL', 'http://127.0.0.1:8000') .'/'. $path . $filename
                ]);
            }}

        return redirect('/attendance');
    }

    public function CollectAttendance(Request $request)
    {
        if ($request->session_id == '0') return redirect()->back();
        $allowedUsers = Session::find($request->session_id)->grade->users;
        foreach ($request->users as $userId) {
            foreach ($allowedUsers as $user) {
                if ($userId == $user->id) Attentance::create(['session_id' => $request->session_id, 'user_id' => $userId]);
            }
        }

        return redirect('/attendance');
    }
}
