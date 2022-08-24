<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;
// use App\Models\ListItem as ModelsListItem;
use League\CommonMark\Extension\CommonMark\Node\Block\ListItem as BlockListItem;

class ChecklistController extends Controller
{
    public function index() {
        return view('welcome', ['listItems' => ListItem::where('is_complete', 0)->get()]);
    }

    public function markComplete($id){
        // \Log::info($id);
        $listItem = ListItem::find($id);
        $listItem->is_complete = 1;
        $listItem->save();
        
        return redirect('/');
    }

    public function saveItem(Request $request) {
        
        $newListItem = new ListItem();
        $newListItem->name = $request->listItem;
        $newListItem->is_complete = 0;
        $newListItem->save();
        
        return redirect('/');
    }


}
