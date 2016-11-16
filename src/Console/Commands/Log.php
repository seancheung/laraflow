<?php

namespace Panoscape\Laraflow\Console\Commands;

class Log extends GitCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laraflow:log';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show log deviating from base branch.';

    /**
     * Get the commands to execute.
     *
     * @return array
     */
    protected function getCommands()
    {
        return [
            "{$this->git} --work-tree={$this->path} log"
        ];
    }

}
