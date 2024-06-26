@extends('layout.master')

@section('content')



<div class="col list-employee" >
    <div class="row">
        <div class="col-3">
            <h5 style="display: inline-block; padding-left: 20px;">Thêm suất chiếu mới</h5>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif
    <hr>

    <div class="row justify-content-center">
        <form action="{{ route('films.store') }}" class="form-control" style="width: 957px; height: 1150px;" method="POST">
            @csrf
            @method('POST')

            <div class="fo" style="padding: 10px 25px">
            
                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px"> 
                    <label for="" style="padding: 10px 0;">Tiêu đề</label>
                    <input type="text" name="Film_Name" id="Film_Name" class="col-3 form-control" style="height: 36px; width: 100%; padding: 5px;" value="{{old('Film_Name') }}">
                </div>


                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px">   
                    <label for="" style="padding: 10px 0;">Mô tả</label>  
                    <input type="text" name="Description" id="Description" class="col-3 form-control" style="height: 72px; width: 100%; padding: 5px;" value="{{old('Description') }}">
                </div>

                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px">
                    <label for="" style="padding: 10px 0;">Độ tuổi</label>
                    <input type="number" name="Age" id="Age" class="col-3 form-control" style="height: 36px; width: 100%; padding: 5px;" value="{{old('Age') }}">
                </div>

                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px">   
                    <label for="" style="padding: 10px 0;">Ảnh bìa (url)</label>  
                    <input type="text" name="Image_url" id="Image_url" class="col-3 form-control" style="height: 36px; width: 100%; padding: 5px;" value="{{old('Image_url') }}">
                </div>


                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px">   
                    <label for="" style="padding: 10px 0;">Trailler (url youtube)</label>  
                    <input type="text" name="Trailler_url" id="Trailler_url" class="col-3 form-control" style="height: 36px; width: 100%; padding: 5px;" value="{{old('Trailler_url') }}">
                </div>

                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px">
                    <label for="" style="padding: 10px 0;">Thời lượng</label>
                    <input type="number" name="Film_time" id="Film_time" class="col-3 form-control" style="height: 36px; width: 100%; padding: 5px;" value="{{old('Film_time') }}">
                </div>

                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px">
                    <label for="" style="padding: 10px 0;">Ngôn ngữ</label>
                    <select type="text" name="Language" id="Language" class="col-3 form-control" style="height: 36px; width: 100%; " value="{{old('Language') }}">
                        <option value=""></option>
                        <option value="Tiếng Việt">Tiếng Việt</option>
                        <option value="Tiếng Anh">Tiếng Anh - Phụ đề tiếng Việt</option>
                        <option value="Tiếng Trung">Tiếng Trung - Phụ đề tiếng Việt</option>
                        <option value="Tiếng Nhật">Tiếng Nhật - Phụ đề tiếng Việt</option>
                        <option value="Tiếng Thái">Tiếng Thái - Phụ đề tiếng Việt</option>
                    </select>
                </div>

                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px">
                    <div class="col-6" style="padding: 0">
                        <label for="" style="padding: 10px 0;">Ngày khởi chiếu</label>
                        <input type="date" name="DOS" id="DOS" class="col-3 form-control" style="height: 36px; width: 240px; " value="{{old('DOS') }}">
                    </div>
                    
                    <div class="col-6" style="padding: 0">
                        <label for="" style="padding: 10px 0;">Ngày dừng chiếu</label>
                        <input type="date" name="DOE" id="DOE" class="col-3 form-control" style="height: 36px; width: 240px; " value="{{old('DOE') }}">
                    </div>
                </div>


                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px">
                    <label for="" style="padding: 10px 0;">Thể loại</label>
                    <div class="row" style="height: 40px">
                        <div class="col-2">
                            <input class="form-check-input" type="radio" name="Category" id="Category1" value="Hành động" {{ old('Category') == 'Hành động' ? 'checked' : '' }}>
                            <label class="form-check-label" for="Category1">
                                Hành động
                            </label>

                        </div>


                        <div class="col-2">
                            <input class="form-check-input" type="radio" name="Category" id="Category2" value="Tình cảm" {{ old('Category') == 'Tình cảm' ? 'checked' : '' }}>
                            <label class="form-check-label" for="Category2">
                                Tình cảm
                            </label>

                        </div>
    
                        <div class="col-2">
                            <input class="form-check-input" type="radio" name="Category" id="Category3" value="Hoạt hình" {{ old('Category') == 'Hoạt hình' ? 'checked' : '' }}>
                            <label class="form-check-label" for="Category3">
                                Hoạt hình
                            </label>

                        </div>

                        <div class="col-2">
                            <input class="form-check-input" type="radio" name="Category" id="Category4" value="Hài hước" {{ old('Category') == 'Hài hước' ? 'checked' : '' }}>
                            <label class="form-check-label" for="Category4">
                                Hài hước
                            </label>

                        </div>


                    </div>

                    <div class="row" style="height: 40px">

                        <div class="col-2">
                            <input class="form-check-input" type="radio" name="Category" id="Category5" value="Kinh dị" {{ old('Category') == 'Kinh dị' ? 'checked' : '' }}>
                            <label class="form-check-label" for="Category5">
                                Kinh dị
                            </label>

                        </div>

                        <div class="col-2">
                            <input class="form-check-input" type="radio" name="Category" id="Category5" value="Tâm lý" {{ old('Category') == 'Tâm lý' ? 'checked' : '' }}>
                            <label class="form-check-label" for="Category7">
                                Tâm lý
                            </label>

                        </div>
                    </div>

                    
                    
                </div>

                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px"> 
                    <label for="" style="padding: 10px 0;">Diễn viên</label>
                    <input type="text" name="Actor" id="Actor" class="col-3 form-control" style="height: 36px; width: 100%; padding: 5px;" value="{{old('Actor') }}">
                </div>


                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px"> 
                    <label for="" style="padding: 10px 0;">Đạo diễn</label>
                    <input type="text" name="Director" id="Director" class="col-3 form-control" style="height: 36px; width: 100%; padding: 5px;" value="{{old('Director') }}">
                </div>
                    


                <div class="row Name" style="padding: 42px;">
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-warning me-2" style="width: 110px; height: 48px; border: 1px solid #000; border-radius: 0;">Xác nhận</button>
                        <a href="{{ route('films.index') }}" class="btn btn-light" style="width: 110px; height: 48px; border: 1px solid #000; border-radius: 0;">Hủy</a>
                    </div>
                </div>

            </div>


           

            
        </form>
    </div> 
</div>



@endsection