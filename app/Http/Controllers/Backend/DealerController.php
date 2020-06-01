<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Dealer;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dealers=Dealer::all();
        return view('backend.dealer.index', compact('dealers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.dealer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Dealer::create($request->all());

        // return back('admin/dealers');
        return redirect('admin/dealers');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dealer  $dealer
     * @return \Illuminate\Http\Response
     */
    public function show(Dealer $dealer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dealer  $dealer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $dealer=Dealer::findOrFail($id);
        return view('backend.dealer.edit', compact('dealer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dealer  $dealer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        // Dealer::where('id',$id)->update($request->all());
        Dealer::find($id)->update($request->all());


        return redirect('admin/dealers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dealer  $dealer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Dealer::destroy($id);

        return redirect('admin/dealers');
    }
}
