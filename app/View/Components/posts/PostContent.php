<?php

namespace App\View\Components\posts;

use App\Models\Post as PostModel;
use Illuminate\View\Component;



class PostContent extends Component
{
    public string $author;
    public string $postedOn;
    public  $image;
    public int $bodyLength;
    public string $fullBody;
    public string $subBody;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(PostModel $post)
    {
        $this->author = $post->user->username;
        $this->postedOn =  $post->created_at->diffForHumans();
        $this->image =  $post->image;
        $this->bodyLength = strlen($post->body);
        $this->fullBody = nl2br($post->body);
        $this->subBody = substr($post->body, 0, 400);

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('post.post-content');
    }
}
