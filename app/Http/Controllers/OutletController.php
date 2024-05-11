<?php

namespace App\Http\Controllers;
use App\Models\Outlet;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $outlets = Outlet::latest()->paginate(25);

        return view('outlets.index', compact('outlets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('outlets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|max:5',
            'name' => 'required|max:20', 
            'status' => 'required|in:berlangsung, selesai', 
            'address' => 'required|max:50', 
            'phone' => 'required|numeric|min:15', 
        ]);

        Outlet::create([
            'code' => $request->code,
            'name'     => $request->name,
            'status'   => $request->status,
            'address'   => $request->address,
            'phone'   => $request->phone
        ]);

        //redirect to index
        return redirect()->route('outlets.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $outlets = Outlet::find($id);

        return view('outlets.edit', compact('outlets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'code' => 'required|max:5',
            'name' => 'required|max:20', 
            'status' => 'required|in:berlangsung, selesai', 
            'address' => 'required|max:50', 
            'phone' => 'required|numeric|min:15', 
        ]);

        $outlets = Outlet::find($id);

        $outlets->update([
            'code' => $request->code,
            'name'     => $request->name,
            'status'   => $request->status,
            'address'   => $request->address,
            'phone'   => $request->phone
        ]);

        //redirect to index
        return redirect()->route('outlets.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $outlets = Outlet::find($id);
        $outlets->delete();

        //redirect to index
        return redirect()->route('outlets.index');
    }
}
