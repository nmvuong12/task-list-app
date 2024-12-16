<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="text-success text-center">
            Nhiệm vụ số 
            <?php echo $task->id?>
        </h2>
        <div class="row">
            <div class="col-3">
                <p><strong>Tiêu đề: <?php echo $task->title?></strong></p>
                <p><strong>Tóm tắt: <?php echo $task->description?></strong></p>
                @if ($task->completed == 1)
                <p class="text-success"><strong>Trạng thái: Hoàn thành</strong></p>
                @else
                <p class="text-danger"><strong>Trạng thái: Chưa hoàn thành</strong></p>
                @endif              
                <p><strong>Ngày tạo: <?php echo $task->created_at?></strong></p>
                <p><strong>Ngày sửa: <?php echo $task->updated_at?></strong></p>
            </div>
            <div class="col-7">
                <h5 class="text-primary"><strong>Nội dung</strong></h5>
                <p>Mô tả chi tiết: <?php echo $task->long_description?></p>
            </div>
        </div>
    </div>
    <div class="container w-50 d-flex justify-content-center">
        <a href="{{route('tasks.edit', ['task' => $task->id])}}" type="button" class="btn btn-warning me-2">Sửa</a>
        <a href="{{route('tasks.index')}}" type="button" class="btn btn-secondary">Quay lại</a>
    </div>
<script src="bootstrap\js\bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>