<?php

namespace App\Console\Commands;

use App\Models\Book;
use App\Support\HttpCall;
use Illuminate\Console\Command;

class ScrapAmazonRanks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:rank {book_name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrap that rank from the Book';

    /**
     * Execute the console command.
     *
     * @param HttpCall $call
     * @return void
     */
    public function handle(HttpCall $call) : void
    {
        $call->sendCallTo($this->argument('book_name'));
    }
}
