<?php

namespace App\View\Components\posts;

use Illuminate\View\Component;

class tinymceEditorShow extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('forms.tinymce-editor-show');
    }
}
