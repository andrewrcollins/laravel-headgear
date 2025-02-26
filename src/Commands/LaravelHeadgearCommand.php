<?php

namespace AndrewRCollins\LaravelHeadgear\Commands;

use Illuminate\Console\Command;

class LaravelHeadgearCommand extends Command
{
    public $signature = 'laravel-headgear';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
