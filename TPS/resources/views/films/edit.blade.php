@extends('layout.master')

@section('content')



<div class="col list-employee" >
    <div class="row">
        <div class="col-3">
            <h5 style="display: inline-block; padding-left: 20px;">Sửa suất chiếu</h5>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif
    <hr>

    <div class="row justify-content-center">
        <form action="{{ route('films.update', $film) }}" class="form-control" style="width: 957px; height: 1100px;" method="POST">
            @csrf
            @method('PUT')
            <div class="fo" style="padding: 10px 25px">
            
                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px"> 
                    <label for="" style="padding: 10px 0;">Tiêu đề</label>
                    <input type="text" name="Film_Name" id="Film_Name" class="col-3 form-control" style="height: 36px; width: 100%; padding: 5px;" value="{{$film->Film_Name }}">
                </div>


                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px">   
                    <label for="" style="padding: 10px 0;">Mô tả</label>  
                    <input type="text" name="Description" id="Description" class="col-3 form-control" style="height: 72px; width: 100%; padding: 5px;" value="{{$film->Description }}">
                </div>

                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px">
                    <label for="" style="padding: 10px 0;">Độ tuổi</label>
                    <input type="number" name="Age" id="Age" class="col-3 form-control" style="height: 36px; width: 100%; padding: 5px;" value="{{$film->Age }}">
                </div>

                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px">   
                    <label for="" style="padding: 10px 0;">Ảnh bìa (url)</label>  
                    <input type="text" name="Image_url" id="Image_url" class="col-3 form-control" style="height: 36px; width: 100%; padding: 5px;" value="{{$film->Image_url }}">
                </div>


                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px">   
                    <label for="" style="padding: 10px 0;">Trailler (url youtube)</label>  
                    <input type="text" name="Trailler_url" id="Trailler_url" class="col-3 form-control" style="height: 36px; width: 100%; padding: 5px;" value="{{$film->Trailler_url }}">
                </div>

                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px">
                    <label for="" style="padding: 10px 0;">Thời lượng</label>
                    <input type="number" name="Film_time" id="Film_time" class="col-3 form-control" style="height: 36px; width: 100%; padding: 5px;" value="{{$film->Film_time }}">
                </div>

                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px">
                    <label for="" style="padding: 10px 0;">Ngôn ngữ</label>
                    <select type="text" name="Language" id="Language" class="col-3 form-control" style="height: 36px; width: 100%; " value="{{$film->Language }}">
                        <option value="{{$film->Language }}">{{$film->Language }}</option>
                        <option value="Việt Nam">Việt Nam</option>
                        <option value="Tiếng Anh">Tiếng Anh</option>
                        <option value="Tiếng Trung">Tiếng Trung</option>
                    </select>
                </div>

                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px">
                    <div class="col-6" style="padding: 0">
                        <label for="" style="padding: 10px 0;">Ngày khởi chiếu</label>
                        <input type="date" name="DOS" id="DOS" class="col-3 form-control" style="height: 36px; width: 240px; " value="{{$film->DOS }}">
                    </div>
                    
                    <div class="col-6" style="padding: 0">
                        <label for="" style="padding: 10px 0;">Ngày dừng chiếu</label>
                        <input type="date" name="DOE" id="DOE" class="col-3 form-control" style="height: 36px; width: 240px; " value="{{$film->DOE }}">
                    </div>
                </div>


                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px">
                    <label for="" style="padding: 10px 0;">Thể loại</label>
                    <div class="row">
                        <div class="col-2">
                            <input class="form-check-input" type="radio" name="Category" id="Category1" value="Hành động" {{ $film->Category == 'Hành động' ? 'checked' : '' }}>
                            <label class="form-check-label" for="Category1">
                                Hành động
                            </label>

                        </div>


                        <div class="col-2">
                            <input class="form-check-input" type="radio" name="Category" id="Category2" value="Tình cảm" {{ $film->Category == 'Tình cảm' ? 'checked' : '' }}>
                            <label class="form-check-label" for="Category2">
                                Tình cảm
                            </label>

                        </div>
    
                        <div class="col-2">
                            <input class="form-check-input" type="radio" name="Category" id="Category3" value="Hoạt hình" {{ $film->Category == 'Hoạt hình' ? 'checked' : '' }}>
                            <label class="form-check-label" for="Category3">
                                Hoạt hình
                            </label>

                        </div>

                        <div class="col-2">
                            <input class="form-check-input" type="radio" name="Category" id="Category4" value="Hài hước" {{ $film->Category == 'Hài hước' ? 'checked' : '' }}>
                            <label class="form-check-label" for="Category4">
                                Hài hước
                            </label>

                        </div>


                        <div class="col-2">
                            <input class="form-check-input" type="radio" name="Category" id="Category5" value="Kinh dị" {{ $film->Category == 'Kinh dị' ? 'checked' : '' }}>
                            <label class="form-check-label" for="Category5">
                                Kinh dị
                            </label>

                        </div>
                    </div>


                    
                    
                </div>

                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px"> 
                    <label for="" style="padding: 10px 0;">Diễn viên</label>
                    <input type="text" name="Actor" id="Actor" class="col-3 form-control" style="height: 36px; width: 100%; padding: 5px;" value="{{$film->Actor }}">
                </div>


                <div class="row Name" style="display: flex; align-items: center; padding-top: 5px"> 
                    <label for="" style="padding: 10px 0;">Đạo diễn</label>
                    <input type="text" name="Director" id="Director" class="col-3 form-control" style="height: 36px; width: 100%; padding: 5px;" value="{{$film->Director }}">
                </div>
                    


                <div class="row Name" style="padding: 42px;">
                    <div class="d-flex justify-content-end">
                        <a href="#" class="text-decoration-none text-warning me-2" data-bs-toggle="modal" data-bs-target="#editModal{{ $film->Film_ID }}">
                            <button type="button" class="btn btn-warning" style="width: 119px; height: 48px; border: 1px solid #000; border-radius: 0; align-content: center;">
                                Xác nhận sửa
                            </button>
                        </a>
                        <a href="{{ route('films.index') }}">
                            <button type="button" class="btn btn-light" style="width: 110px; height: 48px; border: 1px solid #000; border-radius: 0;">Hủy</button>
                        </a>
                    </div>
                </div>
                

            </div>


            <div class="modal fade" id="editModal{{ $film->Film_ID}}" data-id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                <div class="modal-dialog" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Quản trị phim</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Bạn có chắc chắn muốn sửa phim này?
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('films.update', $film)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-warning" style="border-radius: 0">Xác nhận</button>
                            </form>
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal" style="border-radius: 0">Hủy</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div> 
</div>



@endsection