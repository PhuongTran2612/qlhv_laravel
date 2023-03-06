@extends('admin.default')
@section('content')

@if (session('error'))
    <div class="alert alert-danger text-center">{{ session('error') }}</div>
@endif
<center>
<div class="card" style="width: 800px">
    <div class="card-header"><h2>DANH SÁCH GIÁO VIÊN</h2></div>
    <table border="1" style="text-align: center">
        <tr>
            <th>Họ Tên</th>
            <th>Thao Tác</th>
        </tr>
        <tbody>
            @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->name }}</td>
                <td style="padding-top: 10px;padding-bottom: 10px"><a href="/admin/detailTeacher/{{ $teacher->id }}" class="btn"
                    style="width: 150px;background-color: cyan">Xem</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


    {{-- <div class="card-body">
        <div class="row" style="padding-bottom: 20px;text-align: center">
            <div class="col-md-6">
                Họ tên
            </div>
            <div class="col-md-6">
                Thao tác
            </div>
        </div><hr>
            @foreach ($teachers as $teacher)
            <div class="row">
                <div class="col-md-6">
                    {{ $teacher->name }}
                </div>
                <div class="col-md-6" style="padding-bottom: 20px">
                    <a href="/admin/detailTeacher/{{ $teacher->id }}" class="btn"
                        style="width: 150px;background-color: cyan">Xem</a>
                </div>
            </div>
            @endforeach
    </div> --}}
</div>
</center>

@endsection