<form action="{{route('Products.store')}}" method="post">

@csrf
    <input type="text" name="first">
    <input type="text" name="last">
    <button type="submit">add</button>
</form>
