!
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tanya AI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/css/allsearch/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/content/profile_style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/content/listArticle_style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/content/listStory_style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <h1>Tanya tentang kesehatan : </h1>
    <form action="/ai" method="post">
        @csrf
        <label for="">Input disini</label> <br><br>
        <input type="text" name="topic" placeholder="Gangguan afektif" id="">
        <button type="submit">Kirim</button>
    </form>
    @if (isset($result))
    <h3>Output : </h3>
    <div>{{$result}}</div>

    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
