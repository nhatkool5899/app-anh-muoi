@extends('layout.admin')
@section('content')
    <div class="pagetitle">
        <h1>Quản lý Sản phẩm</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item">Sản phẩm</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <div class="box-title">
                            <h5 class="card-title">Sản phẩm</h5>
                            <div><a href="{{route('product.create')}}" class="btn-add"><i class="fa-solid fa-plus"></i> Thêm mới</a></div>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success" style="margin-left: 0">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Chọn danh mục:</label>
                            <div class="col-sm-4">
                              <select id="select__category" class="form-select">
                                <option value="">--- Chọn danh mục ----</option>
                                @foreach ($category as $item)

                                <option value="{{$item->id}}">{{$item->name}}</option>

                                @endforeach
                              </select>
                            </div>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped table-style">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($product as $item => $value)
                                    <tr class="category__{{$value->category_id}}">
                                        <th scope="row">{{ $item+1 }}</th>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->category->name}}</td>
                                        <td><img src="{{asset('uploads/product/'.$value->category->name.'/'.$value->image)}}" alt="" style="max-width:150px"></td>
                                        <td>
                                            <a href="{{route('product.edit', ['product' => $value->id])}}" class="edit-icon"><i class="fa-solid fa-pen"></i></a>

                                            <form action="{{route('product.destroy',['product' => $value->id])}}" method="post" style="display: inline-block">
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

    <div class="modal-view-img">
        <div class="image">
            <img class="show-img" src="" alt="">
        </div>
    </div>

    <script>
        $('#select__category').change(function(){
            let value = $(this).val();
            if(value == 1){
                $('.category__1').css('display', 'table-row');
                $('.category__2').css('display', 'none');
                $('.category__3').css('display', 'none');
                $('.category__4').css('display', 'none');
            }
            else if(value == 2){
                $('.category__2').css('display', 'table-row');
                $('.category__1').css('display', 'none');
                $('.category__3').css('display', 'none');
                $('.category__4').css('display', 'none');
            }
            else if(value == 3){
                $('.category__3').css('display', 'table-row');
                $('.category__1').css('display', 'none');
                $('.category__2').css('display', 'none');
                $('.category__4').css('display', 'none');
            }
            else if(value == 4){
                $('.category__4').css('display', 'table-row');
                $('.category__1').css('display', 'none');
                $('.category__2').css('display', 'none');
                $('.category__3').css('display', 'none');
            }else{
                $('.category__1').css('display', 'table-row');
                $('.category__2').css('display', 'table-row');
                $('.category__3').css('display', 'table-row');
                $('.category__4').css('display', 'table-row');
            }
        })
    </script>
@endsection