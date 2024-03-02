<?php

namespace App\Http\Controllers;
//import model category
use App\Models\Category;
//return type view
use Illuminate\View\View;

use Illuminate\Http\Request;

// return type redirect respone
use Illuminate\Http\RedirectResponse;
//import Facade "Storage"
use Illuminate\Support\Facades\Storage;




class categoryController extends Controller
{
    //
    public function index(): View
    {

        //get category
        $categorys = Category::all();
        //render view category
        return view('Categorys.Index',["title"=>"Category",'active'=>'Category'],compact('categorys'));
    }
    // untuk menampilkan form tambah data
    public function create(): view {
        return view('Categorys.Create',["title"=>"Create",'active'=>'Category']);

    }
    //pungsi menambahkan data
    public function store(Request $request): RedirectResponse
    {

        $this->validate($request,[


            'category' =>'required|min:2|max:255'
        ]);

        category::create([

            'category'=>$request->category

        ]);
        //redirect to index
        return Redirect()->route('categorys.index',["title"=>"Category",'active'=>'Category'])->with(['success'=>'data success ditambahkan!']);
    }

    //function show
    public function show(string $id):view
    {

        //get pos id
        $category=Category::findorFail($id);

        //render view with category
        return view('Categorys.Show',["title"=>"Show",'active'=>'Category'],compact('category'));
    }

    public function edit(string $id):View
    {
        //get category by id
        $category=Category::findOrFail($id);
        return view('Categorys.Edit',["title"=>"Edit",'active'=>'Category'], compact('category'));

    }

    public function update(Request $request, $id): RedirectResponse

    {

        $this->validate($request,[


            'category' =>'required|min:2|max:255'
        ]);
        //get category by id
        $category=Category::FindOrFail($id);


            $category->update([
                'category'=>$request->category
            ]);

        return redirect()->route('categorys.index',["title"=>"Category",'active'=>'Category'])->with(['success'=>'data berhasil diubah!']);

        }
    public function destroy($id): RedirectResponse
    {
        //get category id
        $category=Category::findOrFail($id);

        //delete image

        Storage::delete('public/categorys/'. $category->image);

        // delete category
        $category->delete();

        //redirect to index
        return redirect()->route('categorys.index',["title"=>"Category",'active'=>'Category'])->with(['success'=>'data telah berhasil di delete!']);
    }
}
