<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'admin';

    protected $primaryKey = 'id';

    protected $fillable = [
        'fk_id_user'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
