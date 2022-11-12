<?php

namespace Mintreu\LaravelPanel\Panel\Navigation;

use App\Models\Country;

use App\Models\User;
use Livewire\Component;
use Mintreu\LaravelPanel\Panel\Resources\IndexResource;
use Mintreu\LaravelPanel\Panel\Resources\PostResource;

class Sidebar extends Component
{

    public array $sidebarlinks;


    public function mount()
    {



        $this->sidebarlinks = [
            ['name' => 'Dashboard', 'route' => 'post', 'icon' => '','record' => str_replace('\\','/',IndexResource::class)],
            ['name' => 'Posts', 'route' => 'category', 'icon' => '','record' => str_replace('\\','/',PostResource::class)],
//            ['name' => 'Users', 'route' => 'panel.users', 'icon' => '','record' => str_replace('\\','/',User::class).'::class'],

        ];

    }

    public function loadWindow($param)
    {

        $this->emitUp('refreshDashboard',$param);
    }



    public function render()
    {
        return view('panel::navigation.sidebar');
    }


}
