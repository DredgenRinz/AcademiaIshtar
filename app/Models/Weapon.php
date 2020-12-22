<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'weapons';

    protected $primaryKey = 'id';

    protected $fillable = [
        'type', 'archetype'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
