<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login System</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center py-3">
          <div class="col-md-6">
            <img src="{{url('/img/header2.jpg')}}" alt="" class="img-fluid mb-4">
            <div>
              <h3 class="fw-bold text-warning">Selamat Datang di MyBanks</h3>
              <p class="mb-4">Apakah anda sudah memiliki akun?</p>
              <div class="d-flex flex-column gap-3 mt-5">
                <a href="/login" class="btn btn-warning">Punya Akun</a>
                <a href="/register" class="btn">Belum Punya Akun</a>
              </div>
            </div>
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>