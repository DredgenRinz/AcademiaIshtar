<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $id
     * @return array
     */
    public function index()
    {

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
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function store(Request $request)
    {
        if (Inventory::find($request->id_item) != null){
            return ('Existe');
        } else{
        $newItem = New Inventory;
        $newItem->fk_id_item = $request->id;
        $newItem->fk_id_user = Auth::user()->id;
        $newItem->isTracked = $request->isTracked;
        $newItem->isObtained = $request->isObtained;

        $newItem->save();
        return null;
        }


    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ItemsCollection = DB::select('SELECT li.*, i.id AS tracked_id, i.fk_id_item, s.season_name AS sea_name, i.isTracked
        FROM (inventories i INNER JOIN (lore_items li
            INNER JOIN seasons s ON li.fk_id_seasons = s.id) ON i.fk_id_item = li.id)
            INNER JOIN users u ON i.fk_id_user = u.id
            WHERE u.id ='.$id);

        return $ItemsCollection;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $newItem = Inventory::find($id);
        $newItem->fk_id_item = $request->id;
        $newItem->fk_id_user = Auth::user()->id;
        $newItem->isTracked = $request->isTracked;
        $newItem->isObtained = $request->isObtained;

        $newItem->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        Inventory::destroy($id);
        return ('ok');
    }
}
