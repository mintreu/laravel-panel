<?php

namespace Mintreu\LaravelPanel\Http\Livewire;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Sidebar extends Component
{


    public array $sidebarlinks;


    public function mount()
    {



        $this->sidebarlinks = [
            ['name' => 'Post', 'route' => 'post', 'icon' => ''],
            ['name' => 'Category', 'route' => 'category', 'icon' => ''],
            ['name' => 'Users', 'route' => 'panel.users', 'icon' => ''],
            ['name' => 'Account', 'route' => 'account', 'icon' => ''],
        ];

    }


    public function refreshSpace($param)
    {

        $allSidelinks = collect($this->sidebarlinks);

        $requestedRoute = $allSidelinks->where('name',$param)->pluck('route')->first();

        if(!empty($requestedRoute) && Route::has($requestedRoute))
        {
//            dd($requestedRoute,Route::getRoutes()->getRoutesByMethod()['GET'],Route::getRoutes()->getByName($requestedRoute)->getAction());


            $this->emitUp('replaceSpaceRoute',['class' => Route::getRoutes()->getByName($requestedRoute)->getControllerClass()]);

        }








    }





    public function render()
    {
        return view('panel::livewire.sidebar');
    }



}
