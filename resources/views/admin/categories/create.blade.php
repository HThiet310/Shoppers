<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Thêm mới danh mục</h1>

    <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Tên danh mục</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug">
        </div>
        <div>
            <label for="image">Hình ảnh</label>
            <input type="file" name="image" id="image">
        </div>
        <div>
            <label for="description">Mô tả</label>
            <input type="text" name="description" id="description">
        </div>
        <div>
            <button type="submit">Thêm mới</button>
        </div>
    </form>
</body>

</html>
