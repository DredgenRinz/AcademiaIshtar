<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'seasons';

    protected $primaryKey = 'id';

    protected $fillable = [
        'season_name', 'year'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];

    public function LoreItems(){
        return $this->hasMany('App\Models\LoreItem');
    }
}
