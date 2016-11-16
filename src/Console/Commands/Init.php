<?php

namespace Panoscape\Laraflow\Console\Commands;

class Init extends GitCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laraflow:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialize a new git repo with support for the branching model.';

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
