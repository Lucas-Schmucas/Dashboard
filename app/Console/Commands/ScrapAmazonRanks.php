<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ScrapAmazonRanks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:rank';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a call to Amazon and grab those book ranks';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return 0;
    }
}
