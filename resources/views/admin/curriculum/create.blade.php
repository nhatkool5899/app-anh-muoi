@extends('layouts.admin')
@section('content')
    
    <div class="pagetitle">
        <h1>Quản lý khóa học</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Daschboard</a></li>
                <li class="breadcrumb-item">Khóa học</li>
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
                    @if (session('status'))
                        <div class="alert alert-success" style="margin-left: 0">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- General Form Elements -->
                    <form action="{{route('curriculum.store')}}" enctype="multipart/form-data" method="POST">                      
                        @csrf

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Danh mục khóa học(*)</label>
                            <div class="col-sm-8">
                              <select name="category_id" id="category" class="form-select choose" required>
                                <option value="">---Chọn danh mục----</option>
                                <option value="1">Khóa học chuyên nghiệp</option>
                                <option value="2">Khóa học đồ họa chuyên ngành</option>
                                <option value="3">Khóa học ngắn hạn</option>
                                <option value="4">Điện ảnh truyền hình</option>
                                <option value="5">Mỹ thuật - đồ họa thiếu nhi</option>
                              </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Khóa học(*)</label>
                            <div class="col-sm-8">
                              <select name="course_id" id="course" class="form-select" required>
                                <option value="">---Chọn khóa học----</option>
                              </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tên buổi học</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="name" value="{{old('name')}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nội dung</label>
                            <div class="col-sm-8">
                              <textarea name="content" id="ckeditor">{{old('content')}}</textarea>
                            </div>
                        </div>


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