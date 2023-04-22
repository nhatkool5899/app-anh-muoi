@extends('layout.admin')
@section('content')
    <div class="pagetitle">
        <h1>Quản lý Đơn hàng</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item">Đơn hàng</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="box-title">
                            <h5 class="card-title">Đơn hàng</h5>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success" style="margin-left: 0">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!-- Table with stripped rows -->
                        <table class="table table-striped table-style">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Người đặt</th>
                                <th scope="col">Số điện thoại</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($order as $item => $value)
                                    <tr>
                                        <th scope="row">{{ $item+1 }}</th>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->phone}}</td>
                                        <td>{{$value->address}}</td>
                                        <td>
                                            <a href="{{route('order.edit', ['order' => $value->id])}}" class="edit-icon"><i class="fa-solid fa-pen"></i></a>

                                            <form action="{{route('order.destroy',['order' => $value->id])}}" method="post" style="display: inline-block">
                                                @method("DELETE")
                                                @csrf
                                                <button class="delete-icon" style="border:none;background:none" onclick="return confirm('Bạn có chắc là xóa danh mục này?')"><i class="fa-solid fa-trash-can"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        $('.change-course').change(function(){
            var course_id = $(this).val();

            $('.course__id').css('display', 'none');
            
            $('.course__'+ course_id).css('display', 'table-row');
        })
    </script>

@endsection