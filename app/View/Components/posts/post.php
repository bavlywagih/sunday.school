<?php

namespace App\View\Components\posts;

use App\Models\Post as PostModel;
use Illuminate\View\Component;

class post extends Component
{
    public PostModel $post;
    public string $postId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(PostModel $post)
    {
        $this->post = $post;
        $this->postId = $post->id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return  view('post.post');;
    }
}
