@if (session()->has('massage'))

{{$message}}
<div class="alert alert-{{$color}} {{$size}}" role="alert">
    {{session()->get('massage')}}
  </div>
  {{$slot}}
@endif
