<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container w-50">
        <h1 class="text-primary text-center">Edit</h1>
        <form action="{{route('tasks.update', $task->id)}}" method="POST">
            @csrf
            @method ('PUT')
            <input type="hidden" name="action" value="create">
            <label for="title"><strong>Tiêu đề: </strong></label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $task->title?>">
            <br>
            <label for="description"><strong>Tóm tắt: </strong></label>
            <input type="text" class="form-control" id="description" name="description" value="<?php echo $task->description?>">
            <br>
            <label for="long_description"><strong>Mô tả chi tiết: </strong></label><br>
            <textarea name="long_description" rows="4" cols="70" class="form-control">{{ $task->long_description }}</textarea>
            <br>

            @if ($task->completed == 1)
                <p class="text-success"><strong>Trạng thái: Hoàn thành</strong></p>
            @else
                <p class="text-danger"><strong>Trạng thái: Chưa hoàn thành</strong></p>
            @endif
            <label for="create_at"><strong>Ngày tạo: </strong></label>
            <input type="date" class="form-control" id="create_at" name="create_at" placeholder="Nhập ngày đăng" value="{{ old('create_at', $task->created_at ? \Carbon\Carbon::parse($task->created_at)->format('Y-m-d') : '') }}">
            <br>

            <label for="create_at"><strong>Ngày cập nhật: </strong></label>
            <input type="date" class="form-control" id="create_at" name="create_at" placeholder="Nhập ngày đăng">
            <br>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success me-2">Update</button>
                <a href="{{route('tasks.index')}}" type="button" class="btn btn-secondary">Quay lại</a>
            </div>
            
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
