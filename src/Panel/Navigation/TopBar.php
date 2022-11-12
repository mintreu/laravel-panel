<?php

namespace Mintreu\LaravelPanel\Panel\Navigation;

use Livewire\Component;

class TopBar extends Component
{

    public bool $brandingLogo = true;
    public bool $brandingText = true;
    public array $navlinks=[];
    public bool $globalSearch=true;
    public bool $quickNotification=true;

    public bool $quickProfile=true;


    public function mount()
    {


        $this->navlinks = [
            ['name' => 'home'],
            ['name' => 'dashboard'],
            ['name' => 'register'],
        ];

    }



    public function render()
    {
        return view('panel::navigation.topbar');
    }



}
