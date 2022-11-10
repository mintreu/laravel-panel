<?php

namespace Mintreu\LaravelPanel\Panels;

interface PanelInterface
{

    /**
     * @return array
     */
    public function form(): array;

    /**
     * @return array
     */
    public function table(): array;

    /**
     * @return array
     */
    public function relation(): array;


}
