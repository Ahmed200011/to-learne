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
    {{-- @dump(Session::all()) --}}
<a class="btn btn-success" href="{{route('Products.create')}}">Add Product</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">price</th>
                <th scope="col">product category</th>
                {{-- <th scope="col">image</th>
                <th scope="col">status</th> --}}
                <th scope="col">option</th>
            </tr>
        </thead>
        <tbody>
            {{-- @dd($Products) --}}
            @foreach ($Products as $key=> $product)
            <tr>

                    <th scope="row">{{$key+1}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>

                    <td>{{$product->category->name}}</td>
                    <td>{{$product?->category?->parent?->name}}</td>
                    {{-- <td><img src="{{ asset('images/'. $product->image) }}" width="150px" height="150px" alt=""> </td>
                    <td>{{$product->status}}</td> --}}

                    <td>
                        {{-- <a href={{ route('Products.edit',  [$product->id]) }} class="card-link btn btn-info">Edit</a> --}}
                        <a href="{{ route('Products.edit', [$product->name]) }}">Edit</a>
                        {{-- <form action={{ route('news.destroy', [$product->id]) }} method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="card-link btn btn-danger">Delete</button>
                        </form> --}}
                    </td>


                    </tr>
                    @endforeach

        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
