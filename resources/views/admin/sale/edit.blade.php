@extends('layout.admin')
@section('content')
    
            
    <div class="pagetitle">
        <h1>Quản lý giảm giá</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Daschboard</a></li>
                <li class="breadcrumb-item">Giảm giá</li>
                <li class="breadcrumb-item active">Cập nhật</li>
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
                    <form action="{{route('sale.update', ['sale' => $sale->id])}}" enctype="multipart/form-data" method="POST">                      
                        @csrf
                        @method("PUT")
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Thời gian sale</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="date" id="datepicker" value="{{$sale->date}}">
                            </div>
                            <label class="col-sm-2 col-form-label text-end">Khung giờ:</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control" name="start" value="{{$sale->hour_start}}">
                            </div>
                            <label class="col-sm-1 col-form-label" style="width:2%">-</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control" name="end" value="{{$sale->hour_end}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tiêu đề</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="name" value="{{$sale->name}}">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Mô tả</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="description" value="{{$sale->description}}">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Giảm giá</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="discount" value="{{$sale->discount}}">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Sản phẩm giảm</label>
                            <div class="col-sm-8">
                                @foreach ($product as $item)

                                <div class="">
                                    <input type="checkbox" id="check_{{$item->id}}" class="form-check-inline" name="product_id[]" value="{{$item->id}}">
                                    <label class="col-form-label check__label" for="check_{{$item->id}}">{{$item->name}}</label>
                                </div>
                                    
                                @endforeach
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

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        
        $("#datepicker").datepicker();
    </script>
    
@endsection