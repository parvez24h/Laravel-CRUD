<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(){
        $items = Item::latest()->paginate(5);
        return view('welcome', compact('items'));
    }
    public function view($id){

        $item = Item::where('id', $id)->first();

        return view('item', compact('item'));
        

    }
    public function update($id){

        $item = Item::where('id', $id)->first();

        return view('update', compact('item'));
    }
    
    public function update_data(Request $request, $id){

        $this->validate($request, [
            'name' =>'required',
            'description' =>'required',
            'image' =>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $item = Item::where('id', $id)->first();

        if(isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $item->image = $imageName;
        }
    
        $item->name = $request->name;
        $item->description = $request->description;
        $item->save();
  
          return back()->withSuccess('Item updated successfully!!');

    }

    public function delete($id){
        $item = Item::where('id', $id)->first();
        $item->delete();
        return back()->withSuccess('Item deleted successfully!!');
    }
    
    public function delete_data($id){
        $item = Item::where('id', $id)->first();
        $item->delete();
        return back()->withSuccess('Item deleted successfully!!');
    }


    public function create(){
        return view('create');
    }
    public function store(Request $request){
      //  dd($request->all());

      // validate data
      $this->validate($request, [
          'name' =>'required',
          'description' =>'required',
          'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $item = new Item();
        $item->name = $request->name;
        $item->description = $request->description;
        $item->image = $imageName;
        $item->save();

        return back()->withSuccess('Item created successfully!!');

    }
}
