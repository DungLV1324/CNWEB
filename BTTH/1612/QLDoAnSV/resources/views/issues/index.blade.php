@extends('layouts.app')

@section('content')
    <h1>Danh Sách Vấn Đề</h1>
    <a href="{{ route('issues.create') }}" class="btn btn-success">Thêm Vấn Đề Mới</a>
    <table class="table table-bordered">
        <tr>
            <th>Mã Vấn Đề</th>
            <th>Tên Máy Tính</th>
            <th>Tên Phiên Bản</th>
            <th>Người Báo Cáo</th>
            <th>Thời Gian Báo Cáo</th>
            <th>Mức Độ</th>
            <th>Trạng Thái</th>
            <th>Hành Động</th>
        </tr>
        @foreach ($issues as $issue)
            <tr>
                <td>{{ $issue->id }}</td>
                <td>{{ $issue->computer->computer_name }}</td>
                <td>{{ $issue->computer->model }}</td>
                <td>{{ $issue->reported_by }}</td>
                <td>{{ $issue->reported_date }}</td>
                <td>{{ $issue->urgency }}</td>
                <td>{{ $issue->status }}</td>
                <td>
                    <a href="{{ route('issues.edit', $issue->id) }}" class="btn btn-primary">Sửa</a>
                    <form action="{{ route('issues.destroy', $issue->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Xác nhận xóa?')">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
