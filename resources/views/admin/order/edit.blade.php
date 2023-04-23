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
                            <h5 class="card-title">Đơn hàng của <strong>"{{$order->name}}"</strong></h5>
                        </div>
                        <div class="row mb-3">
                            <div class="information-order col-md-7">
                                <h4>Thông tin đơn hàng</h4>
                                <p>Người đặt:  <strong>{{$order->name}}</strong></p>
                                <p>Số điện thoại: {{$order->phone}}</p>
                                <p>Địa chỉ: {{$order->address}}</p>
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label">Trạng thái: 
                                    <strong style="margin-left: 6px">
                                        @if ($order->status == 1)
                                            <span class="status-order" style="color: green">Đơn hàng mới</span>
                                        @endif 
                                        @if($order->status == 2)
                                            <span class="status-order" style="color: blue">Đã xác nhận</span>
                                        @endif
                                        @if($order->status == 3)
                                            <span class="status-order" style="color: #800">Đã giao</span>
                                        @endif
                                    </strong>
                                </label>
                                <form>
                                    @csrf
                                    <input type="hidden" class="order__id" value="{{$order->id}}">
                                    <select class="change_status form-select">
                                        <option <?php if($order->status == 1) echo "selected" ?> value="1">Đơn hàng mới</option>
                                        <option <?php if($order->status == 2) echo "selected" ?> value="2">Đã xác nhận</option>
                                        <option <?php if($order->status == 3) echo "selected" ?> value="3">Đã giao</option>
                                    </select>
                                </form>
                            </div>

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
                                <th scope="col">Món ăn</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Đơn giá</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($order_details as $item => $value)
                                    <tr>
                                        <th scope="row">{{ $item+1 }}</th>
                                        <td>{{$value->product->name}}</td>
                                        <td>{{$value->product_quantity}}</td>
                                        <td>{{$value->product_price}}</td>
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.change_status').change(function(){
            var id = $('.order__id').val();
            var status = $(this).val();
            
            if(id && status){
                var _token = $('input[name="_token"]').val();
    
                $.ajax({
                    url: "/change-status",
                    method: "POST",
                    data: {id:id, status:status, _token:_token},
                    success:function(data){
                        if(data == "success"){
                            location.reload();
                        }else{
                            console.log("error");
                        }
                    }
                })
            }

        })
    </script>

@endsection


