<?php

namespace Panoscape\Laraflow\Console\Commands\Release;

use Panoscape\Laraflow\Console\Commands\GitCommand;

class Start extends GitCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'release:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

}
