<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoreBook extends Model
{
    use HasFactory;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'lore_books';

    protected $primaryKey = 'id';

    protected $fillable = [
        'saga', 'column','bungie_url'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
