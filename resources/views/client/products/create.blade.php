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

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Tên sản phẩm:</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="name">Danh mục:</label>
            <select class="form-select" name="category_id" id="category_id">
                <option value="">-- Chọn danh mục --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="image">Ảnh sản phẩm:</label>
            <input type="file" name="image" id="image">
        </div>
        <div>
            <label for="description">Mô tả sản phẩm:</label>
            <input type="text" name="description" id="description">
        </div>
        <div>
            <label for="price">Giá:</label>
            <input type="number" name="price" id="price">
        </div>
        <div>
            <label for="quantity">Số lượng sản phẩm:</label>
            <input type="number" name="stock" id="quantity">
        </div>
        <div>
            <button type="submit">Thêm mới</button>
        </div>
    </form>
</body>

</html>
