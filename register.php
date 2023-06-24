<!DOCTYPE html>
<html>
    <head> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<title></title>
</head>
<body>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="asset/komputer.webp"
          class="img-fluid">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="proses_register.php" method="post">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">BACA BUKU</p>

          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Regist dulu yaa</p>
          </div>
          <!-- Name input -->
          <div class="form-outline mb-4">
            <input type="text" class="form-control form-control-lg" name="nama"
              placeholder="Ketikkan Nama Anda Disini" />
            <label class="form-label">Name</label>
        </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" class="form-control form-control-lg" name="username"
              placeholder="Ketikkan Email Anda Disini" />
            <label class="form-label">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" class="form-control form-control-lg"
             name="password" placeholder="Buat password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          
          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg" name="simpan"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
           
          </div>

        </form>
      </div>
    </div>
  </div>

</section>

</body>
</html>
<style>
    .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
</style>