<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $data['user'] = User::all();

        return view('site.register.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view('site.register.create');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function headStore(Request $request)
    {


        $request->validate([
            'name'     => 'required',
            'email'     => 'required',
            'password'    => 'required',
        ]);

        $input = $request->all();

        User::create($input);

        return redirect()->route('site.toys.getIndex');

    }


}
