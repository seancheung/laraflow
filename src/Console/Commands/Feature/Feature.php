<?php

namespace Panoscape\Laraflow\Console\Commands\Feature;

use Panoscape\Laraflow\Console\Commands\GitCommand;

class Feature extends GitCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'feature';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all feature branches';

}
