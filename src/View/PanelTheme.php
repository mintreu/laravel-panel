<?php

namespace Mintreu\LaravelPanel\View;
use Illuminate\View\Component;

class PanelTheme extends Component
{


    public function mount()
    {

    }


    /**
     * @return Closure|Htmlable|ViewContract|string
     */
    public function render()
    {
        return view('panel::layouts.panel-theme');
    }
}
