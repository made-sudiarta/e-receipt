<?php

namespace App\Http\Controllers;

use App\Models\Method;
use App\Http\Requests\StoreMethodRequest;
use App\Http\Requests\UpdateMethodRequest;

class MethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $method = Method::all();
        return view('method.index', compact('method'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('method.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMethodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMethodRequest $request)
    {
        //
        $method = new Method();
        $method->paymentmethod = $request->paymentmethod;
        $method->created_at = Now();
        $method->updated_at = Now();
        $method->save();

        return redirect('method');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function show(Method $method)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Method::findOrFail($id);
        return view('method.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMethodRequest  $request
     * @param  \App\Models\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMethodRequest $request, $id)
    {
        //
        $method = Method::findOrFail($id);
        $method->paymentmethod = $request->paymentmethod;
        $method->updated_at = Now();
        $method->save();

        return redirect('method');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $method = Method::findOrFail($id);
        // Storage::disk('local')->delete('public/blogs/' . $blog->image);
        $method->delete();
        return redirect('method');
    }
}
