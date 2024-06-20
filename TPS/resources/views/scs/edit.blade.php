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
        <form action="{{ route('scs.update', $sc) }}" class="form-control" style="width: 614px; height: 500px;" method="POST">
            @csrf
            @method('PUT')
            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Chọn rạp</label>
                </div>
                <select type="text" name="Cinema_Name" id="Cinema_Name" class="col-3 form-control" style="height: 48px; width: 370px; " value="{{ $sc->Cinema_Name }}">
                    <option value="{{ $sc->Cinema_Name }}">{{ $sc->Cinema_Name }}</option>
                    <option value="TPS Vincom Royal City">TPS Vincom Royal City</option>
                    <option value="TPS Vincom Trần Duy Hưng">TPS Vincom Trần Duy Hưng</option>
                    <option value="TPS Vincom Bà Triệu">TPS Vincom Bà Triệu</option>
                </select>
            </div>


            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Chọn phim</label>
                </div>
                <select type="text" name="Film_Name" id="Film_Name" class="col-3 form-control" style="height: 48px; width: 370px; " value="{{ $sc->Film_Name }}">
                    <option value="{{ $sc->Film_Name }}">{{ $sc->Film_Name }}</option>
                    {{-- <option value="Lật mặt 7">Lật mặt 7</option>
                    <option value="Doraemon">Doraemon</option>
                    <option value="Kungfu Panda 4">Kungfu Panda 4</option> --}}
                    @foreach($films as $item)
                        <option value="{{ $item->Film_Name }}">{{ $item->Film_Name }}</option>
                    @endforeach 
                </select>
            </div>


            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Suất chiếu</label>
                </div>
                <div class="col-6" >
                    <div class="row">
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="SC" id="SC12" value="12:00" {{ $sc->SC == '12:00' ? 'checked' : '' }}>
                            <label class="form-check-label" for="SC12">
                                12:00
                            </label>

                        </div>


                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="SC" id="SC14" value="14:20" {{ $sc->SC == '14:20' ? 'checked' : '' }}>
                            <label class="form-check-label" for="SC14">
                                14:20
                            </label>

                        </div>
    
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="SC" id="SC15" value="15:30" {{ $sc->SC == '15:30' ? 'checked' : '' }}>
                            <label class="form-check-label" for="SC15">
                                15:30
                            </label>

                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="SC" id="SC16" value="16:20" {{ $sc->SC == '16:20' ? 'checked' : '' }} >
                            <label class="form-check-label" for="SC16">
                                16:40
                            </label>

                        </div>


                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="SC" id="SC18" value="18:20" {{ $sc->SC == '18:20' ? 'checked' : '' }} >
                            <label class="form-check-label" for="SC18">
                                18:20
                            </label>

                        </div>
    
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="SC" id="SC22" value="22:00" {{ $sc->SC == '22:00' ? 'checked' : '' }} >
                            <label class="form-check-label" for="SC22">
                                22:00
                            </label>

                        </div>
                    </div>
                    
                </div>
            </div>



            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Ngày chiếu</label>
                </div>
                <input type="date" name="DOS" id="DOS" class="col-3 form-control" style="height: 48px; width: 155px; " value="{{ $sc->DOS }}">
                
            </div>


            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Giá suất chiếu</label>
                </div>
                <input type="text" name="Price" id="Price" class="col-3 form-control" style="height: 48px; width: 295px; " value="{{ $sc->Price }}">
                
            </div>

            <div class="row justify-content-center Name" style="display: flex; align-items: center; padding: 42px;">
                <div class="col-3">
                    <a href="#" class="text-decoration-none text-warning"  data-bs-toggle="modal" data-bs-target="#editModal{{ $sc->Cinema_ID}}">
                        <button type="submit" class="btn btn-warning" style="width: 119px; height: 48px; border: 1px solid #000; border-radius: 0; align-content: center;">
                            Xác nhận sửa
                        </button>
                    </a>
                </div>
                <div class="col-3 ">
                    <a href="{{ route('scs.index')}}" class="text-decoration-none text-black">
                        <button type="button" class="btn btn-light" style="width: 110px; height: 48px; border: 1px solid #000; border-radius: 0; align-content: center;">
                            Hủy
                        </button>
                    </a>
                </div>
            </div>


            <div class="modal fade" id="editModal{{ $sc->Cinema_ID}}" data-id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                <div class="modal-dialog" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Quản trị suất chiếu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Bạn có chắc chắn muốn sửa suất chiếu này?
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('scs.update', $sc)}}" method="POST">
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