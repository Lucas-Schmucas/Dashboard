<?php

namespace App\Support;

use App\Models\Book;
use Illuminate\Support\Facades\Http;

class HttpCall
{

    /**
     * @param $name
     * @return array
     */
    public function sendCallTo($name) : array
    {
        $url = Book::getBookUrlFromName($name);

        return Http::get($url)->object();
    }
    // TODO: function to parse ranks out of the body in a key value array

    // TODO: function to save the array to the db
}
