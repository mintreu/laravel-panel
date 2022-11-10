<?php

namespace Mintreu\LaravelPanel\Http\Livewire\Pages;

use Mintreu\LaravelForm\Http\Livewire\Field\Select;
use Mintreu\LaravelForm\Http\Livewire\Field\TextInput;
use Mintreu\LaravelPanel\Http\Livewire\Dashboard;
use Mintreu\LaravelPanel\Panels\PanelInterface;

class Users extends Dashboard implements PanelInterface
{
    protected string $title = 'Users';

    /**
     * @return array
     */
    public function form(): array
    {


        return [
            TextInput::make('name')->label('Enter UserName')->required(true)->placeholder('Enter Full Name')->prefix('Enter Your Valid First Name'),
//            TextInput::make('email')->label('Enter Email')->required(true)->placeholder('Enter Valid Email')->colspan(6),
//            Select::make('age')->label('Enter Age')->option([
//                10 => '10 year',
//                20 => '20 Year',
//                50 => '50 years'
//            ])->colspan(6)
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
