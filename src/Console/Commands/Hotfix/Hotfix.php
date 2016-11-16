<?php

namespace Panoscape\Laraflow\Console\Commands\Hotfix;

use Panoscape\Laraflow\Console\Commands\GitCommand;

class Hotfix extends GitCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hotfix';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all hotfix branches';

}
