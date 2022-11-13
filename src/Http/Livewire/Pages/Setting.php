<?php

namespace Mintreu\LaravelPanel\Http\Livewire\Pages;

use Mintreu\LaravelPanel\Http\Livewire\Dashboard;
use Mintreu\LaravelPanel\Panels\Panel;

class Setting extends Dashboard
{

//    protected string $view = 'panel::livewire.dashboard';
    protected string $title = 'Setting';


    /**
     * @return array
     */
    public function form(): array
    {
        return [
            "TextInput", "Select"
        ];
    }

    /**
     * @return array
     */
    public function table(): array
    {
        return [];
    }

    /**
     * @return array
     */
    public function relation(): array
    {
        return [];
    }
}
