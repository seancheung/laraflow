<?php

namespace Panoscape\Laraflow\Console\Commands\Release;

use Panoscape\Laraflow\Console\Commands\GitCommand;;

class ReleasePublish extends GitCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'release:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

}
