<?php

namespace Panoscape\Laraflow\Console\Commands\Hotfix;

use Panoscape\Laraflow\Console\Commands\GitCommand;;

class HotfixPublish extends GitCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hotfix:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

}
