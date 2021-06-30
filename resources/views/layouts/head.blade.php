<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('images/tab-logo.png')}}">

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/swiper.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Document Title
	============================================= -->
	<title>SopoTani Balian</title>

	<style>

		.revo-slider-emphasis-text {
			font-size: 58px;
			font-weight: 700;
			letter-spacing: 1px;
			font-family: 'Raleway', sans-serif;
			padding: 15px 20px;
			border-top: 2px solid #FFF;
			border-bottom: 2px solid #FFF;
		}

		.revo-slider-desc-text {
			font-size: 20px;
			font-family: 'Lato', sans-serif;
			width: 650px;
			text-align: center;
			line-height: 1.5;
		}

		.revo-slider-caps-text {
			font-size: 16px;
			font-weight: 400;
			letter-spacing: 3px;
			font-family: 'Raleway', sans-serif;
		}

		.tp-video-play-button { display: none !important; }

		.tp-caption { white-space: nowrap; }

        #top-search-input {
	float: right;
	margin: 33px 0 33px 15px;
	-webkit-transition: margin .4s ease;
	-o-transition: margin .4s ease;
	transition: margin .4s ease;
}

#top-search-input form {
	width: 160px;
	height: 34px;
	padding: 0;
	margin: 0;
}

#header.sticky-header #top-search-input { margin: 13px 0 13px 15px; }

@media (max-width: 991px) {

	#top-search-input {
		float: none;
		margin: 20px 0;
	}

	#top-search-input form {
		margin: 0 auto;
		width: 300px;
	}

}

.device-sm #top-search-input form { width: 100%; }
.circular--square {
  border-radius: 50%;
}

/** about section **/
.about {
     background-color: #fff;
     box-shadow: #ddd 0px 0px 13px 5px;
     margin: 90px 30px 20px 30px;     
}
 .about .about-box {
text-align: left;
float: right;
width: 100%;
max-width: 539px;
padding: 40px 0;
    
}



.about .about-box::after {
     content: "";
     height: 244px;
width: 187px;
bottom: 0;
left: 0;
background-repeat: no-repeat;
}
 .about .about-box h2 {

     font-weight: bold;
     line-height: 40px;
     font-size: 45px;
     text-transform:uppercase;
     display: inline-block;
     padding: 20px 30px;

 }
 .about .about-box p {
     font-size: 17px;
     line-height: 28px;
     color: #000;
     padding: 40px 0px;
}

 .about .about-box a {
     font-size: 16px;
border: #ccffe6 solid 1px;
background-color: #ccffe6;
color: #fff;
padding: 9px 0px;
max-width: 171px;
width: 100%;
display: inline-block;
text-align: center;
text-transform: uppercase;
border-radius: 30px;
 }


 .about .about-box a:hover{ 
     background-color: #ccffe6;
     border: #ccffe6 solid 1px;
    color: #fff;
 }
 .about .about-box_img figure {
     margin: 0;
}
 .about .about-box_img figure img {
    width: 100%;
}
.padding_rl {padding: 0;}
/** end about section **/


/** vegetable section **/
.vegetable {
     background-color: #fff;
     margin-top: 70px;
}

.vegetable_shop h3 {
font-size: 31px;
line-height: 35px;
color: #000;
font-weight: 500;
padding-bottom: 17px;
display: block;
}


.vegetable_shop p {

     font-size: 17px;
     line-height: 28px;
     color: #000;
}


.vegetable_img span {
    z-index: 999;
    display: flex;
    align-content: center;
    align-items: center;
    right: 0;
    top: 44%;
    background: #428713;
    padding: 19px 27px;
    border-radius: 88px;
    margin-right: -20px;
    position: absolute;
    color: #fff;
    font-size: 19px;
}

.margin_top span {
    z-index: 999;
    display: flex;
    align-content: center;
    align-items: center;
    right: 0;
    top: 27%;
    background: #428713;
    padding: 19px 25px;
    border-radius: 88px;
    margin-right: -20px;
    position: absolute;
    color: #fff;
    font-size: 19px;
}
.vegetable_img figure {margin: 0;}
.vegetable_img figure img {width: 100%}
.margin_top {
    margin-top: -90px;
}



/** end vegetable section **/



	</style>

</head>