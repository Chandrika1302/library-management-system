<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>{{$title??''}} Form</hi>
    <a href="/" class="nav-link"> Back to Home</a>

    <form method="POST">
        @csrf
    <input type="text" name="username" placeholder="Username" >
    <input type="text" name="password" placeholder="Password" >
    <input type="submit" value="submit">
</form>

@isset($error)
    <div class="error">
        {{ $error }}
    </div>
@endisset

</body>
</html>
