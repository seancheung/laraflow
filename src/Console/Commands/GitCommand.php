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
    protected $path;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->path = base_path();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $commands = $this->getCommands();
        if(!empty($commands)) {
            foreach ($commands as $key=>$command) {
                if($this->exec($command) != 0) {
                    break;
                }
            }
        }
    }

    /**
     * Execute the command.
     *
     * @param mixed $command
     * @return null|int The exit status code, null if the Process is not terminated
     */
    protected function exec($command)
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

        return $process->getExitCode();
    }

    /**
     * Get the commands to execute.
     *
     * @return array
     */
    protected function getCommands()
    {
        return [];
    }
}
