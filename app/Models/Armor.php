<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armor extends Model
{
    use HasFactory;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'armors';

    protected $primaryKey = 'id';

    protected $fillable = [
        'armor_type'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
