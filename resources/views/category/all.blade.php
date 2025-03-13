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
   {{-- <x-alert message='this is from all page'/> --}}
   {{-- <x-message message='this is from all page' color='success'size='w-50'>
    <h1> this h1 is slot text </h1>
   </x-message> --}}



   <x-message message='this is from all page' color='danger' size='w-50'>
    <h1> this h1 is slot text </h1>
   </x-message>

    <form action={{ route('category.index') }} part="get">
        <select name="select" id="">
            <option value="*">all</option>
            <option value="name">name </option>
            <option value="code">code</option>
            <option value="description">description</option>

        </select>
        <input type="text" name="search" id="">
        <button class="btn btn-success" type="submit">search</button>
    </form>
    <a class="btn btn-success" href="{{ route(name: 'category.create') }}">Add Product</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">code</th>
                <th scope="col">description</th>
                <th scope="col">image</th>
                <th scope="col">status</th>
                <th scope="col">option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $key => $category)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->code }}</td>
                    <td>{{ $category->description }}</td>
                    {{-- <td><img src="{{ asset('images/' . $category->image) }}" width="150px" height="150px"
                            alt=""> </td> --}}
                            {{-- @dd($category) --}}
                    <td><img src="{{asset('storage/image/'.$category->image)  }}" width="250px" height="250px"
                            alt=""> </td>
                    <td>{{ $category->status }}</td>

                    <td>
                        <div class="d-flex justify-content-around">
                            <a href="{{ route('category.edit', [$category->id]) }}"
                                class="card-link btn btn-info ">Edit</a>
                            <form action={{ route('category.destroy', [$category->id]) }} method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="card-link btn btn-danger">Delete</button>
                            </form>
                        </div>
                        {{-- <a href={{ route('Products.edit',  [$product->id]) }} class="card-link btn btn-info">Edit</a> --}}
                        {{-- <a href="{{ route('Products.edit', [$product->name]) }}">Edit</a> --}}
                    </td>


                </tr>
            @endforeach

        </tbody>
    </table>
    {{$categories->links('pagination::bootstrap-5')}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
