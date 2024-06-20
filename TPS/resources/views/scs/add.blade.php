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
        <form action="{{ route('scs.store') }}" class="form-control" style="width: 614px; height: 500px;" method="POST">
            @csrf
            @method('POST')
            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Chọn rạp</label>
                </div>
                <select type="text" name="Cinema_Name" id="Cinema_Name" class="col-3 form-control" style="height: 48px; width: 370px; " value="{{old('Cinema_Name') }}">
                    <option value="">Chọn rạp</option>
                    <option value="TPS Vincom Royal City">TPS Vincom Royal City</option>
                    <option value="TPS Vincom Trần Duy Hưng">TPS Vincom Trần Duy Hưng</option>
                    <option value="TPS Vincom Bà Triệu">TPS Vincom Bà Triệu</option>
                </select>
            </div>


            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Chọn phim</label>
                </div>
                <select type="text" name="Film_Name" id="Film_Name" class="col-3 form-control" style="height: 48px; width: 370px; " value="{{old('Film_Name') }}">
                    <option value="">Chọn phim</option>
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
                            <input class="form-check-input" type="radio" name="SC" id="SC12" value="12:00" {{ old('SC') == '12:00' ? 'checked' : '' }}>
                            <label class="form-check-label" for="SC12">
                                12:00
                            </label>

                        </div>


                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="SC" id="SC14" value="14:20" {{ old('SC') == '14:20' ? 'checked' : '' }}>
                            <label class="form-check-label" for="SC14">
                                14:20
                            </label>

                        </div>
    
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="SC" id="SC15" value="15:30" {{ old('SC') == '15:30' ? 'checked' : '' }}>
                            <label class="form-check-label" for="SC15">
                                15:30
                            </label>

                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="SC" id="SC16" value="16:20" {{ old('SC') == '16:20' ? 'checked' : '' }} >
                            <label class="form-check-label" for="SC16">
                                16:40
                            </label>

                        </div>


                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="SC" id="SC18" value="18:20" {{ old('SC') == '18:20' ? 'checked' : '' }} >
                            <label class="form-check-label" for="SC18">
                                18:20
                            </label>

                        </div>
    
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="SC" id="SC22" value="22:00" {{ old('SC') == '22:00' ? 'checked' : '' }} >
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
                <input type="date" name="DOS" id="DOS" class="col-3 form-control" style="height: 48px; width: 155px; " value="{{old('DOS') }}">
                
            </div>


            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Giá suất chiếu</label>
                </div>
                <input type="text" name="Price" id="Price" class="col-3 form-control" style="height: 48px; width: 295px; " value="{{old('Password') }}">
                
            </div>

            <div class="row justify-content-center Name" style="display: flex; align-items: center; padding: 42px;">
                <div class="col-3">
                    <button type="submit" class="btn btn-warning" style="width: 110px; height: 48px; border: 1px solid #000; border-radius: 0; align-content: center;">
                        Xác nhận
                    </button>
                </div>
                <div class="col-3 ">
                    <button class="btn btn-light" style="width: 110px; height: 48px; border: 1px solid #000; border-radius: 0; align-content: center;">
                        <a href="{{ route('scs.index')}}" class="text-decoration-none text-black">Hủy</a>
                    </button>
                </div>
            </div>


        </form>
    </div> 
</div>



@endsection