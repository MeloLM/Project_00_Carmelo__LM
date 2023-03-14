<?php

namespace App\Http\Controllers;

use App\Models\Sell;
use Illuminate\Http\Request;
use App\Http\Requests\SellRequest;

class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct() {
        $this->middleware('auth')->except('index', 'show');
    }
    
    public function index()
    {
        $sells = Sell::all();
        return view('sell.index', compact('sells')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sell.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SellRequest $request)
    {
        $sell = Sell::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'cover'=>$request->file('cover')->store('public/foto'),
        ]);

        // $sell = Sell::create($request->all());
        // return view('sell.index', compact('sell'))

        return redirect(route('sell.index'))->with('houseCreated', 'Hai inserito annuncio');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sell $sell)
    {
        return view('sell.show', compact('sell'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sell $sell)
    {
        return view('sell.edit',compact('sell'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SellRequest $request, Sell $sell)
    {
        if($request->cover){
            $sell->update([
                'name'=>$request->name,
                'price'=>$request->price,
                'description'=>$request->description,
                'cover'=>$request->file('cover')->store('public/foto'),
            ]);
        }else{
            $sell->update([
                'name'=>$request->name,
                'price'=>$request->price,
                'description'->$request->description,
            ]);
        }

        return redirect(route('sell.index'))->with('houseUpdated', 'Hai modificato annuncio');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sell $sell)
    {
        $sell->delete();
        return redirect(route('sell.index'))->with('sellDeleted', 'Hai eliminato annuncio');
    }
}
