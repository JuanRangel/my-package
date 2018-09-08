<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
<h1>Contact Us</h1>

<form action="{{route('contact.store')}}" method="post">
    @csrf
    <p>
        <input type="text" name="name" placeholder="Your name please">
    </p>
    <p>
        <input type="email" name="email" placeholder="Your email">
    </p>
    <p>
        <textarea name="message" id="" cols="30" rows="10" placeholder="Your message"></textarea>
    </p>

    <input type="submit" value="submit">
</form>
</body>
</html>