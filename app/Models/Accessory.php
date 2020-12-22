<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    use HasFactory;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'accessories';

    protected $primaryKey = 'id';

    protected $fillable = [
        'type'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
