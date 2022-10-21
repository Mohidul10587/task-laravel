<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <x-header/>
    <form action="contactsend" method="post">
        @csrf
        <input type="text" placeholder="name" name="name">
        <input type="email" placeholder="email" name="email">
        <input type="password" placeholder="pass" name="pass">
        <button type="submit">Submit</button>
    </form>
</body>
</html>