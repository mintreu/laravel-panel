<?php

namespace Mintreu\LaravelPanel\Panel;

use Livewire\Component;
use Mintreu\LaravelPanel\Panel\Contract\PanelContract;

class Login extends Component implements PanelContract
{

    public string $view = 'panel::login';



    public function render()
    {
        return view($this->view);
    }

}
