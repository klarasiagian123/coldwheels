<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Toy;
use Illuminate\Http\Request;

class ToyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $data['toy'] = Toy::all();

        return view('site.toys.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view('site.toys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {


        $request->validate([
            'item'     => 'required',
            'type'     => 'required',
            'price'    => 'required',
            'img'      => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:20048|dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000'
        ]);

        $input = $request->all();

        if ($img = $request->file('img')) {
            $destinationPath = 'global/img/';
            $profileImage = date('YmdHis') . "." . $img->getClientOriginalExtension();
            $img->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        }

        Toy::create($input);

        return redirect()->route('site.toys.getIndex')->with('success', 'Toy Added Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('site.toys.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
        $data = Toy::find($id);
        return view('site.toys.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postUpdate( Request $request, $id)
    {
        $data = Toy::find($id);
        $data->item = $request->input('item');
        $data->type = $request->input('type');
        $data->price = $request->input('price');

        $input = $request->all();

            if ($img = $request->file('img')) {
                $destinationPath = 'global/img/';
                $profileImage = date('YmdHis') . "." . $img->getClientOriginalExtension();
                $img->move($destinationPath, $profileImage);
                $input['img'] = "$profileImage";
            }

        $data->update($input);

        return redirect()->route('site.toys.getIndex')->with('success bg-dark', 'Toy Edited Successfully!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDestroy($id)
    {
        $data = Toy::find($id);
        $data->delete();
        return back()->with('toast_warning', 'Toy Deleted Successfully!');
    }
}
