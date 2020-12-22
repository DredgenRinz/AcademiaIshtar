<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail(mixed $id)
 * @method static where(string $string, mixed $id)
 * @method static find(LoreItem $loreItem)
 */
class LoreItem extends Model
{
    use HasFactory;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'lore_items';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'quality','item_lore','drop_from','img_url','fk_id_seasons','fk_id_weapon','fk_id_armor','fk_id_accessory',
        'fk_id_book','updated_by'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];

    public function Season()
    {
        return $this->hasOne('App\Models\Season','fk_id_seasons','id');
    }
}
