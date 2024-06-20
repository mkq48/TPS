@extends('layout.master')

@section('content')



<div class="col list-employee" >
    <div class="row">
        <div class="col-3">
            <h5 style="display: inline-block; padding-left: 20px;">Thêm nhân viên</h5>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif
    <hr>

    <div class="row justify-content-center">
        <form action="{{ route('employees.store') }}" class="form-control" style="width: 682px; height: 630px;" method="POST">
            @csrf
            @method('POST')
            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Họ và tên:</label>
                </div>
                <input type="text" name="Employ_Name" id="Employ_Name" class="col-3 form-control" style="height: 48px; width: 295px; " value="{{old('Employ_Name') }}">
            </div>

            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Email:</label>
                </div>
                <input type="text" name="Employ_Email" id="Employ_Email" class="col-3 form-control" style="height: 48px; width: 295px; " value="{{old('Employ_Email') }}">
                
            </div>

            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Số điện thoại:</label>
                </div>
                <input type="text" name="Employ_Phone" id="Employ_Phone" class="col-3 form-control" style="height: 48px; width: 295px; " value="{{old('Employ_Phone') }}">
                
            </div>

            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Giới tính:</label>
                </div>
                <div class="col-3" >
                    <input class="form-check-input" type="radio" name="Gender" id="genderMale" value="Nam" {{ old('Gender') == 'Nam' ? 'checked' : '' }}>
                    <label class="form-check-label" for="genderMale">
                        Nam
                    </label>

                    <input class="form-check-input" type="radio" name="Gender" id="genderFemale" value="Nữ" {{ old('Gender') == 'Nữ' ? 'checked' : '' }} style="margin-left: 20px;">
                    <label class="form-check-label" for="genderFemale">
                        Nữ
                    </label>

                </div>
            </div>


            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Ngày sinh:</label>
                </div>
                <input type="date" name="DOB" id="DOB" class="col-3 form-control" style="height: 48px; width: 155px; " value="{{old('DOB') }}">
                
            </div>


            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Địa chỉ:</label>
                </div>
                <input type="text" name="Address" id="Address" class="col-3 form-control" style="height: 48px; width: 295px; " value="{{old('Address') }}">
                
            </div>


            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Tên tài khoản</label>
                </div>
                <input type="text" name="Name_TK" id="Name_TK" class="col-3 form-control" style="height: 48px; width: 295px; " value="{{old('Name_TK') }}">
                
            </div>


            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Mật khẩu</label>
                </div>
                <input type="text" name="Password" id="Password" class="col-3 form-control" style="height: 48px; width: 295px; " value="{{old('Password') }}">
                
            </div>

            <div class="row justify-content-center Name" style="display: flex; align-items: center; padding: 42px;">
                <div class="col-3">
                    <button type="submit" class="btn btn-warning" style="width: 110px; height: 48px; border: 1px solid #000; border-radius: 0; align-content: center;">
                        Xác nhận
                    </button>
                </div>
                <div class="col-3 ">
                    <button class="btn btn-light" style="width: 110px; height: 48px; border: 1px solid #000; border-radius: 0; align-content: center;">
                        <a href="{{ route('employees.index')}}" class="text-decoration-none text-black">Hủy</a>
                    </button>
                </div>
            </div>


        </form>
    </div> 
</div>



@endsection