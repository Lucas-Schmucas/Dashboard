<?php

namespace App\Support;

use App\Models\Book;
use DOMDocument;
use Illuminate\Support\Facades\Http;

class HttpCall
{
    /**
     * @param $name
     * @return DOMDocument
     */
    public function sendCallTo($name) : string
    {
        $url = Book::getBookUrlFromName($name);

       return Http::get($url)->body();
    }

    /**
     * @param string $htmlString
     * @return DOMDocument
     */
    private function htmlToObject(string $htmlString) : DOMDocument
    {
        $dom = new DOMDocument();
        $dom->loadHTML($htmlString);
        return $dom;
    }
    // TODO: function to save the array to the db
}
