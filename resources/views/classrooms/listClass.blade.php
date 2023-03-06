@extends('main')

@section('content')
@if($message = Session::get('success'))

<div class="alert alert-info">
{{ $message }}
</div>
@endif
    <div class="container">
        <center>
        <div class="card" style="width: 800px">
            <div class="card-header"><h2>DANH SÁCH LỚP HỌC</h2></div>
            <div class="card-body">
                <div class="row" style="padding-bottom: 20px">
                    <div class="col-md-4">
                        Tên lớp học
                    </div>
                    <div class="col-md-4">
                        Ngày khai giảng
                    </div>
                    <div class="col-md-4">
                        Chức năng
                    </div>
                </div>
                <div class="row">
                    @foreach ($classroom as $class)
                        <hr><div class="col-md-4">
                            {{ $class->name }}
                        </div>
                        <div class="col-md-4">
                            {{ $class->opening_day }}
                        </div>
                        <div class="col-md-4" style="padding-bottom: 20px">
                            <a href="/detail/{{ $class->id }}" class="btn"
                                style="width: 150px;background-color: cyan">Xem chi tiết</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </center>
    </div>
@endsection('content')
