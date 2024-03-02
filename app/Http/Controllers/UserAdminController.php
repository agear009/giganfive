<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


//return type view
use Illuminate\View\View;
// return type redirect respone
use Illuminate\Http\RedirectResponse;
//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class UserAdminController extends Controller
{
    public function index(){
        $Users=user::all();

        return view('User.Index',["title"=>"User","active"=>"User"],compact('Users'));
    }

    public function create(): view {

        return view('User.Create',["title"=>"Create",'active'=>'User']);

    }

    public function store(request $request){
        //return request()->all();
       $this->validate($request,[

            'level' =>'required|max:255',
            'name'=>'required|min:2|max:255',
            'email'=>'required|min:2|max:255',
            'password'=>'required|min:8|max:255',
            //'confrimpassword'=>'required|max:255'

        ]);
        //dd('data berhasil',$request);

        user::create([

            'level'=>$request->level,
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
               ]);
             //  $request->session()->Flash('success','Registration successfull! please Login');
             $Users=user::all();
               return view('User.Index',["title"=>"User","active"=>"User"],compact('Users'))->with('success','Registration successfull! please Login');

    }

    public function show(string $id):view
    {

        //get pos id
        $user=user::findorFail($id);

        //render view with user
        return view('User.Show',["title"=>"Show",'active'=>'User'],compact('user'));
    }

    public function edit(string $id):View
    {
        //get user by id
        $user=user::findOrFail($id);
        return view('User.Edit',["title"=>"Edit",'active'=>'User'], compact('user'));

    }


    public function update(Request $request, $id): RedirectResponse

    {

        $this->validate($request,[

            'level' =>'|max:255',
            'name' =>'required|min:2|max:255',
            'email'=>'required',
            'password'=>'required|min:1|max:20'
        ]);
        //get user by id
        $user=user::FindOrFail($id);

        if($request->hasFile('photo'))
        {
            //upload new image
            $photo=$request->file('photo');

            $photo->storeAs('public/users',$photo->hashName());


            //delete old image
            Storage::delete('public/users/'.$user->photo);

            //update user with new image
            $user->update([


                'level'=>$request->level,
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password
            ]);

        }
        else
        {
            $user->update([
                'level'=>$request->level,
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password
            ]);

        }
        return redirect()->route('users.index',["title"=>"users",'active'=>'user'])->with(['success'=>'data berhasil diubah!']);

    }

    public function destroy($id): RedirectResponse
    {
        //get user id
        $user=user::findOrFail($id);

        //delete image

        Storage::delete('public/users/'. $user->photo);

        // delete user
        $user->delete();

        //redirect to index
        return redirect()->route('users.index',["title"=>"users",'active'=>'user'])->with(['success'=>'data telah berhasil di delete!']);
    }
}
