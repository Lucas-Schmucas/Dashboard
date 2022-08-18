<?php

namespace App\Support;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use App\Models\Book;

class HttpCall
{

    /**
     * @param $name
     * @return array
     */
    public function sendCallTo($name) : array
    {
        $url = Book::getBookUrlFromName($name);
        $client = new Client();
        $request = new Request('GET',$url);
        $res = $client->sendAsync($request)->wait();
        $res->getBody();
        $arrayWithRanks = [];
        // $arrayWithRanks = parsed body
        return $arrayWithRanks;
    }
    // TODO: function to parse ranks out of the body in a key value array

    // TODO: function to save the array to the db
}
