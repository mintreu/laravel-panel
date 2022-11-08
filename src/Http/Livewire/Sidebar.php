<?php

namespace Mintreu\LaravelPanel\Http\Livewire;

use Livewire\Component;

class Sidebar extends Component
{


    public array $sidebarlinks;


    public function mount()
    {

        $this->sidebarlinks = [
            ['name' => 'Post', 'route' => 'post', 'icon' => ''],
            ['name' => 'Category', 'route' => 'category', 'icon' => ''],
            ['name' => 'Account', 'route' => 'account', 'icon' => ''],
        ];

    }








    public function render()
    {
        return view('panel::livewire.sidebar');
    }



}
