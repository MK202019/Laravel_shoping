<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::get();
        $data = ['items'=> $items];
        return view('admin.item.index',$data);
    }

    public function create()
    {
        return view('admin.item.create');
    }

    public function add(Request $request)
    {
        $posts = $request->all();
        Item::create($posts);
        return redirect('/admin/item');
    }

    public function edit(Request $request, $id)
    {
        $item = Item::find($id);
        $data = ['item => $item'];
        return view('admin.item.edit',$data);
    }
}
