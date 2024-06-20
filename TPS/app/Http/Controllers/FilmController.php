<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::orderBy('Film_ID', 'desc')->paginate(10);
        return view('films.film', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('films.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Film_Name' => 'required',
            'Description' => 'required',
            'Age' => 'required',
            'Image_url' => 'required',
            'Trailler_url' => 'required',
            'Film_time' => 'required',
            'Language' => 'required',
            'DOS' => 'required',
            'DOE' => 'required',
            'Category' => 'required',
            'Actor' => 'required',
            'Director' => 'required',    
        ], [
            'Film_Name' => 'Vui lòng nhập tiêu đề',
            'Description' => 'Vui lòng nhập mô tả',
            'Age' => 'Vui lòng nhập độ tuổi',
            'Image_url' => 'Vui lòng nhập url ảnh bìa',
            'Trailler_url' => 'Vui lòng nhập url trailler',
            'Film_time' => 'Vui lòng nhập thời lượng chiếu',
            'Language' => 'Vui lòng nhập ngôn ngữ',
            'DOS' => 'Vui lòng nhập ngày khởi chiếu',
            'DOE' => 'Vui lòng nhập ngày dừng chiếu',
            'Category' => 'Vui lòng nhập thể loại',
            'Actor' => 'Vui lòng nhập diễn viên',
            'Director' => 'Vui lòng nhập đạo diễn',
        ]);
        if(Film::create($request->all())){
            return redirect()->Route('films.index')->with('success', 'Thêm mới thành công');
        } 
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        return view('films.edit', compact('film'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        $request->validate([
            'Film_Name' => 'required',
            'Description' => 'required',
            'Age' => 'required',
            'Image_url' => 'required',
            'Trailler_url' => 'required',
            'Film_time' => 'required',
            'Language' => 'required',
            'DOS' => 'required',
            'DOE' => 'required',
            'Category' => 'required',
            'Actor' => 'required',
            'Director' => 'required',    
        ], [
            'Film_Name' => 'Vui lòng nhập tiêu đề',
            'Description' => 'Vui lòng nhập mô tả',
            'Age' => 'Vui lòng nhập độ tuổi',
            'Image_url' => 'Vui lòng nhập url ảnh bìa',
            'Trailler_url' => 'Vui lòng nhập url trailler',
            'Film_time' => 'Vui lòng nhập thời lượng chiếu',
            'Language' => 'Vui lòng nhập ngôn ngữ',
            'DOS' => 'Vui lòng nhập ngày khởi chiếu',
            'DOE' => 'Vui lòng nhập ngày dừng chiếu',
            'Category' => 'Vui lòng nhập thể loại',
            'Actor' => 'Vui lòng nhập diễn viên',
            'Director' => 'Vui lòng nhập đạo diễn',
        ]);

        if($film->update($request->all())){
            return redirect()->route('films.index')->with('success', 'Cập nhật thông tin thành công');
        } 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('films.index')->with('success', 'Xóa thành công !');
    }
}
