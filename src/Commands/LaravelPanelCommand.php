<?php

namespace Mintreu\LaravelPanel\Commands;

use Illuminate\Console\Command;

class LaravelPanelCommand extends Command
{
    public $signature = 'laravel-panel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
