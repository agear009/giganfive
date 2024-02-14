<?php
namespace App\Http\Controllers;
//import model Image
use App\Models\Image;
use App\Models\Product;
//return type view
use Illuminate\View\View;

use Illuminate\Http\Request;

// return type redirect respone
use Illuminate\Http\RedirectResponse;
//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    //
    public function index(): View
    {

        //get Image
       // $Images = Image::all();
        $modelimage = new image;
         $Images=$modelimage->getListimages();
        //render view Image
        return view('images.index',["title"=>"Image",'active'=>'Image'],compact('Images'));
    }
    // untuk menampilkan form tambah data
    public function create(): view {
        $Products=Product::all();
        return view('Images.Create',["title"=>"Create",'active'=>'Image'],compact('Products'));

    }
    //pungsi menambahkan data
    public function store(Request $request): RedirectResponse
    {

        $this->validate($request,[
            'id_Product' =>'required|max:255',
            'image' =>'required|image|mimes:jpeg,jpg,png|max:2048',

        ]);
        //upload image3
        $image=$request->file('image');
        $image-> storeAs('public/Images', $image->hashName());
        //create Image
        Image::create([
            'id_product'=>$request->id_Product,
            'image'=>$image->hashName(),


               ]);
        //redirect to index
        return Redirect()->route('imageproducts.index',["title"=>"Image",'active'=>'Image'])->with(['success'=>'data success ditambahkan!']);
    }

    //function show
    public function show(string $id):view
    {

        //get pos id
        $Image=Image::findorFail($id);

        //render view with Image
        return view('Images.show',["title"=>"Show",'active'=>'Image'],compact('Image'));
    }

    public function edit(string $id):View
    {
        //get Image by id
       // $Image=Image::findOrFail($id);
       $modelimagesById = new image;
       $Image=$modelimagesById->getListimagesById($id);
        return view('Images.edit',["title"=>"Edit",'active'=>'Image'], compact('Image'));

    }

    public function update(Request $request, $id): RedirectResponse

    {

        $this->validate($request,[

            'image' =>'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);
        //get Image by id
            $Image=Image::FindOrFail($id);

            //upload new image
            $image=$request->file('image');

            $image->storeAs('public/Images',$image->hashName());


            //delete old image
            Storage::delete('public/Images/'.$Image->image);

            //update Image with new image
            $Image->update([
                'image'=>$image->hashName(),
            ]);

        return redirect()->route('imageproducts.index',["title"=>"Image"])->with(['success'=>'data berhasil diubah!']);

    }

    public function destroy($id): RedirectResponse
    {
        //get Image id
        $Image=Image::findOrFail($id);

        //delete image

        Storage::delete('public/Images/'. $Image->image);

        // delete Image
        $Image->delete();

        //redirect to index
        return redirect()->route('imageproducts.index',["title"=>"Image",'active'=>'Image'])->with(['success'=>'data telah berhasil di delete!']);
    }
}
