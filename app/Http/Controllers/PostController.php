<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use DOMDocument;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function createPost(Request $request)
    {
        // dd($request->image);
        $validated = $request->validate([

            'body' => ['required'],
            'user_id' => ['required']
        ]);

        if($request->image == null ){
            // return 'jkjk';
            Post::create(['body' =>   $validated['body'], 'user_id' => $validated['user_id']]);
        }
        else{
            $validated = $request->validate([
                'image' => ['required', 'image', 'mimes:jpg,bmp,png,jpeg'],
                'body' => ['required'],
                'user_id' => ['required']
            ]);
            $file_extension = $validated['image']->getClientOriginalExtension();
            $filename = time() . '.' . $file_extension;
            $path = 'images\posts';
            $image = $validated['image']->move($path, $filename);
            Post::create(['body' =>   $validated['body'], 'user_id' => $validated['user_id'], 'image' => env('APP_URL', 'http://127.0.0.1:8000'). '/' . $image]);
        }
        return redirect()->back();
    }

    public function form_createPost(){
        return view('post.new-post');
    }

    public function posts()
    {
        $posts = post::orderBy('id', 'desc')->get();
        return view('post.PostsList', compact('posts'));
    }

    public function delete($id)
    {
        post::findorfail($id)->delete();
        return redirect(route('load.post'));
    }

    public function postshare($id)
    {
        $post = post::findorfail($id);
        return view('post.share-post', compact('post'));
    }

    public function edit($id)
    {
        $post = post::findorfail($id);
        return view('post.edit-post', compact('post'));
    }

    public function update(Request $request, $id)
    {



        if ($request->image == null) {
            $validated = $request->validate([
                'body' => ['required'],
                'user_id' => ['required']
            ]);
            DB::table('posts')->where('id', $id)->update(['body'  => $validated['body']]);
        } else {
            $validated = $request->validate([
                'image' => ['required'],
                'body' => ['required'],
                'user_id' => ['required']
            ]);
            $file_extension = $validated['image']->getClientOriginalExtension();
            $filename = time() . '.' . $file_extension;
            $path = 'images\posts';
            $image = $validated['image']->move($path, $filename);
            DB::table('posts')->where('id', $id)->update(['body' =>   $validated['body'], 'image' => env('APP_URL', 'http://127.0.0.1:8000'). '/' . $image ]);

        }




        return redirect(route('load.post'));
    }


}




