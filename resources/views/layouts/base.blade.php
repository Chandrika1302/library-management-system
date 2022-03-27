<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Library Store</title>
</head>

<body>
    <header>
        <h1> Welcome {{session('user')}}!</h1>
        <nav>
            <a href="/">Home</a><a href="/logout">Logout</a>
        </nav>
    </header>
    <main>
        <ul class="side-bar">
                  <li> <a href="/authors">All Authors</a> </li>
                  <li> <a href="/books">All Books</a> </li>
                  <li> <a href="/about">About</a> </li>
                  <li> <a href="/author/create">Add new Author</a> </li>
                  <li> <a href="/book/create">Add new Book</a> </li>
        </ul>
        <div class="app">
        @yield('content')
        </div>
    </main>
</body>

</html>
