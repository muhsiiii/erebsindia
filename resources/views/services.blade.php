<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth" dir="ltr">

<head>
	<meta charset="UTF-8" />
	<title>ERE -Business Solutions Pvt Ltd</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="version" content="1.5.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/images/Group 1.png" />
	<!-- Css -->
	<link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
	<link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
	<!-- Main Css -->
	<link href="assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/css/icons.css" />
	<link rel="stylesheet" href="assets/css/tailwind.css" />
</head> 

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
	<!-- Start Navbar -->
	@extends('layouts.navbar')
	<!--end header-->
	<div class="splash-logo">
		<img class="fade-in-splash" style="width: 400px;" src="./assets/images/ERE_LOGO_BLACK (2).png" alt="">
	</div>
	<!-- Start Hero -->
	<section class="relative table w-full py-36 lg:py-44 bg-[url('../../assets/images/services.jpg')] bg-no-repeat bg-center">
		<div class="absolute inset-0 bg-black opacity-75"></div>
		<div class="container">
			<div class="grid grid-cols-1 pb-8 text-center mt-10">
				<h5 class="text-white/50 text-lg font-medium">What We Offer ?</h5>
				<h3 class="mt-2 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Our Services</h3>
			</div><!--end grid-->
		</div><!--end container-->
		<div class="absolute text-center z-10 bottom-5 right-0 left-0 mx-3">
			<ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
				<li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="index.html">EREBS</a></li>
				<li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Services</li>
			</ul>
		</div>
	</section><!--end section-->
	<div class="relative">
		<div class="shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0 overflow-hidden z-1 text-white dark:text-slate-900">
			<svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
			</svg>
		</div>
	</div>
	<!-- Start Section-->
	<section class="relative md:py-24 py-16">

		<div class="container">
			<div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
				
				@foreach($datas as $data)
				<div class="p-6 shadow-xl shadow-gray-100 dark:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
			<div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
			<i class=""><img src="{{asset('/our_services_images/'.$data->image)}}" alt=""></i>
			</div>
			<div class="content mt-7">
			<a href="services.html" class="title h5 text-lg font-medium hover:text-indigo-600">{{$data->service_name}}</a>
			<p class="text-slate-400 mt-3 max-length-blog">{{$data->description}}</p>
			</div>
			</div>


				@endforeach

			</div><!--end grid-->
		</div>
		<!--end container-->
		<div class="container md:mt-24 mt-16">
			<div class="grid grid-cols-1 pb-8 items-end">
				<h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Latest Projects & Works</h3>
				<p class="text-slate-400 max-w-xl">Now Lets Explore Our Latest Project and Works</p>
			</div><!--end grid-->
		</div>
		<div class="container-fluid relative mt-8">
			<div class="grid grid-cols-1 mt-8">
				<div class="tiny-six-item">
					@foreach($works as $work)
					<div class="tiny-slide">
						<div class="group relative block overflow-hidden rounded-md transition-all duration-500 mx-2">
							<a href="{{asset('/projets_works_images/'.$work->image)}}" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
								<img src="{{asset('/projets_works_images/'.$work->image)}}" class="" alt="">
							</a>
							<div class="absolute -bottom-52 group-hover:bottom-2 right-2 left-2 transition-all duration-500 bg-white dark:bg-slate-900 p-4 rounded shadow dark:shadow-gray-800">
								<a href="portfolio-detail-two.html" class="hover:text-indigo-600 text-lg transition duration-500 font-medium">{{$work->project_name}}</a>
								<h6 class="text-slate-400">{{$work->description}}</h6>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!--end container-->

	</section>
	@extends('layouts.footer')

</body>

</html>