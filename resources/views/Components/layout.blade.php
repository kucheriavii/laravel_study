<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <nav>
            <x-nav-link href="/">Home</x-nav-link>
            <x-nav-link class="test" href="/about">About</x-nav-link>
            <x-nav-link href="/contacts">Contacts</x-nav-link>
        </nav>

        {{$slot}}
    </body>
</html>
