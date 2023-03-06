@extends('admin.default')
@section('content')
@if($message = Session::get('success'))

<div class="alert alert-info">
{{ $message }}
</div>

@endif
<div class="content-header">
    <h3>TRANG CHỦ</h3>
    <img src="https://gojapan.vn/wp-content/uploads/2020/05/Banner-DuongToiNuocNhat_Mobile.jpg">
    <img style="width: 815px;height: 600px" src="https://gojapan.vn/wp-content/uploads/2020/06/Hoc-tieng-Nhat-moi-ngay-9-phuong-phap.png">
</div>
@endsection