<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <img src="{{asset('storage/image/'.$category->image)}}" width="250px" height="250px" alt="">
    <form action="{{ route('category.update', [$category->id]) }}" method="post" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $category->name }}"
                name="name">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">code</label>
            <input type="number" class="form-control" id="exampleInputPassword1" value="{{ $category->code }}"
                name="code">
            @error('code')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3 ">
            <label class="form-check-label" for="exampleCheck1">description</label>
            <textarea type="text" class="form-control" id="exampleCheck1" name="description">{{ $category->description }}</textarea>
            @error('description')
                {{ $message }}
            @enderror
        </div>
        <div lass="input-group mb-3">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control" type="file" id="formFile"  name="image">
            @error('image')
                {{ $message }}
            @enderror
        </div>

        <div class="input-group mb-3 mt-3">
            <label class="input-group-text" for="inputGroupSelect02">Status</label>
            <select class="form-select" id="inputGroupSelect02" name="status">
                <option selected>Choose... the old value is {{ $category->status }}</option>
                <option  value="active">active</option>
                <option value="inactive">inactive</option>

            </select>
            @error('status')
                {{ $message }}
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>

</html>
