
@extends('main')
@section('title',' | Home')
@section('content')
    <div style="padding:0px" class="container-fluid">
		<!-- header -->
		<div class="tracking-header">
			<div class="twinkling"></div>
			<div class="earth-wrapper" style="min-height: 700px;padding: 100px 0px;">
				<!-- satellite -->
				<div class="satellite">
					<img src="{{ URL::asset('frontend/images/satellite.png') }}" alt="" style="width: 162px;">
					<div class="blink"></div>
				</div>
				<div id="container">
					<canvas id="sphere" width="400" height="400"></canvas>
					<div id="glow-shadows" class="earth"></div>
					<canvas id="flights" width="400" height="400"></canvas>
					<div id="locations">

					</div>
				</div>
				<div class="row damnx" style="text-align: center;">
					<div class="col-md-12 type-3">
						<a href="" class="btn btn-1">
							<span class="txt">Báo giá</span>
							<span class="round"><i class="fa fa-plus-circle"></i></span>
						  </a>
						  <a href="" class="btn btn-2">
							<span class="txt">HS Code</span>
							<span class="round"><i class="fa fa-search"></i></span>
						  </a>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>


	<!-- modal -->
    <div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Logistical</h4>
					</div>
					<div class="modal-body">
						<div class="out-info">
							<img src="{{ URL::asset('frontend/images/g1.png') }}" alt="" />
							<p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat
								vitae,
								eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellu</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //modal -->
		<!-- //banner-text end -->
		<!--about-->

		<div class="about" id="about">
			<div class="container">
				<h3 class="title"> ABOUT</h3>
				<div class="about-banner-grids ">
					<div class="col-md-4 left-of-about">
						<div class=" about-matter-left">
							<p style="font-size: 18px;font-weight: bold;">40'cloud - Nền tảng kết nối chủ hàng và forwarder
							</p>

						</div>
						<div class="stats-cout agileits w3layouts">
							<div class="col-md-6 col-sm-6 col-xs-6 agileits w3layouts stats-grid stats-grid-1">
								<div class=" agileits-w3layouts counter">2000</div>
								<div class="stat-info-w3ls">
									<h4 class="agileits w3layouts">Chủ hàng</h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 agileits w3layouts stats-grid stats-grid-2">
								<div class=" agileits-w3layouts counter">2000</div>
								<div class="stat-info-w3ls">
									<h4 class="agileits w3layouts ">Forwarder</h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 agileits w3layouts stats-grid stats-grid-2">
								<div class=" agileits-w3layouts counter">50000</div>
								<div class="stat-info-w3ls">
									<h4 class="agileits w3layouts ">Báo giá</h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 agileits w3layouts stats-grid stats-grid-2">
								<div class=" agileits-w3layouts counter">10000</div>
								<div class="stat-info-w3ls">
									<h4 class="agileits w3layouts ">Đơn hàng</h4>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 about-pic">

					</div>
					<div class="col-md-4 right-of-about">
						<div class=" stats-info-right">
							<div class="stats-info-text">
								<h4>5</h4>
								<h5>năm kinh nghiệm</h5>
							</div>
						</div>

						<div class="about-matter-right">
							<p>
								Platform hỗ trợ quản lý hậu cần, vận chuyển hàng hóa cho các đơn vị giao nhận vừa và nhỏ. Thúc đẩy tăng trưởng
								của toàn ngành hướng đến
								chất lượng và sự tối ưu.
							</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<!--//about-->
		<!--services-section-->

		<div class="services" id="services">
			<div style="margin-top: 30px;" class="container">
				<!-- <h3 class="title clr">Nền tảng đột phá , kết nối ngành xuất</h3> -->
				<div class="agileits-banner-grids text-center">
					<div class="banner-bottom-girds">
						<div class="col-md-3  col-sm-6 col-xs-6  agileits-banner-grid">
							<img class="img-responsive banner-icon-img" src="{{ URL::asset('frontend/images/4.png') }}" alt="">
							<!-- <span class="fa fa-truck banner-icon" aria-hidden="true"></span> -->
							<h4>Kinh tế chia sẻ</h4>
							<!-- <p>delectus reiciendis maiores alias consequatur aut.</p> -->
						</div>
						<div class="col-md-3  col-sm-6 col-xs-6 agileits-banner-grid">
							<img class="img-responsive banner-icon-img" src="{{ URL::asset('frontend/images/5.png') }}" alt="">
							<h4>Nền tảng công nghệ đột phá</h4>
							<!-- <p>delectus reiciendis maiores alias consequatur aut.</p> -->
						</div>
						<div class="col-md-3  col-sm-6 col-xs-6  agileits-banner-grid">
							<img class="img-responsive banner-icon-img" src="{{ URL::asset('frontend/images/3.png') }}" alt="">
							<h4>Dịch vụ khách hàng</h4>
							<!-- <p>delectus reiciendis maiores alias consequatur aut.</p> -->
						</div>
						<div class="col-md-3  col-sm-6 col-xs-6  clr1 agileits-banner-grid">
							<img class="img-responsive banner-icon-img" src="{{ URL::asset('frontend/images/2.png') }}" alt="">
							<h4>chất lượng hoàn hảo</h4>

						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>

			</div>
		</div>


    </div>

    <div class="testimonials" id="testimonials">
		<div class="container">

			<h3 class="title">testimonials</h3>

			<div class="carousel slide" data-ride="carousel" id="quote-carousel">
				<!-- Bottom Carousel Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="{{ URL::asset('frontend/images/t11.jpg') }}"
						 alt="">
					</li>
					<li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="{{ URL::asset('frontend/images/t22.jpg') }}" alt="">
					</li>
					<li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="{{ URL::asset('frontend/images/t33.jpg') }}" alt="">
					</li>
				</ol>

				<!-- Carousel Slides / Quotes -->
				<div class="carousel-inner text-center">

					<!-- Quote 1 -->
					<div class="item active">
						<blockquote>
							<div class="row">
								<div class=" left-matter">
									<p>Từ khi biết đến 40'cloud công ty chúng tôi tiết kiệm được rất nhiều thời gian cho việc check thông tin giá cả cho những lô hàng cần vận chuyển</p>
									<h5>--Vinalink</h5>
								</div>


							</div>
						</blockquote>
					</div>
					<!-- Quote 2 -->
					<div class="item">
						<blockquote>
							<div class="row">
								<div class=" left-matter">

									<p>40'cloud là 1 một nền tảng giao dịch tuyệt vời giúp những forwarder như chúng tôi gia tăng được khách hàng tập trung vào dịch vụ để phát triển</p>
									<h5>--Danko</h5>
								</div>
							</div>
						</blockquote>
					</div>
					<!-- Quote 3 -->
					<div class="item">
						<blockquote>
							<div class="row">
								<div class=" left-matter">

									<p>40'cloud  có nhiều tiện ích, giúp tôi theo dõi được hành trình hàng hóa, tra cứu những thông tin cần thiết liên quan đến việc xuất nhập khẩu một lô hàng</p>
									<h5>--Asiana</h5>
								</div>
							</div>
						</blockquote>
					</div>
				</div>

				<!-- Carousel Buttons Next/Prev
						<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><span class="fa fa-chevron-left"></span></a>
						<a data-slide="next" href="#quote-carousel" class="right carousel-control"><span class="fa fa-chevron-right"></span></a> -->
			</div>
		</div>
	</div>

	<!--//service-->

	<!-- gallery -->
	<div class="gallery" id="gallery">
		<h3 class="title"></h3>
		<div class="gallery-grids-top">
			<div class="gallery-grids">
				<div class="col-md-6 col-sm-6 gallery-grid-top">
					<div class="gallery-grid-top-img">
						<a class="example-image-link" href="{{ URL::asset('frontend/images/g1.png') }}" data-lightbox="example-set" data-title=""><img class="example-image"
							 src="{{ URL::asset('frontend/images/g1.png') }}" alt="" /></a>
					</div>
				</div>

				<div class="col-md-6 col-sm-6  gallery-right">
					<div class="gallery-right-grid">
						<div class="col-md-6 col-sm-6  gallery-grid-img">
							<a class="example-image-link" href="{{ URL::asset('frontend/images/g2.png') }}" data-lightbox="example-set" data-title=""><img class="example-image"
								 src="{{ URL::asset('frontend/images/g2.png') }}" alt=""></a>
						</div>
						<div class="col-md-6 col-sm-6 gallery-grid-img">
							<a class="example-image-link" href="{{ URL::asset('frontend/images/g3.png') }}" data-lightbox="example-set" data-title=""><img class="example-image"
								 src="{{ URL::asset('frontend/images/g3.png') }}" alt=""></a>
						</div>

					</div>
					<div class="gallery-right-grid gallery-right-top-grid">
						<div class="col-md-6 col-sm-6 gallery-grid-img">
							<a class="example-image-link" href="{{ URL::asset('frontend/images/g4.png') }}" data-lightbox="example-set" data-title=""><img class="example-image"
								 src="{{ URL::asset('frontend/images/g4.png') }}" alt=""></a>
						</div>
						<div class="col-md-6 col-sm-6 gallery-grid-img">
							<a class="example-image-link" href="{{ URL::asset('frontend/images/g5.png') }}" data-lightbox="example-set" data-title=""><img class="example-image"
								 src="{{ URL::asset('frontend/images/g5.png') }}" alt=""></a>
						</div>

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//gallery -->
	<!-- testimonials -->

	<!-- testimonials -->

	<!-- contact -->
	
	

    <div class="contact contact-lien-he" id="contact">
		<div class="container">
			<h3 class="title ">Liên hệ</h3>
			<form action="{{URL::to('/')}}" method="post">
				{{csrf_field()}}
				<div class="col-md-6  col-sm-6 contact-form">
					<div class=" form-right form-left">
						@if ($errors->has('name'))
							<label class='error-form'>{{ $errors->first('name') }}</label>
						@endif
					
                        <input
                            type="text"
                            name="name"
                            placeholder="Name"
							required=""
                            maxlength="255"
						>
					</div>
					<div class="form-right form-left">
						@if ($errors->has('email'))
							<label class='error-form'>{{ $errors->first('email') }}</label>
						@endif
                        <input
                            type="email"
                            name="email"
                            placeholder="Email"
							required=""
                            maxlength="255"
						  >
					</div>
					<div class="form-right ">
						@if ($errors->has('phone'))
							<label class='error-form'>{{ $errors->first('phone') }}</label>
						@endif
                        <input
                            class="phone"
                            type="text"
                            name="phone"
                            placeholder="Phone"
							maxlength="20"
							minlength="9"
						>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 msg-text">
				<textarea
						style="color:#fff;"
						name="message"
						placeholder="Message"
					>
				</textarea>
					<input type="submit" value="SUBMIT">
					<div class="clearfix"> </div>
				</div>
			</form>
            <div class="clearfix"> </div>

			<div class="contact-icons">
				<div class=" col-md-4 col-sm-5 footer_grid_left">
					<div class="icon_grid_left">
						<span class="fa fa-map-marker" aria-hidden="true"></span>
					</div>
					<h5 style="color: white;">Địa chỉ</h5>
					<p style="color: white;">3481 Melbournce, Beverly Hills,<span>South Birsbane 410.</span></p>
				</div>
				<div class=" col-md-4 col-sm-3 footer_grid_left">

					<div class="icon_grid_left">
						<span class="fa fa-volume-control-phone" aria-hidden="true"></span>
					</div>
					<h5 style="color: white;"> Số điện thoại</h5>
					<p style="color: white;"><span>+(010) 123 4565 35</span></p>
				</div>
				<div class=" col-md-4 col-sm-4  footer_grid_left">
					<div class="icon_grid_left">

						<span class="fa fa-envelope" aria-hidden="true"></span>
					</div>
					<h5 style="color: white;">Email</h5>
					<p style="color: white;">
						<span><a style="color: white;" href="mailto:info@example.com">info@example2.com</a></span></p>
				</div>
			</div>
		</div>
	</div>

	<script>
		<?php 
			if(isset($status) && $status ==0){
				?>
					alert('Gửi thành công');
				<?php
			}

			if(isset($status) && $status ==1){
				?>
					alert('Gửi thất bại');
				<?php
			}
		?>
	</script>

@endsection
