@extends('main')

@section('content')

@if (session('error'))
    <div class="alert alert-danger text-center">{{ session('error') }}</div>
@endif

<div class="row justify-content-center">
	<div class="col-md-4">
		<div class="card" style="border-radius: 10px">
		<div class="card-header">ĐĂNG KÝ HỌC VIÊN</div>
		<div class="card-body">
			<form action="{{ route('user.validateRegistration') }}" method="POST">
				@csrf
                <h4>Thông tin tài khoản</h4>
				<div class="form-group mb-3">
					<input type="email" name="email" class="form-control" placeholder="Email" />
					@if($errors->has('email'))
						<span class="text-danger">{{ $errors->first('email') }}</span>
					@endif
				</div>
				<div class="form-group mb-3">
					<input type="password" name="password" class="form-control" placeholder="Mật khẩu" />
					@if($errors->has('password'))
						<span class="text-danger">{{ $errors->first('password') }}</span>
					@endif
				</div>
                <h4>Thông tin liên hệ</h4>
                <div class="form-group mb-3">
					<input type="text" name="students_name" class="form-control" placeholder="Họ tên" />
					@if($errors->has('students_name'))
						<span class="text-danger">{{ $errors->first('students_name') }}</span>
					@endif
				</div>
                <div class="form-group mb-3">
					<input type="date" name="birthday" class="form-control" />
					@if($errors->has('birthday'))
						<span class="text-danger">{{ $errors->first('birthday') }}</span>
					@endif
				</div>
                <div class="form-group mb-3">
					<input type="text" name="home_town" class="form-control" placeholder="Quê quán" />
					@if($errors->has('home_town'))
						<span class="text-danger">{{ $errors->first('home_town') }}</span>
					@endif
				</div>
                <div class="form-group mb-3">
					<input type="text" name="address" class="form-control" placeholder="Địa chỉ" />
					@if($errors->has('address'))
						<span class="text-danger">{{ $errors->first('address') }}</span>
					@endif
				</div>
                <div class="form-group mb-3">
					<input type="text" name="phone" class="form-control" placeholder="Số điện thoại" />
					@if($errors->has('phone'))
						<span class="text-danger">{{ $errors->first('phone') }}</span>
					@endif
				</div>
				<div class="d-grid mx-auto">
					<button type="submit" class="btn btn-primary">Đăng ký</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection('content')