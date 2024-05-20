{{--
    Head Template file.

    @author Pihe Edmond <pihedy@gmail.com>
--}}

<head>
    @foreach ($assets['styles'] as $style)
        <link rel="stylesheet" href="{{ $style }}" />
    @endforeach

    @foreach ($assets['scripts'] as $script)
        <script src="{{ $script }}"></script>
    @endforeach

    <title>{{ $head['title'] }} - WetDog</title>
</head>
