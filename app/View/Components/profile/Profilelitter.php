<?php

namespace App\View\Components\profile;

use Illuminate\View\Component;

class Profilelitter extends Component
{
    public string|null $adminRole;
    public string|null $userRole;
    public string|null $litterAuth;
    public string $currentRouteName;

    public function __construct()
    {


        $this->currentRouteName = request()->route()->getName();
        $this->adminRole = Auth()->user()?->role >= 1;
        $this->userRole = Auth()->user()?->role == '0';
        $this->litterAuth = Auth()->check() ? Auth()->user()->username[0] : null;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('profile.profilelitter');
    }
}
