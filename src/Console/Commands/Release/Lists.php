<?php

namespace Panoscape\Laraflow\Console\Commands\Release;

use Panoscape\Laraflow\Console\Commands\GitCommand;

class Lists extends GitCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'release:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all release branches';

}
