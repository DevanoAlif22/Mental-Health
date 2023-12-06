<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{ asset('/css/tanyaAi/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    {{-- navbar --}}
    <nav class="text-center">
        navbar
    </nav>
    {{-- navbar --}}

    <div class="judul-halaman" style="margin-top: 5rem">
        <h2>Tanya Ai</h2>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="pembungkus-search">
                    <div class="input">
                        <span><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input style="" type="text">
                    </div>
                    <a href="">Kirim</a>

                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <textarea name="" id="" style="width: 100%" cols="30" rows="20"></textarea>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
