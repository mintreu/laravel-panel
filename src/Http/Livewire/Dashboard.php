<?php

namespace Mintreu\LaravelPanel\Http\Livewire;

use Mintreu\LaravelPanel\Panels\Panel;

class Dashboard extends Panel
{
    protected string $view = 'panel::livewire.dashboard';
    protected string $title = 'Dashboard';
    /**
     * @return array
     */
    protected function form(): array
    {
        return [];
    }

    /**
     * @return array
     */
    protected function table(): array
    {
        return [];
    }

    /**
     * @return array
     */
    protected function relation(): array
    {
        return [];
    }


























}
