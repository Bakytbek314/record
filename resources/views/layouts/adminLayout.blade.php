<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("document_title")</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-light">

    <header class="bg-white shadow-sm mb-4">
        <div class="container py-3">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active fw-bold" href="{{ route('admin.requests') }}">Заявки</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active fw-bold" href="{{ route('admin.teachers.index') }}">Учителя</a>
                </li>
            </ul>
        </div>
    </header>

    <main class="container">
        @yield("content")
    </main>

</body>

</html>