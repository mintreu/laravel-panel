<?php

namespace Mintreu\LaravelPanel\Panel\Traits;

trait hasPanelResolver
{




    protected function getContractView()
    {
        return $this->panelContract->view;
    }


    protected function getPanelConfig():array
    {

        return [
            'page' => $this->panelContract->view
        ];
    }

    protected function getLayoutConfig():array
    {
        return [
            'title' => 'PanelPage',
            'description' => 'This is panel page description',
            'keyword' => ['top', 'new', 'magic', 'tall'],
            'favicon' => '',

        ];
    }




}
