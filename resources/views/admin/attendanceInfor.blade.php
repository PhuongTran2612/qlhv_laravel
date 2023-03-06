@extends('admin.default')
@section('content')
    <center>
        <div class="card" style="width: 80%">
            <div class="card-header">
                <center>
                    <h2>THÔNG TIN ĐIỂM DANH</h2>
                </center>
            </div>
            <form action="/admin/attendanceInfor/{{ $classroom->id }}" method="post">
                @csrf
                <table border="1" style="text-align: center;width: 100%">
                    <tr>
                        <th>STT</th>
                        <th>Tên Lớp</th>
                        <th>Tên Học Viên</th>
                        <th>Đi Học</th>
                        <th>Vắng Mặt</th>
                        <th>Ghi Chú</th>
                    </tr>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $index++ }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->name_student }}</td>
                                <td><input type="radio" name="status[{{ $student->id_students }}]" value="1"
                                        class="form-control" checked="true"></td>
                                <td><input type="radio" name="status[{{ $student->id_students }}]" value="0"
                                        class="form-control"></td>
                                <td style="padding-top: 10px;padding-bottom: 10px"><input type="text" id="note"
                                        name="note[{{ $student->id_students }}]" value="null" class="form-control"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="card-footer">
                    <center>
                        <button type="submit" class="btn btn-primary" style="width: 150px;">Lưu</button>
                    </center>
                </div>
            </form>
        </div>
    </center>
@endsection
