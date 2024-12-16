<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm dữ liệu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container w-50">
        <h1 class="text-primary text-center">Create</h1>
        <form action="{{route('tasks.store')}}" method="POST">
            @csrf
            <input type="hidden" name="action" value="create">
            <label for="title"><strong>Tiêu đề: </strong></label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nhập tiêu đề">
            <br>
            <label for="description"><strong>Tóm tắt: </strong></label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Nhập tóm tắt">
            <br>
            <label for="long_description"><strong>Mô tả chi tiết: </strong></label><br>
            <textarea name="long_description" rows="4" cols="70" placeholder="Nhập nội dung tại đây" class="form-control"></textarea>
            <br>
            <!-- <label for="author"><strong>Ngày tạo: </strong></label>
            <input type="text" class="form-control" id="title" name="author" placeholder="Nhập người viết">
            <br> -->
            <!-- <label for="create_at"><strong>Ngày tạo: </strong></label>
            <input type="date" class="form-control" id="create_at" name="create_at" placeholder="Nhập ngày đăng">
            <br> -->
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success me-2">Save</button>
                <input class="btn btn-primary me-2" type="reset" value="Reset">
                <a href="{{route('tasks.index')}}" type="button" class="btn btn-secondary">Quay lại</a>
            </div>
            
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
