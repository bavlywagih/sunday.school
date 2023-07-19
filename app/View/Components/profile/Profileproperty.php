<?php

namespace App\View\Components\profile;

use Illuminate\Support\Facades\Auth;

use Illuminate\View\Component;

class Profileproperty extends Component
{
    public string|null $authname;
    public string|null $authphone;
    public string|null $authbirthday;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authname = Auth::user()->username;
        $this->authphone = Auth::user()->phone;
        $this->authbirthday = Auth::user()->birthday;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('profile.profileproperty');
    }
}
