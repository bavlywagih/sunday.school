<?php

namespace App\View\Components\attendance\Create;

use Illuminate\View\Component;

class CreateGrade extends Component
{
    public string $create;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->create = route('create-grade');

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('attendance.create.create-grade');
    }
}
