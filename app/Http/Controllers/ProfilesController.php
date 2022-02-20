<?php

namespace App\Http\Controllers;

use App\Models\Profiles;
use Illuminate\Http\Request;
use App\Http\Requests\EditProfile;

class ProfilesController extends Controller
{
public function index(){


      $users = Profiles::get();

      return view('profile', compact('users'));

}

public function edit ($id)
{

if (!$edit = Profiles::find($id)){
    return redirect()->back();  // se der erro volte a pagina
}

return view('editprofile', compact('edit'));

}

public function update (EditProfile $request, $id)
{

if (!$edit = Profiles::find($id)){
    return redirect()->back();  // se der erro volte a pagina
}


$edit->update($request->all());

return redirect()
->route('profile')
->with('message', 'Morando Deletado com Sucessso');}

}
