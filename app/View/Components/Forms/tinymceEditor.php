<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Post as PostModel;



class tinymceEditor extends Component
{
    public string $create;
    public string | null $AuthUsername ;
    public string | null $checkadmin;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(postModel $post)
    {
        $this->create = route('posts.create');
        $this->AuthUsername = Auth()->check() ? Auth::user()->username : null;
        $this->checkadmin =  Auth()->check() ? Auth::user()->role >= 1 : null;


    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('forms.tinymce-editor');
    }
}
