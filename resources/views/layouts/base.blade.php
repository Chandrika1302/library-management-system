<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Library Store</title>
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body class="bg-gradient-to-l from-cyan-500 to-blue-500 font-sans">
    <header
        class="flex justify-between bg-opacity-50 bg-white backdrop-blur-md shadow-xl  text-center text-xl font-medium py-4 px-10">
        <h1 class="text-5xl p-4">
            Welcome {{session('user')}}!
        </h1>
        <nav class="mt-6">
            <a href="/"
                class="shadow-xl rounded-md bg-opacity-50 bg-white backdrop-blur-md cursor-pointer transform hover:scale-110 active:scale-90 duration-100 p-4">
                Home</a>
            <a href="/logout"
                class="shadow-xl rounded-md bg-white backdrop-blur-md rounded-md bg-opacity-50 cursor-pointer transform hover:scale-110 active:scale-90 duration-100 p-4">Logout</a>
        </nav>
    </header>
    <main>
        <ul
            class="side-bar shadow-xl bg-opacity-50 bg-white backdrop-blur-md p-4 cursor-pointer w-64 text-xl font-medium">
            <li
                class="shadow-xl rounded-md bg-opacity-50  backdrop-blur-md p-4 cursor-pointer transform hover:scale-110 active:scale-90 duration-100">
                <a href="/authors">All Authors</a>
            </li>
            <li
                class="shadow-xl rounded-md bg-opacity-50 backdrop-blur-md p-4 cursor-pointer transform hover:scale-110 active:scale-90 duration-100">
                <a href="/books">All Books</a>
            </li>
            <li
                class="shadow-xl rounded-md bg-opacity-50 backdrop-blur-md p-4 cursor-pointer transform hover:scale-110 active:scale-90 duration-100">
                <a href="/author/create">Add new Author</a>
            </li>
            <li
                class="shadow-xl rounded-md bg-opacity-50 backdrop-blur-md p-4 cursor-pointer transform hover:scale-110 active:scale-90 duration-100 ">
                <a href="/book/create">Add new Book</a>
            </li>
            <li
                class="shadow-xl rounded-md bg-opacity-50 backdrop-blur-md p-4 cursor-pointer transform hover:scale-110 active:scale-90 duration-100">
                <a href="/about">About</a>
            </li>
        </ul>
        <div class="app">
            @yield('content')
        </div>
    </main>
</body>

</html>