<?php

namespace App\View\Components\posts;

use App\Models\Post as PostModel;
use Illuminate\Support\Facades\Auth;

use Illuminate\View\Component;

class PostActions extends Component
{
    public string $edit;
    public string $delete;
    public string $checkuser;
    public string $postlink;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(PostModel $post)
    {
        $this->edit = route('post.edit', $post->id);
        $this->delete = route('post.delete', $post->id);
        $this->checkuser = $post->user->username == Auth()->check() && Auth::user()->username && Auth::user()->role >= 1 ;
        $this->postlink = $post->id;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('post.post-actions');
    }
}
