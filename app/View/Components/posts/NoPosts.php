<?php

namespace App\View\Components\posts;

use Illuminate\View\Component;

class NoPosts extends Component
{
    public string $loginLink;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->loginLink = route('login.form');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('post.no-posts');
    }
}
