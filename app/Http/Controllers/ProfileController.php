<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Illuminate\Support\Facades\Hash;
use Validator;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $list_users = Profile::paginate(5);
        $commonData = [
            'list_users' => $list_users,
        ];
        return view('profile.profile', $commonData);
    }

    public function add(){
        return view('profile.profile_add');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $validasi = Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if($validasi->fails()){
            return redirect('/profile/add')
            ->withErrors($validasi)
            ->withInput();
        }

        $user = new Profile();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->id_role);
        $user->save();
        return redirect('/profile');
    }

    public function edit($id)
    {
        $user = Profile::findOrFail($id);
        $commonData = [
            'user' => $user,
        ];
        return view('profile.profile_edit', $commonData);
    }

    public function update($id, Request $request){
        $user = Profile::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();
        return redirect('/profile');
    }

    public function update_password($id, Request $request){
        $user = Profile::findOrFail($id);
        $user->password = Hash::make($request->name);
        $user->update();
        return redirect('/profile/edit/' .$id);
    }

    public function update_password_user($id, Request $request){
        $user = Profile::findOrFail($id);
        $user->password = Hash::make($request->name);
        $user->update();
        return back();
    }

    public function delete($id,Request $request){
        Profile::destroy($id);
        return redirect('/profile');
    }
}
