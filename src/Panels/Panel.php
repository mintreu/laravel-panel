<?php

namespace Mintreu\LaravelPanel\Panels;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Mintreu\LaravelLayout\View\AppLayout;


abstract class Panel extends Component
{

    protected string $view = 'panel::livewire.fallback';
    protected string $theme = AppLayout::class;

    protected $model = '';

    protected string $title='Panel';
    protected string $description='';
    protected array $keyword=[];
    protected string $favicon = '';




    abstract protected function form():array;
    abstract protected function table():array;
    abstract protected function relation():array;




    /**
     * @return View
     */
    public function render():View
    {


        return view($this->view,[
            'form' => $this->form(),
            'table' => $this->table(),
            'relation' => $this->relation(),
        ])->layout($this->theme,[
            'title' => __($this->title),
            'description' => __($this->description),
            'keyword' => $this->keyword,
            'favicon' => $this->favicon,

        ]);
    }



}
