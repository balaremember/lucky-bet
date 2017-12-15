<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{

    public function sendEventsToEventsList(Request $request)
    {
        $fullNameOfCategory = $request->input('currentPath');
        $entries = DB::select("SELECT id FROM categories WHERE category_name = \"$fullNameOfCategory\"");
        foreach ($entries as $entry)
        {
            foreach ($entry as $id)
            {
                $idOfCategory = $id;
            }
        }
        $entries = DB::select("SELECT * FROM events WHERE id = \"$idOfCategory\"");
        $events = [];
        foreach ($entries as $entry)
        {
            foreach ($entry as $event)
            {
                $events[] = $event;
            }
        }
    }
}
