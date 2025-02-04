<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <a href={{ route('news.create') }} class="card-link btn btn-success">add news</a>
        @foreach ($news as $item)
            <div class="card ">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                    <p class="card-text">{{ $item->description }}</p>

                    <a href={{ route('news.edit', [$item->id]) }} class="card-link btn btn-info">Edit</a>
                    <form action={{ route('news.destroy', [$item->id]) }} method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="card-link btn btn-danger">Delete</button>
                    </form>

                </div>
            </div>
        @endforeach

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
