<div>
    @if (session()->has('massage'))
        <div class="alert alert-{{ $color }} {{ $size }} "  role="alert">

            {{ $message }}

            {{-- {{ $color }} --}}
            {{-- @dd($color) --}}
            {{ session()->get('massage') }}
        </div>
        {{ $slot }}

    @endif

</div>
