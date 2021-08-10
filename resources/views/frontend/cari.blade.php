<!DOCTYPE html>
<html>
<head>
	<title>Cari Kelompok</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

	  <div class="row-cols-auto">
		<div class="col-sm-4" id="kolom1">
			<div class="container">
			<h2>Cari Tahu <span>tim</span> <br> dan mentor kamu </h2>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos rem reiciendis impedit vero tempora voluptate consequatur labore adipisci modi ad.</p>
		</div>
	  </div>

	<div class="col-sm-7" id="kolom2" style="background-color: rgb(210, 238, 241);"   >
	<form class="cari" method="GET">         
	  <button type="submit" class="btn"><span class="fa fa-search"></span></button>
		<input type="search" id="search" placeholder="Masukkan NIM" value="{{old('cari')}}">
	</form>
	
	<div class="container">
		<h1>Halo</h1>
		<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod, dolores?</p>
	</div>
	

	<table class="content-table">
                  <thead height="50px">
                      <tr>
                          <th scope="col" width="300px">Nama</th>
                          <th scope="col" width="165px">Offering</th>
                          <th scope="col" width="165px">Peran</th>
                      </tr>
                  </thead>
                  <tbody height="30px">
					@foreach($data as $d)
					<tr>
						<td>{{ $d->nama }}</td>
						<td>{{ $d->nim }}</td>
						<td>{{ $d->offering}}</td>
						<td>{{ $d->peran}}</td>
					</tr>
					@endforeach
                  </tbody>
              </table>
          </div>
      </div>
		
	<br/>
 
	{{ $data->links() }}
 
 
</body>
</html>