<?php

namespace Panoscape\Laraflow\Console\Commands\Release;

use Panoscape\Laraflow\Console\Commands\GitCommand;

class Checkout extends GitCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'release:checkout';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

}
