<?php

namespace Panoscape\Laraflow\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

abstract class GitCommand extends Command
{
    /**
     * Git path
     *
     * @var string
     */
    protected $git = 'git';

    /**
     * Work tree
     *
     * @var string
     */
    protected $workTree;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->workTree = base_path();
    }

    /**
     * Execute the command.
     *
     * @param mixed $command
     * @return void
     */
    protected function run($command)
    {
        $process;

        if($command instanceof Process) {
            $process = $command;
        }
        else {
            $process = new Process($command);
        }

        $process->run(function ($type, $buffer) {
            if (Process::ERR === $type) {
                $this->error($buffer);
            } else {
                $this->info($buffer);
            }
        });
    }
}
