<?php

namespace Mintreu\LaravelPanel\Http\Livewire;

use Livewire\Component;

class Navigation extends Component
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
        return view('panel::livewire.navigation');
    }


}
