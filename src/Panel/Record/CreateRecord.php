<?php

namespace Mintreu\LaravelPanel\Panel\Record;

class CreateRecord extends Record
{
    protected string $view = 'panel::record.create-record';
    protected $listeners = ['refreshComponent' => '$refresh'];






}
