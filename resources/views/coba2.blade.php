<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="/coba2" method="POST" >
        @csrf
        <textarea id="editor" name="title"></textarea>
        <textarea id="editor" name="description"></textarea>
        <button type="submit">submit</button>
    </form>

</body>
</html>
