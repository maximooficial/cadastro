<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request\editProfile;

use App\Models\User;
use App\Models\Admin;


class AutoBuscaController extends Controller
{
    function index()
    {
        return view('buscar');
    }

    function action(Request $request)
    {
        $data = $request->all();

        $query = $data['query'];

        $filter_data = Admin::select('name','email', 'cpf')
                        ->where('name', 'LIKE', '%'.$query.'%')
                        ->get();

        return response()->json($filter_data);
    }
}