<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth" dir="ltr">

<head>
	<meta charset="UTF-8" />
	<title>ERE - Business Solutions Pvt Ltd</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="Tailwind CSS Saas & Software Landing Page Template" />
	<meta name="version" content="1.5.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- favicon -->
	<link rel="shortcut icon" href="/assets/images/Group 1.png" />
	<!-- Css -->
	<link href="/assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
	<!-- Main Css -->
	<link href="/assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" href="/assets/css/icons.css" />
	<link rel="stylesheet" href="/assets/css/tailwind.css" />
	<link href="/https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
	<!-- Start Navbar -->
	<div class="splash-logo">
		<img class="fade-in-splash" style="width: 400px;" src="./assets/images/ERE_LOGO_BLACK (2).png" alt="">
		<!-- <img class="fade-in-splash santa" style="width: 400px;" src="./assets/images/santa.png" alt=""> -->
	</div>
	@extends('layouts.navbar')
	<!-- Start Home -->
	<section class="relative md:py-56 py-44 bg-[url('../../assets/images/photography/photographer.jpg')] jarallax" data-jarallax data-speed="0.5" id="aboutme">
		<div class="absolute inset-0 h-full w-full bg-gradient-to-t to-transparent via-white/80 dark:via-slate-900/80 from-white dark:from-slate-900"></div>
		<div class="absolute text-center p-6 bottom-0 left-0 right-0">
			<h3 class="md:text-3xl md:leading-normal text-2xl leading-normal font-bold">Gallery</h3>
			@if(session()->has('message')) <h3 class="alert-success">{{session()->get('message')}}</h3> @endif
		</div>
	</section>
	<!--end section-->
	<section class="relative md:py-24 py-16 gallery-page">
		<div class="container">
			<div class="grid grid-cols-1 items-center gap-[30px]">
				<div class="filters-group-wrap text-center">
					<div class="filters-group">
						<ul class="mb-0 list-none container-filter-border-bottom filter-options">
							<li class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-slate-400 transition duration-500 active" data-group="all">All</li>
							<li class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-slate-400 transition duration-500" data-group="branding">Branding</li>
							<li class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-slate-400 transition duration-500" data-group="days">Special Days</li>
							<li class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-slate-400 transition duration-500" data-group="sparks">Sparks Of ERE</li>
							<li class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-slate-400 transition duration-500" data-group="hiring">Hiring</li>
							<li class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-slate-400 transition duration-500" data-group="Teams">Our Teams</li>
						</ul>
					</div>
				</div>
			</div>



			<div id="grid" class="md:flex justify-center mx-auto mt-4">
				@foreach ($gallery as $galeries)
				<div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='{{$galeries->type}}'>
					<div class="group relative block overflow-hidden rounded-md transition-all duration-500">
						<img src="{{asset('/gallery_images/'.$galeries->image)}}" class="" alt="">
						{{-- <input type="hidden" name="type" value="{{$galeries->type}}"> --}}
						<div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 duration-500">
							<a href="{{asset('/gallery_images/'.$galeries->image)}}" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><img class="ere-icon-hover" src="./assets/images/hover-ere-img.png" alt=""></a>
						</div>
					</div>
				</div>
				@endforeach
			</div>

		</div>
		<!--end container-->
	</section>
	<!-- Footer Start -->
	@extends('layouts.footer')

</body>

</html>