<!DOCTYPE html>
<html lang="en">
<head>
<title>Menu</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="<?php  echo base_url("asset/images/favicon.ico");?>">
<link rel="shortcut icon href="<?php  echo base_url("asset/images/favicon.ico");?>>
<link rel="stylesheet" href="<?php  echo base_url('asset/css/stuck.css');?>">
<link rel="stylesheet" href="<?php  echo base_url("asset/css/style.css");?>">
<link rel="stylesheet" href="<?php  echo base_url("asset/css/touchTouch.css");?>">
<script src="<?php  echo base_url("asset/js/jquery.js");?>"></script>
<script src="<?php  echo base_url("asset/js/jquery-migrate-1.1.1.js");?>"></script>
<script src="<?php  echo base_url("asset/js/script.js")?>"></script> 
<script src="<?php  echo base_url("asset/js/superfish.js");?>"></script>
<script src="<?php  echo base_url("asset/js/jquery.equalheights.js");?>"></script>
<script src="<?php  echo base_url("asset/js/jquery.mobilemenu.js");?>"></script>
<script src="<?php  echo base_url("asset/js/jquery.easing.1.3.js");?>"></script>
<script src="<?php  echo base_url("asser/js/tmStickUp.js");?>"></script>
<script src="<?php  echo base_url("js/jquery.ui.totop.js");?>"></script>
<script src="<?php  echo base_url("js/touchTouch.jquery.js");?>"></script>



<script>
 $(document).ready(function(){

  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});
  $('.gallery .gall_item').touchTouch();

  }); 
</script>
</head>

<body>
  <nav class="navbar bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">Navbar</a>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        
      <a href="<?php echo base_url("index.php/login/login") ?>" class="btn btn-danger btn-sm active" >Login</a>
      
      </form>
    </div>
  </nav>
    

<!--header-->
<header>
  <section id="stuck_container">
    <div class="container">
      <div class="row">
        <div class="grid_12">
         <h1>Information Even Organizer</h1>
        </div>
      </div>
    </div>
  </section> 
</header>      

<!--Content-->
<section class="content gallery pad1">
  <div class="container">
    <div class="row">
      <div class="grid_4">
        <div class="gall_block">
          <div class="maxheight">
            <a href="<?php  echo base_url("asset/images/1summer.jpg");?>" class="gall_item"><img src="<?php  echo base_url("asset/images/1summer.jpg");?>" alt=""></a>
            <div class="gall_bot">
            <div class="text1"><a>Summer Camp Expo</a></div>
            <ul>
              <li>Pelatihan</li>
              <li>27 April 2013</li>
              <li>13.00-15.00 WIB</li>
              <li>Rumah Kemah</li>
          </ul>
            <br>
            <a href="#" class="btn">more</a></div>
          </div>
        </div>
      </div>
      <div class="grid_4">
        <div class="gall_block">
          <div class="maxheight">
            <a href="<?php  echo base_url("asset/images/2seminar hd.jpg");?>" class="gall_item"><img src="<?php  echo base_url("asset/images/2seminar hd.jpg");?>" alt=""></a>
            <div class="gall_bot">
            <div class="text1"><a>SEMINAR EVENT</a></div>
            <ul>
              <li>Seminar</li>
              <li>27-28 November 2015</li>
              <li>09.00-selesai WIB</li>
              <li>zoom metting</li>
          </ul>
            <br>
            <a href="#" class="btn">more</a></div>
          </div>
        </div>
      </div>
      <div class="grid_4">
        <div class="gall_block">
          <div class="maxheight">
            <a href="<?php  echo base_url("asset/images/3olahraga.jpg");?>" class="gall_item"><img src="<?php  echo base_url("asset/images/3olahraga.jpg");?>" alt=""></a>
            <div class="gall_bot">
            <div class="text1"><a>SOCCER TOURNAMENT</a></div>
            <ul>
              <li>Olahraga</li>
              <li>29 Agustus 2020</li>
              <li>08:00-selesai WIB</li>
              <li>GLORA BUNG KARNO</li>
          </ul>
            <br>
            <a href="#" class="btn">more</a></div>
          </div>
        </div>
      </div>
      <div class="clear sep__1"></div>
      <div class="grid_4">
        <div class="gall_block">
          <div class="maxheight">
            <a href="<?php  echo base_url("asset/images/4bazar.jpg");?>" class="gall_item"><img src="<?php  echo base_url("asset/images/4bazar.jpg");?>" alt=""></a>
            <div class="gall_bot">
            <div class="text1"><a>BOOK FAIR</a></div>
            <ul>
              <li>Bazar</li>
              <li>21-24 Maret 2017</li>
              <li>09.00-16.00 WIB</li>
              <li>PLAZA PAMERAN INDUSTRI</li>
          </ul>
            <br>
            <a href="#" class="btn">more</a></div>
          </div>
        </div>
      </div>
      <div class="grid_4">
        <div class="gall_block">
          <div class="maxheight">
            <a href="<?php  echo base_url("asset/images/5workshop.jpg");?>" class="gall_item"><img src="<?php  echo base_url("asset/images/5workshop.jpg");?>" alt=""></a>
            <div class="gall_bot">
            <div class="text1"><a>POSTER DESIGN WORKSHOP</a></div>
              <ul>
                <li>Workshop</li>
                <li>28 Februari 2017</li>
                <li>13.30-14.30 WIB</li>
                <li>ZOOM MEETING</li>
              </ul>
            <br>
            <a href="#" class="btn">more</a></div>
          </div>
        </div>
      </div>
      <div class="grid_4">
        <div class="gall_block">
          <div class="maxheight">
            <a href="<?php  echo base_url("asset/images/6pelatihan.jpg");?>" class="gall_item"><img src="<?php  echo base_url("asset/images/6pelatihan.jpg");?>" alt=""></a>
            <div class="gall_bot">
            <div class="text1"><a>SEKOLAH DESIGN</a></div>
              <ul>
                <li>Pelatihan</li>
                <li>30 Maret 2019</li>
                <li>07.00-selesai WIB</li>
                <li>PC PMII SURABAYA, JL.DARMOKAU NO 148</li>
            </ul>
            <br>
            <a href="#" class="btn">more</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>