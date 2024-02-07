<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mental Health - Pembayaran</title>
    <link rel="stylesheet" href="/css/navbar/style.css">
    <link rel="stylesheet" href="/css/footer/style.css">
    <link rel="icon" href="/images/main/logo2.png" type="image/png">
    <link rel="stylesheet" href="/css/bayar/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


    {{-- nav --}}
    @include('layout.navbarDefault')
    <div class="container">
        <div class="row">
            <div class=" offset-lg-3 col-lg-6">

                <div class="wrap-card">

                    <h1 class="mb-4">Pembayaran</h1>
                    <p>Anda akan melakukan pembelian <b style="color: #0056b3" >Sistem Pakar Unlimited</b> dengan harga <b>Rp 10.000</b></p>
                    <p><strong style="color: #0056b3" >Data diri Anda :</strong></p>
                    <p><strong style="color: #0056b3">Nama :</strong> {{ Auth::user()->name }}</p>
                    <p><strong style="color: #0056b3" >Email :</strong> {{ Auth::user()->email }}</p>
                    <button class="tombol" id="pay-button">Bayar Sekarang</button>
                </div>
            </div>
        </div>
    </div>


    @include('layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

<script src="https://app.midtrans.com/snap/snap.js" data-client-key="{{env('MIDTRANS_CLIENT_KEY')}}"></script>
    <script type="text/javascript">
      document.getElementById('pay-button').onclick = function(){
        // SnapToken acquired from previous step
        snap.pay('{{$transaction->token}}', {
          // Optional
          onSuccess: function(result){
             window.location.href = '{{route('checkout-success',$transaction->id)}}'
          },
          // Optional
          onPending: function(result){
            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          // Optional
          onError: function(result){
            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          }
        });
      };
    </script>
</body>

</html>
