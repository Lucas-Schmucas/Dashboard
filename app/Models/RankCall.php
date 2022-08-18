<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
