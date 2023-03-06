@extends('admin.default')
@section('content')
@if($message = Session::get('success'))

<div class="alert alert-info">
{{ $message }}
</div>
@endif
    <center>
        <div class="card" style="width: 800px">
            <div class="card-header">
                <h2>DANH SÁCH LỚP HỌC</h2>
            </div>
            <table border="1" style="text-align: center">
                <tr>
                    <th>STT</th>
                    <th>Tên Lớp</th>
                    <th>Tên Giáo Viên</th>
                    <th>Thao Tác</th>
                </tr>
                <tbody>
                    @foreach ($classrooms as $class)
                        <tr>
                            <td style="padding-left: 10px">{{ $index++ }}</td>
                            <td>{{ $class->name }}</td>
                            <td>{{ $class->teacher_name }}</td>
                            <td style="padding-bottom: 10px; padding-top: 10px"><a class="btn btn-primary" href="/admin/attendanceInfor/{{ $class->id }}">Điểm danh</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </center>
@endsection
