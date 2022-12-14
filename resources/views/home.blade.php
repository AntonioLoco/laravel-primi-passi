<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        ul {
            list-style: none;
            display: flex;
        }

        li {
            padding: 0 1em;
        }

        a {
            text-decoration: none;
            color: black;
            font-size: 2rem;
        }

        a:hover {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Hello {{ $user }}, {{ $greeting }}</h1>

    <ul>
        @foreach ($links as $link)
            <li><a href="{{ route($link) }}">{{ $link }}</a></li>
        @endforeach
    </ul>
</body>

</html>
