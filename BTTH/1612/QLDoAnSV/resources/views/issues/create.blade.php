<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-
GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
          crossorigin="anonymous">
    <title>Posts</title>
</head>
<body>


<h1 style="margin: 50px 50px">Thêm Đồ án mới</h1>
<form action="{{ route('issues.store') }}" method="POST" style="margin: 50px 50px">
    @csrf <!--bảo vệ ứng dụng của bạn khỏi tấn công CSRF (Cross-Site Request Forgery0) bằng cách tạo một trường input ẩn với giá trị token-->
    <div class="form-group mb-3">
        <label for="computer_id" class="form-label">Chọn máy tính</label>
        <select class="form-control" id="computer_id" name="computer_id" required>
            <option value="">-- Chọn máy tính --</option>
            @foreach($computers as $computer)
                <option value="{{ $computer->id }}">{{ $computer->computer_name }} - {{ $computer->model }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="reported_by" class="form-label">Người báo cáo sự cố</label>
        <input type="text" class="form-control" id="reported_by" name="reported_by" required>
    </div>
    <div class="form-group mb-3">
        <label for="reported_date" class="form-label">Thời gian báo cáo</label>
        <input type="date" class="form-control" id="reported_date" name="reported_date" required>
    </div>
    <div class="form-group mb-3">
        <label for="description" class="form-label">Mô tả</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
    </div>
    <div class="form-group mb-3">
        <label for="urgency" class="form-label">Mức độ sự cố</label>
        <select class="form-control" id="urgency" name="urgency" required>
            <option value="Low">Low</option>
            <option value="Medium">Medium</option>
            <option value="High">High</option>
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="status" class="form-label">Trạng thái hiện tại</label>
        <select class="form-control" id="status" name="status" required>
            <option value="Open">Open</option>
            <option value="In Progress">In Progress</option>
            <option value="Resolved">Resolved</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
    <a href="{{ route('issues.index') }}" class="btn btn-secondary">Thoát</a>
</form>

</body>
