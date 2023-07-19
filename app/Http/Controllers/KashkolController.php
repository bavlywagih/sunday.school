<?php

namespace App\Http\Controllers;

use App\Models\Kashkol;
use Illuminate\Http\Request;

class KashkolController extends Controller
{
    public function kashkol()
    {
        $kashkols = kashkol::orderBy('id', 'desc')->get()   ;
        return view('kashkol.kashkol', compact('kashkols'));
    }
    public function Kashkol_show($id)
    {
        $kashkol = kashkol::find($id);
        return view('kashkol.Kashkol_show', compact('kashkol'));
    }
    public function Kashkol_create()
    {
        return view('kashkol.kashkol_create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Kashkol_create_post(Request $request)
    {

        // dd($request->file);

        //

        if ($request->file == null) {
            $validated = $request->validate([
                'address' => ['required'],
                'content' => ['required'],
                'user_id' => ['required'],
            ]);

            Kashkol::create([
                'address' =>   $validated['address'], 'content' => $validated['content'], 'user_id' =>   $validated['user_id']]);
                return view('kashkol.kashkol');
        }
        else {
            $validated = $request->validate([
                'address' => ['required'],
                'content' => ['required'],
                'user_id' => ['required'],
                'file' => ['required'],
            ]);

            $file_extension = $validated['file']->getClientOriginalExtension();
            $filename = '/' . time() . '.' . $file_extension;
            $path = 'file/kashkol';
            $file = $validated['file']->move($path, $filename);
            Kashkol::create([
                'address' =>   $validated['address'], 'content' => $validated['content'], 'user_id' =>   $validated['user_id'],'file' =>  env('APP_URL', 'http://127.0.0.1:8000'). '/' . $path . $filename,
            ]);
            return redirect()->route("kashkol");
        };
    }

//





    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kashkol  $kashkol
     * @return \Illuminate\Http\Response
     */
    public function show(Kashkol $kashkol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kashkol  $kashkol
     * @return \Illuminate\Http\Response
     */
    public function edit(Kashkol $kashkol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kashkol  $kashkol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kashkol $kashkol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kashkol  $kashkol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kashkol $kashkol)
    {
        //
    }
}
