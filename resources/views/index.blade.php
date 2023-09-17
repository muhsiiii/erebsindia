@include('layouts.header')
<style> 
	.max-length-blog {
		overflow: hidden;
		display: -webkit-box;
		-webkit-line-clamp: 6;
		-webkit-box-orient: vertical;
	}
</style>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
	@include('layouts.navbar')
	<div class="splash-logo">
		<img class="fade-in-splash" style="width: 400px;" src="./assets/images/ERE_LOGO_BLACK (2).png" alt="">
		<!-- <img class="fade-in-splash santa" style="width: 400px;" src="./assets/images/santa.png" alt=""> -->
	</div>
	<section style="padding-bottom: 0px !important;" class="relative md:py-15 py-16 home-landing-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<!-- <i class="ri-whatsapp-line whatsapp-chat-redirect"></i> -->
					<div class="inner-col-home">
						<h1 class="home-main-haeding">Marketing partner for start-up & scale-up business Solutions</h1>
						<p>Provide your brand the results and exposure it deserves promptly,profitably, and persistently.</p>
						<div class="buttons-main-home mt-3">
							<a href="{{route('contactus')}}" class="btn home-main-buttons mr-4">Get In Touch</a>
							<a href="{{route('contactus')}}" class="btn home-main-buttons-blue">Careers</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mobile-none-home">
					<div class="inner-col-home">
						<img class="home-main-img" src="./assets/images/team-homr-removebg-preview.png" alt="home-main-img">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- home services section  -->
	<section class="relative md:py-20 py-10">
		<div class="container">
		</div>
		<div class="container md:mt-24 mt-16">
			<div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
				<div class="md:col-span-6">
					<div class="lg:mr-8">
						<div class="relative">
							<img src="assets/images/it/about.jpg" class="rounded-full shadow-lg dark:shadow-gray-800" alt="">
							<div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 mx-auto lg:w-72 w-56 lg:h-72 h-56 flex justify-center items-center bg-white dark:bg-slate-900 rounded-full shadow-lg dark:shadow-gray-800">
								<div class="text-center">
									<span class="text-indigo-600 text-2xl font-bold mb-0 block"><span class="counter-value text-6xl font-bold" data-target="2">1</span>+</span>
									<span class="font-semibold block mt-2">Years <br> Experience</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="md:col-span-6">
					<div class="lg:ml-8">
						<h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Fast & Effective</h6>
						<h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">We're a global
							stakeholder <br> relations and partnership <br> building consultancy.</h3>
						<p class="text-slate-400 max-w-xl mb-6">
							In today's globalized world, it has become imperative for you to leverage the power of technology. We provide our services in the areas of app development, software development, website development and digital marketing. Our services are of great value to you and are highly cost-effective.
						</p>
						<a href="{{route('portfolio')}}" class="btn btn-ere text-white rounded-md" style="border: none;"><i class="uil uil-notes"></i> Get Started</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="grid md:grid-cols-2 grid-cols-1 pb-8 items-center">
			<div>
				<h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Services</h6>
				<h3 class="md:text-3xl md:leading-normal text-2xl leading-normal font-semibold mb-4 md:mb-0">It was a very common<br> question that What IT Service<br> We Provide now !</h3>
			</div>
			<p class="text-slate-400 max-w-xl">Explore and learn more about everything from machine learning and global payments to scaling your team.</p>
		</div>
		<div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
			@foreach ($datas as $data)
			<div style="box-shadow: 0px 2px 8px 1px rgba(0, 0, 0, 0.25);" class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
				<div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
					<i class=""><img src="{{asset('/our_services_images/'.$data->image)}}" alt=""></i>
				</div>
				<div class="content mt-7">
					<a href="{{route('services')}}" class="title h5 text-lg font-medium hover:text-indigo-600">{{$data->service_name}}</a>
					<p class="text-slate-400 mt-3 max-length-blog">{{$data->description}}</p>
				</div>
			</div>
			@endforeach

		</div>
	</div>



	<!-- Awards Section and user testimonials  -->
	<section class="relative md:pb-24 pb-16">
		<div class="container lg:pt-24 pt-16">
			<div class="absolute inset-0 opacity-25 dark:opacity-50 bg-[url('../../assets/images/map.png')] bg-no-repeat bg-center"> </div>
			<div class="relative grid grid-cols-1 pb-8 text-center z-1">
				<h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-black dark:text-white">It's Time To Adhere Your Business Vision. Start Developing Software Today!</h3>
				<p class="text-slate-400 max-w-xl mx-auto">Once ERE has delivered the software project, we can assist clients in making sure their new software is properly supported, cost-effectively hosted, and hosted reliably.</p>
			</div>
			<div class="relative grid md:grid-cols-3 grid-cols-1 items-center mt-8 gap-[30px] z-1">
				<div class="counter-box text-center">
					<h1 class="lg:text-5xl text-4xl font-semibold mb-2 text-slate-400 dark:text-white"><span class="counter-value" data-target="150">100</span>+</h1>
					<h5 class="counter-head text-lg font-medium">Products Sell</h5>
				</div>
				<div class="counter-box text-center">
					<h1 class="lg:text-5xl text-4xl font-semibold mb-2 text-slate-400 dark:text-white"><span class="counter-value" data-target="5">2</span>+</h1>
					<h5 class="counter-head text-lg font-medium">Award Gained</h5>
				</div>
				<div class="counter-box text-center">
					<h1 class="lg:text-5xl text-4xl font-semibold mb-2 text-slate-400 dark:text-white"><span class="counter-value" data-target="2">0</span>+</h1>
					<h5 class="counter-head text-lg font-medium">Years Experience</h5>
				</div>
			</div>
		</div>
		<div class="container lg:mt-24 mt-16">
			<div class="grid grid-cols-1 pb-8 text-center">
				<h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Users Say</h3>
				<p class="text-slate-400 max-w-xl mx-auto"> </p>
			</div>
			<!--end grid-->
			<div class="grid grid-cols-1 mt-8">
				<div class="tiny-three-item">
					@foreach($testmonials as $testimonial)
					<div class="tiny-slide text-center">
						<div class="customer-testi">
							<div style="min-height: 275px;max-height:350px;" class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
								<i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
								<p class="text-slate-400 max-length-blog">{{$testimonial->comments}}</p>
								<ul class="list-none mb-0 text-amber-400 mt-3 icon-star">
									@for($i=1;$i<=$testimonial->rating;$i++)
									<li class="inline"><i class="mdi mdi-star"></i></li>
								@endfor
								</ul>
							</div>
							<div class="text-center mt-5">
								<!-- <img src="assets/images/client/03.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto" alt=""> -->
								<h6 class="mt-2 font-semibold">{{$testimonial->client}}</h6>
								<span class="text-slate-400 text-sm">{{$testimonial->project}}</span>
							</div>
						</div>
					</div>
					@endforeach
				
				</div>
			</div>
		</div>
		</div>
		</div>
		<div class="container md:mt-24 mt-16">
			<div class="grid md:grid-cols-12 grid-cols-1 items-center">
				<div class="md:col-span-6">
					<h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Blogs</h6>
					<h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Reads Our Latest <br>
						News & Blog</h3>
				</div>
				<div class="md:col-span-6">
					<p class="text-slate-400 max-w-xl">Start working with EREBS that can provide everything you need to
						generate awareness, drive traffic, connect.</p>
				</div>
			</div>
			<!--end grid-->
			<div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
				<div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
					<img src="assets/images/blog/pexels-olia-danilevich-4974920.jpg" alt="">
					<div class="content p-6">
						<a href="blog-detail.html" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Website development; prospects and the supposed to come upheaval</a>
						<p class="text-slate-400 mt-3">In today's world, all businesses, regardless of their size....</p>
						<div class="mt-4">
							<a href="blog-detail.html" class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
								More <i class="uil uil-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
					<img src="assets/images/blog/02.jpg" alt="">
					<div class="content p-6">
						<a href="blog-detail.html" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">How apps is changing
							the IT world</a>
						<p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
						<div class="mt-4">
							<a href="blog-detail.html" class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
								More <i class="uil uil-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
					<img src="assets/images/blog/03.jpg" alt="">
					<div class="content p-6">
						<a href="blog-detail.html" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Smartest Applications
							for Business</a>
						<p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
						<div class="mt-4">
							<a href="blog-detail.html" class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
								More <i class="uil uil-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="py-6 border-t border-b border-gray-100 dark:border-gray-700">
		<div class="container">
			<div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
				@foreach($portfolios as $portfolio)
				<div class="mx-auto py-4">
					<img src="/./portfolio_images/{{$portfolio->logo}}" class="h-6" alt="">
				</div>
				@endforeach

			</div>
		</div>
	</section>
	@extends('layouts.footer')



