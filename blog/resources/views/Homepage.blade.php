<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
</head>
<body>
    @include('Layout.header',['footertext'=>'Include header section'])
<h1>Hello this is homepage</h1>
<ul>
    <li><a href="{{ url('/home') }}">Home</a></li>
    <li><a href="{{ url('/about') }}">About</a></li>
    <li><a href="{{ url('/contact') }}">Contact</a></li>
</ul>

<h1>
    {{-- @for ($i = 0; $i < 5; $i++)


   {{ $valuename }}<br>
    @endfor --}}

</h1>

{{-- @forelse ($collection as $item)

@empty

@endforelse --}}

{{-- @foreach ($valuename as $item)
@if ($loop->odd)
{{ $item }}

@endif
@endforeach --}}


@include('Layout.footer')
</body>
</html>
