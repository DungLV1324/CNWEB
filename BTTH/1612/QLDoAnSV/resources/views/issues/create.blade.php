@extends('layouts.app')

@section('content')
    <h1>{{ isset($issue) ? 'Cập Nhật Vấn Đề' : 'Thêm Vấn Đề Mới' }}</h1>
    <form method="POST" action="{{ isset($issue) ? route('issues.update', $issue->id) : route('issues.store') }}">
        @csrf
        @if(isset($issue))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="computer_id">Máy Tính</label>
            <select name="computer_id" class="form-control">
                @foreach($computers as $computer)
                    <option value="{{ $computer->id }}"
                        {{ isset($issue) && $issue->computer_id == $computer->id ? 'selected' : '' }}>
                        {{ $computer->computer_name }} - {{ $computer->model }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="reported_by">Người Báo Cáo</label>
            <input type="text" name="reported_by" value="{{ $issue->reported_by ?? '' }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="reported_date">Thời Gian Báo Cáo</label>
            <input type="datetime-local" name="reported_date" value="{{ $issue->reported_date ?? '' }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Mô Tả</label>
            <textarea name="description" class="form-control">{{ $issue->description ?? '' }}</textarea>
        </div>
        <div class="form-group">
            <label for="urgency">Mức Độ</label>
            <select name="urgency" class="form-control">
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
            </select>
        </div>
        <div class="form-group">
            <label for="status">Trạng Thái</label>
            <select name="status" class="form-control">
                <option value="Open">Open</option>
                <option value="In Progress">In Progress</option>
                <option value="Resolved">Resolved</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Lưu</button>
    </form>
@endsection
