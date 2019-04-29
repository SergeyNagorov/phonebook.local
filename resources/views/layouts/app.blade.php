<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Phonebook</title>
</head>
<body>
    @yield('content')

    @if ($errors->any())
    <h3>Errors</h3>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif

    {{-- вывод ошибок --}}
</body>
</html>
