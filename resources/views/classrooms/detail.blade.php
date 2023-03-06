@extends('main')

@section('content')
<div class="container">
    <form action="/detail/{{ $classroom->id }}" method="post">
        @csrf
        <center>
        <div class="card" style="width: 600px; height: 300px">
            <div class="card-header">
                <center>
                <h2>THÔNG TIN LỚP HỌC</h2>
                </center>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <a id="name">Tên lớp:&nbsp {{ $classroom->name }}</a>
                    </div>
                    <div class="col-md-3">
                        <a id="name_level">Cấp độ:&nbsp {{ $classroom->name_level }}</a>
                    </div>
                    <div class="col-md-3">
                        <a id="amount">Giá:&nbsp {{ $classroom->amount }}</a>
                    </div>
                </div>
                <br><div class="row">
                    <div class="col-md-6">
                        <a id="opening_day">Ngày khai giảng:&nbsp {{ $classroom->opening_day }}</a>
                    </div>
                    <div class="col-md-6">
                        <a>Giáo viên:&nbsp {{ $classroom->name_teacher }}</a>
                    </div>
                </div>
                <br><div class="row">
                    <div class="col-md-6">
                        <a id="total">Số lượng dự kiến:&nbsp {{ $classroom->total }}</a>
                    </div>
                    <div class="col-md-6">
                        <a id="actual_number">Số lượng hiện tại:&nbsp {{ $classroom->actual_number }}</a>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-grid mx-auto">
                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                </div>
            </div>
        </div>
        </center>
    </form>
</div>
@endsection('content')
