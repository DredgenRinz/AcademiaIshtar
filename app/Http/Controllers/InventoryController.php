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
        $ItemsCollection = DB::select('SELECT LI.*, I.ID AS TRACKED_ID, I.FK_ID_ITEM, S.SEASON_NAME AS sea_name, I.isTracked
        FROM (Inventories I INNER JOIN (LORE_ITEMS LI
            INNER JOIN SEASONS S ON LI.FK_ID_SEASONS = S.ID) ON I.FK_ID_ITEM = LI.ID)
            INNER JOIN USERS U ON I.FK_ID_USER = U.ID
            WHERE U.ID ='.$id);

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
