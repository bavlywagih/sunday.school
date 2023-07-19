<?php

namespace App\View\Components\forms;

use App\Models\Post as PostModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class tinymceEditorEdit extends Component
{
    public string $routepostid;
    public string $Authid;
    public string $AuthUsername;
    public string $bodypost;
    public string $nameandrole;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(PostModel $post)
    {
        $this->routepostid = route('post.update', $post->id);
        $this->Authid =Auth::user()->id;
        $this->AuthUsername = Auth::user()->username;
        $this->bodypost = substr(nl2br($post->body), 0);
        $this->nameandrole = $post->user->username == Auth::user()->username && Auth::user()->role >= 1;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('forms.tinymce-editor-edit');
    }
}
