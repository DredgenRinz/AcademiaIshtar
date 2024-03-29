<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeaponType extends Model
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
        'type'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
