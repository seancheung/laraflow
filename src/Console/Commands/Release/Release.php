<?php

namespace Panoscape\Laraflow\Console\Commands\Release;

use Panoscape\Laraflow\Console\Commands\GitCommand;

class Release extends GitCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'release';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all release branches';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
