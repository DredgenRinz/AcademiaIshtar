<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inventories';

    protected $primaryKey = 'id';

    protected $fillable = [
        'fk_id_item','fk_id_user','isTracked','isObtained'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
