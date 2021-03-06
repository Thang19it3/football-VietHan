<!DOCTYPE html>
<html>
<head>
	<title>Liên Hệ</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="css/lienhe.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="shortcut icon" type="image/png" href="img/logo2.png">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<header style="margin-top: 0;margin-bottom: 10px;">
		@if(Auth::check())
		<a href="http://localhost/GetPost/assignmentselect/public/home1" class="logo"><img style="width: 87px;height: 60px;margin-left: 60px;margin-top: 13px;" src="http://soccerclub.axiomthemes.com/wp-content/uploads/2016/04/logo.png"></a>
		<div class="menu-toggle"></div>
		<nav>
			<ul>
				<li style="padding-right: 5px;">
					<a href="http://127.0.0.1:8000/home1" style="text-decoration: none;">Trang Chủ</a>
				</li>
				<li style="padding-right: 5px;">
					<a href="http://127.0.0.1:8000/tim-san" style="text-decoration: none;">Đặt Sân</a>
				</li>
				<li style="padding-right: 5px;">
					<a href="http://127.0.0.1:8000/trangchu/tintuc/tintuc1" style="text-decoration: none;">Tin Tức</a>
				</li>
				<li style="padding-right: 5px;">
					<a href="http://127.0.0.1:8000/doibong" style="text-decoration: none;">Đội Bóng</a>
				</li>
				<li style="padding-right: 5px;">
					<a href="http://127.0.0.1:8000/lienhe" style="text-decoration: none;" class="active" >Liên Hệ</a>
				</li>
			</ul>
		</nav>
		<div class="drop-btn" style="cursor: pointer;">
			<div class="drops-btn" style="z-index: 1000;width: 200px;">
				{{Auth::user()->name}}
			</div>
			<div class="wrapper">
				<ul class="menu-bar">
					<li>
			            <a href="http://127.0.0.1:8000/profile">
			              <div class="icon"><span class="fas fa-home"></span></div>
			              Profile
			            </a>
			          </li>
			          <li>
			            <a href="http://127.0.0.1:8000/trangchu/doibong1/profile">
			              <div class="icon"><span class="fas fa-home"></span></div>
			              Club
			            </a>
			          </li>
			          <li>
			            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
			              <div class="icon"><span class="fas fa-home"></span></div>
			              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
		                        @csrf
		                    </form>
			              Đăng Xuất
			            </a>
			          </li>
				</ul>
			</div>
		</div>
		@else
		<a href="#" class="logo"><img style="width: 87px;height: 60px;margin-left: 60px;margin-top: 13px;" src="http://soccerclub.axiomthemes.com/wp-content/uploads/2016/04/logo.png"></a>
		<div class="menu-toggle"></div>
		<nav>
			<ul>
				<li style="padding-right: 5px;">
					<a href="#" style="text-decoration: none;">Trang Chủ</a>
				</li>
				<li style="padding-right: 5px;">
					<a href="http://127.0.0.1:8000/tim-san" style="text-decoration: none;">Đặt Sân</a>
				</li>
				<li style="padding-right: 5px;">
					<a href="http://127.0.0.1:8000/trangchu/tintuc/tintuc1" style="text-decoration: none;">Tin Tức</a>
				</li>
				<li style="padding-right: 5px;">
					<a href="http://127.0.0.1:8000/doibong" style="text-decoration: none;">Đội Bóng</a>
				</li>
				<li style="padding-right: 5px;">
					<a href="http://127.0.0.1:8000/lienhe" style="text-decoration: none;" class="active">Liên Hệ</a>
				</li>
			</ul>
		</nav>
		<div class="drop-btn" style="cursor: pointer;">
			<div class="drops-btn" style="z-index: 1000;">
				<a href="http://127.0.0.1:8000/dang-nhap" style="font-size: 12px;text-decoration: none;font-size: 17px;color: white;">Đăng nhập</a>
			</div>
		</div>
		@endif
		<div class="side" style="z-index: 3000;">
			<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
			<div id="mySidenav" class="sidenav" style="z-index: 9999;">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="background: #fe5900;padding-right: 30px;">&times;</a>
				<div class="side-text">
					<h3>THÔNG TIN NHANH</h3>
					<p>Chất lượng đặt lên hàng đầu <br> nơi giao lưu các đội bóng khác</p>
					<h5><i class="far fa-clock"></i>Thứ Hai - Thứ Sáu: 7 giờ  sáng đến 11h tối <br> Thứ 7 và CN  Full Time</h5>
					<h5><i class="fas fa-map-marker-alt"></i>Đà Nẵng</h5>
					<h5><i class="fas fa-phone-alt"></i>+0829485934234</h5>
					<h5><i class="fas fa-at"></i>nvthang.19it3@gmail.com</h5>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</header>
	<div class="lienhe-text">
		<h1>LIÊN HỆ</h1>
		<img src="img/banner2.jpg">
	</div>
	<div class="container">
		<div class="col-md-12 lienhe">
			<div class="col-md-12">
				<h5>Thứ Hai đến Thứ Sáu (trừ ngày lễ ngân hàng) 7:30 sáng đến 12:00 tối.</h5>
				<p>A matchday service is provided for all Home fixtures when the switchboard is open from 09.30am until 20 minutes after the end of the game. Please call the above number for all matchday issuesrem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ultricies auctor dignissim. Etiam eget auctor lectus, id scelerisque risus.</p>
				<div class="dia-diem">
					<div class="dia-diem1">
						<img src="img/diadiem1.jpg">
						<h3>Sân Chính</h3>
						<h6><i class="fas fa-map-marker-alt"></i> USA, California 20, First Avenue, California</h6>
						<h6><i class="fas fa-phone-alt"></i>+7 998 71 150 30 20</h6>
						<h6><i class="fas fa-phone-alt"></i>+7 998 71 150 30 20</h6>
						<h6><i class="far fa-envelope"></i> nvthang.19it3@vku.udn.vn</h6>
					</div>
					<div class="dia-diem2">
						<img src="img/diadiem2.jpg">
						<h3>Sân Chính</h3>
						<h6><i class="fas fa-map-marker-alt"></i> USA, California 20, First Avenue, California</h6>
						<h6><i class="fas fa-phone-alt"></i>+7 998 71 150 30 20</h6>
						<h6><i class="fas fa-phone-alt"></i>+7 998 71 150 30 20</h6>
						<h6><i class="far fa-envelope"></i> nvthang.19it3@vku.udn.vn</h6>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<form>
					<h3>Ý Kiến phản hôi</h3>
					<input type="text" name="subject" placeholder="Subject">
					<input type="text" name="subject" placeholder="Name">
					<input type="text" name="subject" placeholder="E-mail">
					<input type="text" name="subject" placeholder="Message" id="messa">
					<button type="submit" class="btn">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.8403389070704!2d108.19148181480722!3d16.021824788910227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218314aedc949%3A0x7e92031dd614d332!2zVHJ1eeG7gW4gVGjDtG5nIMSQw6AgTuG6tW5n!5e0!3m2!1svi!2s!4v1607708072376!5m2!1svi!2s" width="1500" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
	<div class="banner">
		<div class="banner-text" >
			<h2>ĐẶT SÂN NGAY</h2>
			<h2>2020</h2>
			<button>ĐẶT SÂN NGAY</button>
		</div>
		<img src="img/banner1.jpg">
	</div>
	<!-------------------------footer---------------------->
	<footer>
		<div class="container">
			<div class="sec aboutus">
				<h2>About Us</h2>
				<p>Cung cấp cho khách hàng những trận đấu tuyệt vời nhất <br> với chất lượng tốt nhất với các dịch vụ tốt nhất <br> Nơi đặt sự trải nghiệm lên hàng đầu </p>
				<ul class="sci">
					<li>
						<a href="#"><i class="fab fa-facebook"></i></a>
					</li>
					<li>
						<a href="#"><i class="fab fa-instagram"></i></a>
					</li>
					<li>
						<a href="#"><i class="fab fa-twitter"></i></i></a>
					</li>
					<li>
						<a href="#"><i class="fab fa-twitter"></i></i></a>
					</li>	
				</ul>
			</div>
			<div class="sec quickLinks">
				<h2>Quick Links</h2>
				<ul>
					<li><a href="#">Trang Chủ</a></li>
					<li><a href="#">Đặt Sân</a></li>
					<li><a href="#">Liên Hệ</a></li>
					<li><a href="#">Trang Chủ</a></li>
					<li><a href="#">Trang Chủ</a></li>
				</ul>
			</div>
			<div class="sec contact">
				<h2>Contact Info</h2>
				<ul class="info">
					<li>
						<span><i class="far fa-envelope"></i></span>
						<span>678 ldsad sadas ,Đà nẵng <br>Việt Nam</span>
					</li>
					<li>
						<span><i class="far fa-envelope"></i></span>
						<p><a href="#">3218321821738</a><br><a href="#">432432343243</a></p>
					</li>
					<li>
						<span><i class="far fa-envelope"></i></span>
						<span>678 ldsad sadas <br> Đà nẵng <br>Việt Nam</span>
					</li>
				</ul>
			</div>
		</div>
	</footer>
	<div class="copyrightText">
		<p>Copyright @</p>
	</div>
	<script type="text/javascript" src="js/home.js"></script>
<script type="text/javascript">
    const drop_btn = document.querySelector('.drops-btn');
    const menu_wrapper = document.querySelector('.wrapper');
    drop_btn.onclick = (()=>{
      menu_wrapper.classList.toggle("show");
    });
 </script>
</body>
</html>