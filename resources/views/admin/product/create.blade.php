@extends('layout.admin')
@section('content')
    
    <div class="pagetitle">
        <h1>Quản lý Sản phẩm</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Daschboard</a></li>
                <li class="breadcrumb-item">Sản phẩm</li>
                <li class="breadcrumb-item active">Thêm mới</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-12">

                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">General Form Elements</h5>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <!-- General Form Elements -->
                    <form action="{{route('product.store')}}" enctype="multipart/form-data" method="POST">                      
                        @csrf

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Danh mục khóa học(*)</label>
                            <div class="col-sm-8">
                              <select name="category_id" class="form-select" required>
                                <option value="">---Chọn danh mục----</option>
                                @foreach ($category as $item)

                                <option value="{{$item->id}}">{{$item->name}}</option>

                                @endforeach
                              </select>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tên sản phẩm(*)</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="name" id="slug" value="{{old('name')}}" onkeyup="ChangeToSlug()">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Slug</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="slug" value="{{old('slug')}}" id="convert_slug">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Giá tiền</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="price_old" value="{{old('price_old')}}">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Hình ảnh(*)</label>
                            <div class="col-sm-8">
                                <input class="form-control file-img" name="image" id="inputImg" type="file">
                            </div>
                        </div>

                        <div class="preview-img"><img id="preview-img" src="" style="max-width:500px"></div>
                        <script>
                            const input = document.getElementById('inputImg');
                            const image = document.getElementById('preview-img');

                            input.addEventListener('change', (e) => {

                                if (e.target.files.length) {
                                    const src = URL.createObjectURL(e.target.files[0]);
                                    image.src = src;
                                }
                            });
                        </script>
                        <div class="row mb-3">
                            <div class="col-sm-9"></div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn-confirm">Xác nhận <i class="fa-solid fa-floppy-disk"></i></button>
                            </div>
                        </div>
      
                    </form><!-- End General Form Elements -->
      
                  </div>
                </div>
      
              </div>
        </div>
    </section>
@endsection