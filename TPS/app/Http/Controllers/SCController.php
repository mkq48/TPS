<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\SC;
use Illuminate\Http\Request;

class SCController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        $scs = SC::orderBy('Cinema_ID', 'desc')->paginate(10);
        return view('scs.sc', compact('scs', 'films'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $films = Film::all();
        return view('scs.add', compact('films'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Cinema_Name'  => 'required',
            'Film_Name'  => 'required',
            'SC'  => 'required',
            'DOS'  => 'required',
            'Price'  => 'required',    
        ], [
            'Cinema_Name' => 'Vui lòng chọn rạp',
            'Film_Name' => 'Vui lòng chọn phim',
            'SC' => 'Vui lòng chọn suất chiếu',
            'DOS' => 'Vui lòng chọn ngày chiếu',
            'Price' => 'Vui lòng nhập giá suất chiếu',
        ]);
        if(SC::create($request->all())){
            return redirect()->Route('scs.index')->with('success', 'Thêm mới thành công');
        }  
    }

    /**
     * Display the specified resource.
     */
    public function show(SC $sc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SC $sc)
    {
        $films = Film::all();
        return view('scs.edit', compact('sc', 'films'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SC $sc)
    {
        $request->validate([
            'Cinema_Name'  => 'required',
            'Film_Name'  => 'required',
            'SC'  => 'required',
            'DOS'  => 'required',
            'Price'  => 'required',    
        ], [
            'Cinema_Name' => 'Vui lòng chọn rạp',
            'Film_Name' => 'Vui lòng chọn phim',
            'SC' => 'Vui lòng chọn suất chiếu',
            'DOS' => 'Vui lòng chọn ngày chiếu',
            'Price' => 'Vui lòng nhập giá suất chiếu',
        ]);

        if($sc->update($request->all())){
            return redirect()->route('scs.index')->with('success', 'Cập nhật thông tin thành công');
        } 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SC $sc)
    {
        $sc->delete();
        return redirect()->route('scs.index')->with('success', 'Xóa thành công !');
    }
}
