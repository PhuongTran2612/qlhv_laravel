@extends('admin.default')
@section('content')
    @if (session('error'))
        <div class="alert alert-danger text-center">{{ session('error') }}</div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" style="border-radius: 10px">
                <div class="card-header">
                    <h3>THÊM LỚP HỌC</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.addClass') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Tên lớp" />
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="date" name="opening_day" class="form-control" />
                            @if ($errors->has('opening_day'))
                                <span class="text-danger">{{ $errors->first('opening_day') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <p style="float: right;padding-right: 100px">Cấp độ:</p>
                                </div>
                                <div class="col-md-6">
                                    <select name="id_levels" id="id_levels" style="width: 100px">
                                        @foreach ($levels as $level)
                                            <option value="{{ $level->id }}">{{ $level->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_levels'))
                                        <span class="text-danger">{{ $errors->first('id_levels') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
						<div class="form-group mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <p style="float: right;padding-right: 100px">Giáo viên:</p>
                                </div>
                                <div class="col-md-6">
                                    <select name="id_teachers" id="id_teachers" style="width: 200px">
                                        @foreach ($teachers as $teacher)
                                            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_teachers'))
                                        <span class="text-danger">{{ $errors->first('id_teachers') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
						<div class="form-group mb-3">
                            <input type="text" name="total" class="form-control" placeholder="Số lượng tổng" />
                            @if ($errors->has('total'))
                                <span class="text-danger">{{ $errors->first('total') }}</span>
                            @endif
                        </div>
						<div class="form-group mb-3">
                            <input type="text" name="actual_number" class="form-control" placeholder="Số lượng hiện tại" />
                            @if ($errors->has('actual_number'))
                                <span class="text-danger">{{ $errors->first('actual_number') }}</span>
                            @endif
                        </div>
                        {{-- <div class="form-group mb-3">
					<input type="date" name="birthday" class="form-control" />
					@if ($errors->has('birthday'))
						<span class="text-danger">{{ $errors->first('birthday') }}</span>
					@endif
				</div>
                <div class="form-group mb-3">
					<input type="text" name="home_town" class="form-control" placeholder="Quê quán" />
					@if ($errors->has('home_town'))
						<span class="text-danger">{{ $errors->first('home_town') }}</span>
					@endif
				</div>
                <div class="form-group mb-3">
					<input type="text" name="address" class="form-control" placeholder="Địa chỉ" />
					@if ($errors->has('address'))
						<span class="text-danger">{{ $errors->first('address') }}</span>
					@endif
				</div>
                <div class="form-group mb-3">
					<input type="text" name="phone" class="form-control" placeholder="Số điện thoại" />
					@if ($errors->has('phone'))
						<span class="text-danger">{{ $errors->first('phone') }}</span>
					@endif
				</div> --}}
                        <div class="d-grid mx-auto">
                            <center>
                                <button type="submit" class="btn btn-primary" style="width: 150px">Thêm</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection('content')
