@extends("layouts.html")



@section("title", "Home Page | Html Theme onvesation")


@section("home")

<!-- Start Banner -->
<div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url({{ URL::to('/') }}/public/img/banner-img.png);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3>Trusted and<br>Professional Advisers</h3>
                                        <br>
                                        <h4><span class="theme_color">For your Business</span></h4>
                                        <br>
                                        <p>Showcase your Profile to the world using online CV builder and Get Hired Faster</p>
                                        <a class="contact_bt" href="about.html">About us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url({{ URL::to('/') }}/public/img/banner-img.png);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3>Trusted and<br>Professional Advisers</h3>
                                        <br>
                                        <h4><span class="theme_color">For your Business</span></h4>
                                        <br>
                                        <p>Showcase your Profile to the world using online CV builder and Get Hired Faster</p>
                                        <a class="contact_bt" href="about.html">About us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->
    
	<!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <div class="left">
						     <p class="section_count">01</p>
						   </div>
						   <div class="right">
						    <p class="small_tag">About us</p>
                            <h2><span class="theme_color">WE CAN</span> HELP YOUR business GROW</h2>
                            <p class="large">Get your Business in 4 easy steps</p>
						  </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->

    <!-- section -->
    <div class="section dark_bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 text_align_center padding_0">
                    <div class="full">
                        <img class="img-responsive" src="{{ URL::to('/') }}/public/img/img-2png.png" alt="#" />
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 white_fonts layout_padding padding_left_right">
                    <h3 class="small_heading">EVERYTHING<br>YOU NEED IN ONE SOLUTION</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
					The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, 
					content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as 
					their default model..</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
	
	<!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <div class="left">
						     <p class="section_count">02</p>
						   </div>
						   <div class="right">
						    <p class="small_tag">SERVICES</p>
                            <h2><span class="theme_color">How to provide</span> tools that help anyone give a voice to their ideas</h2>
                          </div>	
                        </div>
                    </div>
                </div>
            </div>
			<div class="row margin-top_30">
			
			   <div class="col-sm-6 col-md-4">
			     <div class="service_blog">
				    <div class="service_icons">
					   <img width="75" height="75" src="{{ URL::to('/') }}/public/img/icon-1.png" alt="#">
					</div>
					<div class="full">
					   <h4>DIGITAL marketing</h4>
					</div>
					<div class="full">
					  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
					</div>
				 </div>
			   </div>
			   
			   <div class="col-sm-6 col-md-4">
			     <div class="service_blog">
				    <div class="service_icons">
					   <img width="75" height="75" src="{{ URL::to('/') }}/public/img/icon-2.png" alt="#">
					</div>
					<div class="full">
					   <h4>DIGITAL marketing</h4>
					</div>
					<div class="full">
					  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
					</div>
				 </div>
			   </div>
			   
			   <div class="col-sm-6 col-md-4">
			     <div class="service_blog">
				    <div class="service_icons">
					   <img width="75" height="75" src="{{ URL::to('/') }}/public/img/icon-3.png" alt="#">
					</div>
					<div class="full">
					   <h4>DIGITAL marketing</h4>
					</div>
					<div class="full">
					  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
					</div>
				 </div>
			   </div>
			   
			   <div class="col-sm-6 col-md-4">
			     <div class="service_blog">
				    <div class="service_icons">
					   <img width="75" height="75" src="{{ URL::to('/') }}/public/img/icon-4.png" alt="#">
					</div>
					<div class="full">
					   <h4>DIGITAL marketing</h4>
					</div>
					<div class="full">
					  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
					</div>
				 </div>
			   </div>
			   
			   <div class="col-sm-6 col-md-4">
			     <div class="service_blog">
				    <div class="service_icons">
					   <img width="75" height="75" src="{{ URL::to('/') }}/public/img/icon-5.png" alt="#">
					</div>
					<div class="full">
					   <h4>DIGITAL marketing</h4>
					</div>
					<div class="full">
					  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
					</div>
				 </div>
			   </div>
			   
			   <div class="col-sm-6 col-md-4">
			     <div class="service_blog">
				    <div class="service_icons">
					   <img width="75" height="75" src="{{ URL::to('/') }}/public/img/icon-6.png" alt="#">
					</div>
					<div class="full">
					   <h4>DIGITAL marketing</h4>
					</div>
					<div class="full">
					  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
					</div>
				 </div>
			   </div>
			   
			   
			</div>
        </div>
    </div>
	<!-- end section -->
	
	<!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <div class="left">
						     <p class="section_count">03</p>
						   </div>
						   <div class="right">
						    <p class="small_tag">Portfolio</p>
                            <h2><span class="theme_color">CHOOSE A</span> PROFESSIONAL DESIGN</h2>
							<p class="large">Websites</p>
                          </div>	
                        </div>
                    </div>
                </div>
            </div>
			<div class="row margin-top_30">
                <div class="col-lg-12 margin-top_30">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/public/images/img1.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/public/images/img2.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/public/images/img3.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/public/images/img4.png" alt="#" />
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/public/images/img1.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/public/images/img2.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/public/images/img3.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/public/images/img4.png" alt="#" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

                <div class="col-lg-12">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their</p>
                </div>

                <div class="col-lg-12">
                    <div class="full center">
                        <a href="about.html" class="hvr-radial-out button-theme">See More ></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
	<!-- end section -->
	
	<!-- section -->
    <div class="section layout_padding dark_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left white_fonts">
						   <div class="left">
						     <p class="section_count">04</p>
						   </div>
						   <div class="right">
						    <h2>Create <span class="theme_color">PERSONALISED Business</h2>
							<p class="large">What we done</p>
                          </div>	
                        </div>
                    </div>
                </div>
            </div>
			<div class="row margin-top_30">
                <div class="col-lg-12 margin-top_30 white_fonts">
                    <p>ss normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in theirss normal distribution of letters, as opposed to using 'Content here, content here', making it look like re ed r</p>
                </div>
                <div class="col-lg-12">
                    <div class="full">
                        <a href="about.html" class="contact_bt">Read More ></a>
                    </div>
                </div>
            </div>
			<div class="row margin-top_30 counter_section">
			   <div class="col-sm-12 col-md-4">
	        <div class="counter margin-top_30">
      
      <h2 class="timer count-title count-number" data-to="23" data-speed="1500"></h2>
       <p class="count-text">NOMINATIONS</p>
    </div>
	        </div>
              <div class="col-sm-12 col-md-4">
               <div class="counter margin-top_30">
      
      <h2 class="timer count-title count-number" data-to="7" data-speed="1500"></h2>
      <p class="count-text">AWARDS</p>
    </div>
              </div>
              <div class="col-sm-12 col-md-4">
                  <div class="counter margin-top_30">
     
      <h2 class="timer count-title count-number" data-to="31" data-speed="1500"></h2>
      <p class="count-text">AGENCIES</p>
    </div></div>
			</div>
		
        </div>
    </div>
	<!-- end section -->

    <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <div class="left">
						     <p class="section_count">05</p>
						   </div>
						   <div class="right">
						    <p class="small_tag">Our Team</p>
                            <h2><span class="theme_color">We Have a Professional</span> Team of Business Analysts.</h2>
							</div>	
                        </div>
                    </div>
                </div>
            </div>
			<div class="row margin-top_30">
                <div class="col-lg-12 margin-top_30">
                    <div id="team_slider" class="carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
								
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="full">
										   <div class="full team_member_img text_align_center"> 
										      <img src="{{ URL::to('/') }}/public/img/img-7.png" alt="#" />
											 <div class="social_icon_team">
											    <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                               </ul>
                                             </div>											 
										   </div>
										   <div class="full text_align_center">
										     <h3>Jone due</h3>
										   </div>
										   <div class="full text_align_center">
										     <p>this a long established fact that a reader will be distracted by the readable content </p>
										   </div>
										</div>
                                    </div>
									
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="full">
										   <div class="full team_member_img text_align_center"> 
										      <img src="{{ URL::to('/') }}/public/img/img-8.png" alt="#" />
											 <div class="social_icon_team">
											    <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                               </ul>
                                             </div>											 
										   </div>
										   <div class="full text_align_center">
										     <h3>Jone due</h3>
										   </div>
										   <div class="full text_align_center">
										     <p>this a long established fact that a reader will be distracted by the readable content </p>
										   </div>
										</div>
                                    </div>
									
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="full">
										   <div class="full team_member_img text_align_center"> 
										      <img src="{{ URL::to('/') }}/public/img/img-9.png" alt="#" />
											 <div class="social_icon_team">
											    <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                               </ul>
                                             </div>											 
										   </div>
										   <div class="full text_align_center">
										     <h3>Jone due</h3>
										   </div>
										   <div class="full text_align_center">
										     <p>this a long established fact that a reader will be distracted by the readable content </p>
										   </div>
										</div>
                                    </div>
									
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
								
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="full">
										   <div class="full team_member_img text_align_center"> 
										      <img src="{{ URL::to('/') }}/public/img/img-7.png" alt="#" />
											 <div class="social_icon_team">
											    <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                               </ul>
                                             </div>											 
										   </div>
										   <div class="full text_align_center">
										     <h3>Jone due</h3>
										   </div>
										   <div class="full text_align_center">
										     <p>this a long established fact that a reader will be distracted by the readable content </p>
										   </div>
										</div>
                                    </div>
									
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="full">
										   <div class="full team_member_img text_align_center"> 
										      <img src="{{ URL::to('/') }}/public/img/img-8.png" alt="#" />
											 <div class="social_icon_team">
											    <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                               </ul>
                                             </div>											 
										   </div>
										   <div class="full text_align_center">
										     <h3>Jone due</h3>
										   </div>
										   <div class="full text_align_center">
										     <p>this a long established fact that a reader will be distracted by the readable content </p>
										   </div>
										</div>
                                    </div>
									
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="full">
										   <div class="full team_member_img text_align_center"> 
										      <img src="{{ URL::to('/') }}/public/img/img-9.png" alt="#" />
											 <div class="social_icon_team">
											    <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                               </ul>
                                             </div>											 
										   </div>
										   <div class="full text_align_center">
										     <h3>Jone due</h3>
										   </div>
										   <div class="full text_align_center">
										     <p>this a long established fact that a reader will be distracted by the readable content </p>
										   </div>
										</div>
                                    </div>
									
                                </div
                            </div>
                        </div>

                        <div class="bullets">
						  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#team_slider" data-slide-to="0" class="active"></li>
    <li data-target="#team_slider" data-slide-to="1"></li>
  </ul>
						</div>

                    </div>
                </div>

            </div>
        </div>
    </div>
	</div>
	<!-- end section -->


@endsection



@section("aboutus")
   @include("html.partials.about")
@endsection


@section("services")
    @include("html.partials.services",["datas"=>$names])
@endsection


@section("blog")

<!-- Start Banner -->
<div class="section inner_page_header">
	     <div class="container">
		    <div class="row">
              <div class="col-lg-12">
			     <div class="full">
				    <h3>Blog</h3>
				 </div>
			  </div>
			</div>
		 </div>
	  </div>
    <!-- end Banner -->
    
	<!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <div class="left">
						     <p class="section_count">01</p>
						   </div>
						   <div class="right">
						    <p class="small_tag">Blog</p>
                            <h2><span class="theme_color">WE CAN</span> HELP YOUR business GROW</h2>
                            <p class="large">Get your Business in 4 easy steps</p>
						  </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->

    <!-- section -->
    <div class="section dark_bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 text_align_center padding_0">
                    <div class="full">
                        <img class="img-responsive" src="{{ URL::to('/') }}/public/img/img-2png.png" alt="#" />
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 white_fonts layout_padding padding_left_right">
                    <h3 class="small_heading">EVERYTHING<br>YOU NEED IN ONE SOLUTION</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
					The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, 
					content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as 
					their default model..</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

	
	<!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <div class="left">
						     <p class="section_count">02</p>
						   </div>
						   <div class="right">
						    <p class="small_tag">Portfolio</p>
                            <h2><span class="theme_color">CHOOSE A</span> PROFESSIONAL DESIGN</h2>
							<p class="large">Websites</p>
                          </div>	
                        </div>
                    </div>
                </div>
            </div>
			<div class="row margin-top_30">
                <div class="col-lg-12 margin-top_30">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/public/images/img1.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/public/images/img2.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/public/images/img3.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/public/images/img4.png" alt="#" />
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/public/images/img1.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/public/images/img2.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/public/images/img3.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="{{ URL::to('/') }}/public/images/img4.png" alt="#" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

                <div class="col-lg-12">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their</p>
                </div>

                <div class="col-lg-12">
                    <div class="full center">
                        <a href="about.html" class="hvr-radial-out button-theme">See More ></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
	<!-- end section -->


@endsection



@section("contactus")

<!-- Start Banner -->
<div class="section inner_page_header">
	     <div class="container">
		    <div class="row">
              <div class="col-lg-12">
			     <div class="full">
				    <h3>Contact</h3>
				 </div>
			  </div>
			</div>
		 </div>
	  </div>
    <!-- end Banner -->
	
	<!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <div class="left">
						     <p class="section_count">01</p>
						   </div>
						   <div class="right">
						    <p class="small_tag">Contact</p>
                            <h2><span class="theme_color">How to provide</span> tools that help anyone give a voice to their ideas</h2>
                          </div>	
                        </div>
                    </div>
                </div>
            </div>	
			<div class="row margin-top_30">
				
				<div class="col-lg-7 col-sm-7 col-xs-12 margin-top_30">
				  <div class="contact-block">
					<form id="contactForm">
					  <div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
								<div class="help-block with-errors"></div>
							</div>                                 
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" placeholder="Your number" id="number" class="form-control" name="number" required data-error="Please enter your number">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group"> 
								<textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="submit-button text-center">
								<button class="btn btn-common" id="submit" type="submit">Send Message</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div> 
								<div class="clearfix"></div> 
							</div>
						</div>
					  </div>            
					</form>
				  </div>
				</div>


				<div class="col-lg-5 col-sm-5 col-xs-12 margin-top_30">
					<div class="left-contact">
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-location-arrow" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Address</h4>
								<p>Fleming 196 Woodside Circle Mobile, FL 36602</p>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Email</h4>
								<a href="#">demoinfo@gmail.com</a><br>
								<a href="#">demoinfo@gmail.com</a>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Phone Number</h4>
								<a href="#">12345 67890</a><br>
								<a href="#">12345 67890</a>
							</div>
						</div>
					</div>
				</div>


			</div>
        </div>
    </div>
	<!-- end section -->


@endsection