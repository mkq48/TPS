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
        <form action="{{ Route('employees.update', $employee)}}" class="form-control" style="width: 682px; height: 630px;" method="POST">
            @csrf
            @method('PUT')
            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Họ và tên:</label>
                </div>
                <input type="text" name="Employ_Name" id="Employ_Name" class="col-3 form-control" style="height: 48px; width: 295px; " value="{{ $employee->Employ_Name }}">
            </div>

            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Email:</label>
                </div>
                <input type="text" name="Employ_Email" id="Employ_Email" class="col-3 form-control" style="height: 48px; width: 295px; " value="{{ $employee->Employ_Email }}">
                
            </div>

            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Số điện thoại:</label>
                </div>
                <input type="text" name="Employ_Phone" id="Employ_Phone" class="col-3 form-control" style="height: 48px; width: 295px; " value="{{ $employee->Employ_Phone }}">
                
            </div>

            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Giới tính:</label>
                </div>
                <div class="col-3" >
                    <input class="form-check-input" type="radio" name="Gender" id="genderMale" value="Nam" {{ $employee->Gender == 'Nam' ? 'checked' : '' }}>
                    <label class="form-check-label" for="genderMale">
                        Nam
                    </label>

                    <input class="form-check-input" type="radio" name="Gender" id="genderFemale" value="Nữ" {{ $employee->Gender == 'Nữ' ? 'checked' : '' }} style="margin-left: 20px;">
                    <label class="form-check-label" for="genderFemale">
                        Nữ
                    </label>

                </div>
            </div>


            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Ngày sinh:</label>
                </div>
                <input type="date" name="DOB" id="DOB" class="col-3 form-control" style="height: 48px; width: 295px; " value="{{ $employee->DOB }}">
                
            </div>


            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Địa chỉ:</label>
                </div>
                <input type="text" name="Address" id="Address" class="col-3 form-control" style="height: 48px; width: 295px; " value="{{ $employee->Address }}">
                
            </div>


            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Tên tài khoản</label>
                </div>
                <input type="text" name="Name_TK" id="Name_TK" class="col-3 form-control" style="height: 48px; width: 295px; " value="{{ $employee->Name_TK }}">
                
            </div>


            <div class="row Name" style="display: flex; align-items: center; padding: 9px;">
                <div class="col-3">
                    <label for="">Mật khẩu</label>
                </div>
                <input type="text" name="Password" id="Password" class="col-3 form-control" style="height: 48px; width: 295px; " value="{{ $employee->Password }}">
                
            </div>

            <div class="row justify-content-center Name" style="display: flex; align-items: center; padding: 42px;">
                <div class="col-3">
                    <a href="#" class="text-decoration-none text-warning"  data-bs-toggle="modal" data-bs-target="#editModal{{ $employee->Employ_ID}}">
                        <button type="submit" class="btn btn-warning" style="width: 119px; height: 48px; border: 1px solid #000; border-radius: 0; align-content: center;">
                            Xác nhận sửa
                        </button>
                    </a>
                </div>
                <div class="col-3 ">
                    <button class="btn btn-light" style="width: 110px; height: 48px; border: 1px solid #000; border-radius: 0; align-content: center;">
                        <a href="{{ route('employees.index')}}" class="text-decoration-none text-black">Hủy</a>
                    </button>
                </div>
            </div>


            <div class="modal fade" id="editModal{{ $employee->Employ_ID}}" data-id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                <div class="modal-dialog" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin nhân viên</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Bạn có chắc chắn muốn sửa thông tin nhân viên này?
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('employees.update', $employee)}}" method="POST">
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