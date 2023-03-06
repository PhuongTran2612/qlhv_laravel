@extends('admin.default')
@section('content')
    <div class="container">
        <center>
            <div class="card" style="width: 600px; height: 500px">
                <div class="card-header">
                    <center>
                        <h2>THÔNG TIN GIÁO VIÊN</h2>
                    </center>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <a>Họ tên:</a>
                        </div>
                        <div class="col-md-6">
                            <a>{{ $teacher->name }}</a>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-6">
                            <a>Địa chỉ:</a>
                        </div>
                        <div class="col-md-6">
                            <a>{{ $teacher->address }}</a>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-6">
                            <a>Nơi công các:</a>
                        </div>
                        <div class="col-md-6">
                            <a>{{ $teacher->work_place }}</a>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-6">
                            <a>Số điện thoại:</a>
                        </div>
                        <div class="col-md-6">
                            <a>{{ $teacher->phone }}</a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <a id="opening_day">Dạy lớp:</a>
                        </div>
                        <div class="col-md-6">
                            @foreach($teachers as $t)
                            <a> {{ $t->name_class }}</a><br>
                            @endforeach
                        </div>
                    </div>
                    <br>
                    {{-- <div class="row">
                        <div class="col-md-6">
                            <a id="total">Số lượng dự kiến:&nbsp {{ $classroom->total }}</a>
                        </div>
                        <div class="col-md-6">
                            <a id="actual_number">Số lượng hiện tại:&nbsp {{ $classroom->actual_number }}</a>
                        </div>
                    </div> --}}
                </div>
                <div class="card-footer">
                    <div class="d-grid mx-auto">
                        <a href="/admin/listTeachers" class="btn btn-primary">Trở về</a>
                    </div>
                </div>
            </div>
        </center>
    </div>
@endsection
