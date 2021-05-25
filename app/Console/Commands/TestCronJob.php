<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class TestCronJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */


    protected $signature = 'test-job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send the push notification every one minute';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $time_start = microtime(true);
        Log::info( $this->signature.' started');
        echo($this->signature.' started'). PHP_EOL;

        $time_end = microtime(true);
        Log::info($this->signature.' finished | took ' . ($time_end - $time_start) . 's');
        echo($this->signature.' finished | took ' . ($time_end - $time_start) . 's'). PHP_EOL;
    }
}
