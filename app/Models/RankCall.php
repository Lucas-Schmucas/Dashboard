<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class RankCall extends Model
{
    use HasFactory;

    /* @var array
   */
  protected $fillable = ['bestseller_rank', 'handbook_rank', 'techbook_rank', 'book_id'];

  public function book(): BelongsTo
   {
       return $this->belongsTo(Book::class);
   }
}
