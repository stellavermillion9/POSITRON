<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <script type="text/javascript" src="js/jquery.js"></script>
	    <script type="text/javascript" src="js/bootstrap.js"></script>	
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  

        
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        
        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="css/style5.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->



    <title>Cari Kelompok</title>
  </head>
  <body>
      <div class="container">
    <nav class="navbar navbar-expand-sm navbar-light">
      <div class="container">
          <a href="/" class="navbar-brand">POSITRON</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                  <li class="navbar-item">
                      <a href="/" class="nav-link active" aria-current="page">Home</a>
                  </li>
                  <li class="navbar-item">
                      <a href="/" class="nav-link active" aria-current="page">Home</a>
                  </li>
                  <li class="navbar-item">
                      <a href="/" class="nav-link active" aria-current="page">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
              </ul>
          </div>
      </div>
 </nav>

<div class="row">
        <div class="col-md-5" >
        <h1>Cari tahu <span>tim</span><br> dan mentor kamu</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit minima unde dolore alias!</p>
        <div id="sosmed">
    <a href="#" class="fa fa-instagram">@hmjelektro_um</a>
    <a href="#" class="fa fa-facebook">@hmjelektro_um</a>
    <a href="#" class="fa fa-twitter">@hmjelektro_um</a>
</div>
</div>
    <div class="col-md-7">
        <form class="cari" action="/cari" method="GET"> 
            <button type="submit" class="btn" value="CARI"><span class="fa fa-search"></span></button>
              <input type="search" name="cari" id="search" placeholder="Masukkan NIM" value="{{old('cari')}}">
          </form>

          <div id="read"></div>
          @foreach($data as $d)
          <div id="hlo">
              <h1>Halo, <span>{{$d->nama}}</span> </h1>
              <p>Lorem ipsum dolor sit amet consectetur {{$d->offering}}, adipisicing elit. Doloribus, autem.</p>
          </div>
          <table class="content-table">
              <thead>
                  <tr>
                      <th>Nama</th>
                      <th>Offering</th>
                      <th>Peran</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>{{$d->nama}}</td>
                      <td>{{$d->offering}}</td>
                      <td>{{$d->peran}}</td>
                  </tr>
              </tbody>
          </table>
          @endforeach
    </div>
</div>

<!--<footer>
 <div class="card-footer">
     <a href="#" class="fa fa-instagram">@hmjelektro_um</a>
     <a href="#" class="fa fa-facebook">@hmjelektro_um</a>
     <a href="#" class="fa fa-twitter">@hmjelektro_um</a>
 </div>
</footer>-->

    <!--<div class="row-cols-auto">
      <div class="col-sm-4" id="kolom1">
          <div class="container">
          <h2>Cari Tahu <span>tim</span> <br> dan mentor kamu </h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos rem reiciendis impedit vero tempora voluptate consequatur labore adipisci modi ad.</p>
            <footer class="footer section">
                  <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                      <i class="ri-facebook-box-fill"></i>
                  </a>
                  <a href="https://twitter.com/" target="_blank" class="footer__social">
                      <i class="ri-twitter-fill"></i>
                  </a>
                  <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                      <i class="ri-instagram-fill"></i>
                  </a>
                  <a href="https://www.youtube.com/" target="_blank" class="footer__social">
                      <i class="ri-youtube-fill"></i>
                  </a>
            </footer>
        </div>
      </div>
      
    
      <div class="col-sm-7" id="kolom2"> 
        <form class="cari" action="/cari" method="GET"> 
            <button type="submit" class="btn" value="CARI"><span class="fa fa-search"></span></button>
              <input type="search" name="cari" id="search" placeholder="Masukkan NIM" value="{{old('cari')}}">
          </form>
        
        <div id="progress-content hide">  
        @foreach ($data as $d)
          <div class="container" id="hlo">
              <h1>Halo, <span>{{ $d->nama }}</span> </h1>
              <p>Lorem ipsum dolor sit, <span>{{$d->offering}}</span> adipisicing elit. Quod, dolores?</p>
          </div>
          @endforeach
          @foreach ($data as $d)
          <table class="content-table">
              <thead height="50px">
                  <tr>
                      <th scope="col" width="300px">Nama</th>
                      <th scope="col" width="165px">Offering</th>
                      <th scope="col" width="165px">Peran</th>
                  </tr>
              </thead>
              <tbody height="30px">
                  <tr>
                      <td scope="row">{{$d->nama}}</td>
                      <td scope="row">{{$d->offering}}</td>
                      <td scope="row">{{$d->peran}}</td>
                  </tr>
              </tbody>
          </table>
          @endforeach
      </div>
      </div>
      </div>-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    
</div>


</body>
  
</html>