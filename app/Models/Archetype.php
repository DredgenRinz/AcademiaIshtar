<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archetype extends Model
{
    use HasFactory;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'archetypes';

    protected $primaryKey = 'id';

    protected $fillable = [
        'archetype'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
