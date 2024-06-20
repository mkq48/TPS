@extends('layout.master')

@section('content')

@if (session('success'))
    <div id="success-alert" class="alert alert-info my-2" style="padding: 20px; opacity: 1; transition: opacity 0.5s; position: fixed; top: 50px; left: 90%; transform: translateX(-60%); z-index: 1000; width: 284px;" >
        <p>Thông báo</p>
        <div class="row justify-content-center">
            {{ session('success') }}
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                var notification = document.getElementById("success-alert");
                if (notification) {
                    notification.style.opacity = '0';
                    setTimeout(function() {
                        notification.style.display = 'none';
                    }, 500);
                }
            }, 5000);
        });
    </script>
@endif


<div class="col list-employee" style="">
    <div class="row justify-content-between">
        <div class="col-3">
            <h5 style="display: inline-block; padding-left: 20px;">Danh sách nhân viên</h5>
        </div>
        <div class="col-3">
            <div class="search" style="border: 1px solid #000; border-radius: 4px; display: flex; justify-content: space-between; line-height: 39px; width: 255px; padding: 0 10px; color: #ccc;">
                <span>Tìm kiếm</span>
                <i class="bi bi-search"></i>
            </div>
        </div>
        <div class="col-2">
            <a href="{{ Route('employees.create')}}">
                <div class="btn btn-warning" style="border-radius: 0">Thêm nhân viên mới</div>
            </a>
        </div>
        
    </div>
    <hr>


    <table class="table" style="border: 1px solid #fff">
        <thead>
            <tr style="color: #ACACAC">
                <th class="">#</th>
                <th class="">Họ và tên</th>
                <th class="">Email</th>
                <th class="">Số điện thoại</th>
                <th class=""></th>
                <th class="">Địa chỉ</th>
                <th class="">Ngày sinh</th>
                <th class=""></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $item)
            <tr>
                <td class="">
                    {{ $item->Employ_ID}}
                </td>
    
                <td class="">
                    {{ $item->Employ_Name}}
                </td>
    
                <td class="">
                    {{ $item->Employ_Email}}
                </td>
    
                <td class="">
                    {{ $item->Employ_Phone}}
                </td>
                
                <td class="">
                    {{ $item->Gender}}
                </td>
    
    
                <td class="">
                    {{ $item->Address}}
                </td>
    
                <td class="">
                    {{ $item->DOB}}
                </td>
                <td class="">
                    <a href="{{ Route('employees.edit', $item)}}" class="text-decoration-none px-2 text-warning"><i class="bi bi-pencil"></i></a>
                    <a href="#" class="text-decoration-none text-warning"  data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->Employ_ID}}">
                        <i class="bi bi-trash3"></i>
                    </a>
            
                </td>
            </tr>
    
                    <!-- Modal -->
            <div class="modal fade" id="deleteModal{{ $item->Employ_ID}}" data-id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-danger" id="exampleModalLabel">Xóa nhân viên</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-danger">
                            Bạn có chắc chắn muốn xóa người dùng này?
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('employees.destroy', $item)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-warning" style="border-radius: 0">Xác nhận</button>
                            </form>
                            <button type="button"  class="btn btn-light" data-bs-dismiss="modal" style="border-radius: 0">Hủy</button>
                        </div>
                    </div>
                </div>
            </div>
            
    
            @endforeach
        </tbody>
    </table>

</div>


<div class="pagination">
    {{ $employees->links('pagination::bootstrap-4') }}
</div>

<script>
    document.getElementById('hide-button').addEventListener('click', function(){
        document.getElementById('success-alert').style.display = 'none';
    });
</script>

@endsection


