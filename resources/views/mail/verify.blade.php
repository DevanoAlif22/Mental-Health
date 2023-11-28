<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifikasi akun anda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
</head>
<body>
    <p>
        Halo <b>{{$details['name']}}</b>
    </p>
    <br>
    <p>
        Berikut ini adalah data anda :
    </p>

    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td>{{$details['name']}}</td>
        </tr>
        <tr>
            <td>Sebagai</td>
            <td>:</td>
            <td>Pengguna</td>
        </tr>
        <tr>
            <td>Website</td>
            <td>:</td>
            <td>{{$details['website']}}</td>
        </tr>
    </table>

    <center>
        <h3>Klik dibawah ini untuk verifikasi akun anda : </h3>
        <a style="text-decoration: none;" class="btn btn-primary" href="{{$details['url']}}">Verifikasi disini</a>
        <br><br><br>
        <p>Copy right @ 2023 | team Kakack Squad</p>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
