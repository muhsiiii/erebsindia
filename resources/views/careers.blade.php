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
	<link href="assets/libs/js-datepicker/datepicker.min.css" rel="stylesheet">
	<link href="assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet">
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
	<!-- Start container -->
	<section class="relative table w-full py-36 lg:py-44 bg-[url('../../assets/images/job/job.jpg')] bg-no-repeat bg-center">
		<div class="absolute inset-0 bg-black opacity-80"></div>
		<div class="container">
			<div class="grid grid-cols-1 pb-8 text-center mt-10">
				<h3 class="mb-4 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Career</h3>
				<ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
					<li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="index.html">EREBS</a></li>
					<li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="#">Career</a></li>
					<li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Hiring</li>
				</ul>
			</div>
		</div>
	</section>
	<div class="relative">
		<div class="shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0 overflow-hidden text-white dark:text-slate-900">
			<svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
			</svg>
		</div>
	</div>
	<section class="relative md:py-24 py-16">
		<div class="container">
			<div class="grid lg:grid-cols-12 grid-cols-1" id="reserve-form">
				<div class="lg:col-start-2 lg:col-span-10">
					<div class="bg-white dark:bg-slate-900 border-0 shadow dark:shadow-gray-800 rounded p-3 -mt-[150px]">
						<form action="#">
							<div class="registration-form text-dark text-start">
								<div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
									<div class="filter-search-form relative filter-border">
										<i class="uil uil-briefcase-alt icons"></i>
										<input name="name" type="text" id="job-keyword" class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0" placeholder="Search your keaywords">
									</div>
									<div class="filter-search-form relative filter-border">
										<i class="uil uil-map-marker icons"></i>
										<select class="form-select" data-trigger name="choices-location" id="choices-location" aria-label="Default select example">
											<option value="AF">Calicut</option>
											<option value="AZ">thrissur</option>
										</select>
									</div>
									<div class="filter-search-form relative filter-border">
										<i class="uil uil-briefcase-alt icons"></i>
										<select class="form-select " data-trigger name="choices-type" id="choices-type" aria-label="Default select example">
											<option selected="" value="1">Full Time</option>
											<option value="2">Part Time</option>
											<option value="3">Freelancer</option>
											<option value="4">Remote Work</option>
											<option value="5">Office Work</option>
										</select>
									</div>
									<input type="submit" id="search" name="search" style="height: 60px;" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white searchbtn submit-btn w-100" value="Search">
								</div><!--end grid-->
							</div><!--end container-->
						</form>
					</div>
				</div><!--ed col-->
			</div>
		</div><!--end container-->

		<div class="container">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
					@foreach($datas as $data)
				<div class="rounded-md shadow dark:shadow-gray-800">
								<div class="flex items-center p-6 border-t border-gray-100 dark:border-gray-700">
								<img src="{{asset('/careers_images/'.$data->image)}}" class="h-12 w-12 shadow-md dark:shadow-gray-800 rounded-md p-2 bg-white dark:bg-slate-900" alt="null">
									<div class="ml-3">
									<h6 class="mb-0 font-semibold text-base">{{$data->post_name}}</h6>
							<span class="text-slate-400 text-sm">{{$data->no_vacancies}} vacancies</span>
									</div>
								</div>
								<div class="p-6">
								<a href="page-job-detail.html" class="title h5 text-lg font-semibold hover:text-indigo-600">{{$data->experience}} Year Experience</a>
									<p class="text-slate-400 mt-2"><i class="uil uil-clock text-indigo-600"></i> Posted 2 Days ago</p>
									<div class="flex justify-between items-center mt-4">
									<span class="bg-indigo-600/5 text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5">{{$data->work_type}}</span>
										<!-- <p class="text-slate-400"><i class="uil uil-usd-circle text-indigo-600"></i> $500 - $600/mo</p> -->
									</div> 
									<a href="{{$data->url}}" target="_blank" class="btn mt-4 bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Apply now</a>
								</div>		
					</div>
					@endforeach
				</div>
		</div>


		<!--end container-->
		<div class="container md:mt-24 mt-16">
			<div class="grid md:grid-cols-12 grid-cols-1 items-center">
				<div class="lg:col-span-5 md:col-span-6">
					<img src="assets/images/illustrator/envelope.svg" class="mx-auto d-block" alt="">
				</div>
				<div class="lg:col-span-7 md:col-span-6">
					<span class="bg-indigo-600/5 text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5">Mobile Apps</span>
					<h4 class="md:text-3xl text-2xl lg:leading-normal leading-normal font-medium my-4">Available for your <br> Smartphones</h4>
					<p class="text-slate-400 max-w-xl mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
					<div class="my-5">
						<a href=""><img src="assets/images/app/app.png" class="m-1 inline-block" alt=""></a>
						<a href=""><img src="assets/images/app/playstore.png" class="m-1 inline-block" alt=""></a>
					</div>
					<div class="inline-block">
						<div class="pt-4 flex items-center border-t border-gray-100 dark:border-gray-700">
							<i data-feather="smartphone" class="mr-2 text-indigo-600 h-10 w-10"></i>
							<div class="content">
								<h6 class="mb-0 text-base font-medium">Install app now on your cellphones</h6>
								<a href="" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Learn More <i class="uil uil-angle-right-b"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end container-->
	</section>
	<!-- footer  -->
	@extends('layouts.footer')
</body>

</html>