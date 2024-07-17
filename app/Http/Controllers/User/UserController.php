<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller; 
use App\Models\User; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $user = $this->create($request->all());
        auth()->login($user);
        return  redirect()->route('useradd');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'usertitle' => ['required', 'string','max:255'], 
            'username' => ['required', 'string','max:255', 'unique:users'], 
            'password' => ['required', 'string', 'min:3', 'confirmed'],
        ]);
    }
    protected function create(array $data)
    {
        return User::create([
            'usertitle' => $data['usertitle'], 
            'username' => $data['username'], 
            'password' => Hash::make($data['password']),
        ]);
    }

    
      //user
      public function showUserlistForm()
      {
        $users = User::all();

          return view('user.list',['users'=> $users]);
      }
      public function showUsereditForm()
      {
          return view('user.edit');
      }
      public function showUseraddForm()
      {
          return view('user.add');
      }
      public function showUserdeleteForm()
      {
          return view('user.delete');
      }
  
}


