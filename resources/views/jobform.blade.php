<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Form</title>
</head>
<body>
   
    <form action="jobform" method="post">
        @csrf
        <input type="text" placeholder="Name" name="name">
        <input type="number" placeholder="Quantity" name="quantity">
        <input type="number" placeholder="Price" name="price">
        <input type="email" placeholder="Email" name="email">

        <button type="submit">Submit</button>
    </form>
</body>
</html>