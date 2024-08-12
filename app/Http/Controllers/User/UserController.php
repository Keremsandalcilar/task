<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\NullableType;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.list', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();

        User::create([
            'title' => $request['title'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->route('userlist')->with('swallMessages', ['icon' => 'success', 'title' => 'Başarılı', 'text' => 'Kullanıcı kayıt edildi.']);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = auth()->user();
        return view('profile.edit', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('userlist')->with('swallMessages', ['icon' => 'error', 'title' => 'Uyarı', 'text' => 'Kullanıcı bulunamadı']);
            //return abort(404);
        }
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validator($request->all())->validate();
        $user = User::find($id);
        if (!$user) {
            return abort(404);
        }

        $user->username = $request->input('username');
        $user->title = $request->input('title');    
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }
        $a = $user->updateOrFail();

        return redirect()->route('useredit', [$user->id])->with('swallMessages', ['icon' => 'success', 'title' => 'Başarılı', 'text' => 'Kullanıcı güncellendi']);
    }

    /**
     * Remove the specified resource from storage.
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'title' => ['string', 'required', 'max:255'],
            'username' => ['string', 'required'],
            'password' => ['nullable', 'string', 'min:6'],
            'password_confirmation' => ['same:password','min:6'],
        ]);
    }


    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('userlist')->with('swallMessages', ['icon' => 'success', 'title' => 'Başarılı', 'text' => 'Kullanıcı silindi.']);
    }
    

    public function bulkDelete(Request $request)
    {
        $userIds = $request->input('user_ids');

        if (!empty($userIds)) {
            User::whereIn('id', $userIds)->delete();
            return redirect()->route('userlist')->with('swallMessages' ,['icon' => 'success', 'title' => 'Başarılı', 'text' => 'Seçili kullanıcılar silindi.']);
        }
        return redirect()->route('userlist')->with('swallMessages', ['icon' => 'error', 'title' => 'Uyarı', 'text' => 'Hiçbir kullanıcı seçilemedi']);
    }
}

