<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\EditProfile;
use App\Http\Requests\EditValores;



class AdminController extends Controller
{
    
public function index(){
     

      $users = Admin::get();

      return view('admin.index', compact('users'));

}

public function profile($id){
     

      
      if (!$edit = Admin::find($id)){
            return redirect()->back();  // se der erro volte a pagina
        }
        
        return view('admin.profile', compact('edit'));
        

}



public function edit ($id)
{

if (!$edit = Admin::find($id)){
    return redirect()->back();  // se der erro volte a pagina

}

return view('admin.editprofile', compact('edit'));


}



public function update (EditProfile $request, $id)
{

if (!$edit = Admin::find($id)){
    return redirect()->back();  // se der erro volte a pagina
}


$edit->update($request->all());

return redirect()
->route('admin')
->with('message', 'Morando Deletado com Sucessso');}




public function editvalores ($id)
{

if (!$edit = Admin::find($id)){
    return redirect()->back();  // se der erro volte a pagina
}

return view('admin.editvalores', compact('edit'));

}

public function updatevalores (EditValores $request, $id)
{

if (!$edit = Admin::find($id)){
    return redirect()->back();  // se der erro volte a pagina
}

$edit->update($request->all());

return view('admin.editvalores', compact('edit'));
}



}

