@extends('layouts.admin')
@section('content')
    <div class="pagetitle">
        <h1>Quản lý giáo trình</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item">giáo trình chuyên nghiệp</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="box-title">
                            <h5 class="card-title">Khóa học: {{$count}} items</h5>
                            <div><a href="{{route('curriculum.create')}}" class="btn-add"><i class="fa-solid fa-plus"></i> Thêm mới</a></div>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success" style="margin-left: 0">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Danh mục:</label>
                            <div class="col-sm-4">
                              <select id="select__category" class="form-select">
                                <option value="2">Đồ họa chuyên ngành</option>
                              </select>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <label class="col-sm-2 col-form-label">Chọn khóa học:</label>
                            <div class="col-sm-4">
                              <select id="select__category" class="form-select change-course">
                                @foreach ($course as $item)
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
                                <th scope="col">Tên khóa học</th>
                                <th scope="col">Buổi</th>
                                <th scope="col">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($curriculum as $item => $value)
                                    <tr class="course__{{$value->course_id}} course__id">
                                        <th scope="row">{{ $item+1 }}</th>
                                        <td>{{$value->course->name}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>
                                            <a href="{{route('curriculum.edit', ['curriculum' => $value->id])}}" class="edit-icon"><i class="fa-solid fa-pen"></i></a>

                                            <form action="{{route('curriculum.destroy',['curriculum' => $value->id])}}" method="post" style="display: inline-block">
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