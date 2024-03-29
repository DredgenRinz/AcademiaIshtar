<?php

namespace App\Http\Controllers;

use App\Models\LoreItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Throwable;

class LoreItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Support\Collection
     */
    public function index()
    {

        $ItemsCollection = DB::select('SELECT lore_items.*, u.name AS admin, s.season_name AS sea_name  FROM ((lore_items
    INNER JOIN admins a ON a.id = lore_items.updated_by)
    INNER JOIN users u ON a.fk_id_user = u.id)
    INNER JOIN seasons s ON lore_items.fk_id_seasons = s.id');

        return $ItemsCollection;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|null
     */
    public function store(Request $request)
    {
        try {
            $newitem = new LoreItem;

            $newitem->name = $request->name;
            $newitem->quality = $request->quality;
            $newitem->item_lore = $request->item_lore;
            $newitem->drop_from = $request->drop_from;
            $newitem->img_url = $request->img_url;
            $newitem->fk_id_seasons = $request->fk_id_seasons;
            $newitem->fk_id_weapon = $request->fk_id_weapon;
            $newitem->fk_id_armor = $request->fk_id_armor;
            $newitem->fk_id_accessory = $request->fk_id_accessory;
            $newitem->fk_id_book = $request->fk_id_book;
            $newitem->updated_by = Auth::user()->id;

            $newitem->save();
            return null;
        } catch (Throwable $error){
            return compact('error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoreItem  $loreItem
     * @return \Illuminate\Http\Response
     */
    public function show(LoreItem $loreItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoreItem  $loreItem
     * @return \Illuminate\Http\Response
     */
    public function edit(LoreItem $loreItem)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LoreItem  $loreItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $edititem = LoreItem::find($id);

        $edititem->name = $request->name;
        $edititem->quality = $request->quality;
        $edititem->item_lore = $request->item_lore;
        $edititem->drop_from = $request->drop_from;
        $edititem->img_url = $request->img_url;
        $edititem->fk_id_seasons = $request->fk_id_seasons;
        $edititem->fk_id_weapon = $request->fk_id_weapon;
        $edititem->fk_id_armor = $request->fk_id_armor;
        $edititem->fk_id_accessory = $request->fk_id_accessory;
        $edititem->fk_id_book = $request->fk_id_book;
        $edititem->updated_by = Auth::user()->id;

        $edititem->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LoreItem::destroy($id);
    }
}
