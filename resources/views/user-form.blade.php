<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gradient-to-l from-cyan-500 to-blue-500 flex justify-center flex-col">
    <h1
        class="text-6xl text-center pt-24 font-extrabold text-transparent bg-clip-text bg-gradient-to-b via-slate-700 to-slate-800">
        {{$title??''}} Form</h1>
    <a href="/"
        class="m-10 text-center w-48 rounded-md bg-opacity-50 bg-white backdrop-blur-md shadow-xl p-4 font-sans font-medium cursor-pointer transform hover:scale-110 active:scale-90 duration-100 text-xl">
        Back to Home
    </a>

    <form method="POST"
        class="exp my-18 rounded-md bg-opacity-50 bg-white backdrop-blur-md shadow-xl text-xl p-12 font-sans font-medium">
        @csrf
        <label for="username">Username</label>
        <input class="shadow-xl block rounded-md w-full p-2 mb-4" type="text" name="username" placeholder="Username">
        <label for="password">Password</label>
        <input class=" shadow-xl block rounded-md w-full p-2 mb-4" type="text" name="password" placeholder="Password">
        <input class="shadow-xl block rounded-md w-full p-2 mb-4 bg-sky-500 text-sky-900 w-24" type="submit"
            value="submit">
    </form>



    @isset($error)
    <div class="text-center text-3xl mt-6 font-bold">
        {{ $error }}
    </div>
    @endisset

</body>

</html>