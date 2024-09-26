<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Book extends Model
{
    use HasFactory;

    /**
     * @param string $name
     * @return string
     */
    static public function getBookUrlFromName(string $name) : string
    {
        return DB::table('books')
            ->where('name', '=', $name)->first()->url;
    }
}
