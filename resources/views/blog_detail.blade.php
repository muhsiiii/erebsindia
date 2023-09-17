<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>ERE -Business Solutions Pvt Ltd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="version" content="1.5.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- favicon -->
    <link rel="shortcut icon" href="/assets/images/Group 1.png" />
    <link href="/assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/icons.css" />
    <link rel="stylesheet" href="/assets/css/tailwind.css" />
</head>
<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
    @include('layouts.navbar')                      
  
    <div class="splash-logo">
        <img class="fade-in-splash" style="width: 400px;" src="/./assets/images/ERE_LOGO_BLACK (2).png" alt="">
    </div>
    <section class="relative table w-full py-32 lg:py-36 bg-[url('../../assets/images/blog/bg.jpg')] bg-center bg-no-repeat">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center mt-10">
                <h3 class="mb-3 text-3xl leading-normal font-medium text-white">Website development; prospects and
                    <br>the supposed to come upheaval
                </h3>
            </div>
        </div>
        <div class="absolute text-center z-10 bottom-5 right-0 left-0 mx-3">
            <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
                <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white">
                    <a href="{{route('home')}}">EREBS</a>
                </li>
                <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Blogs</li>
            </ul>
        </div>
    </section>
    <div class="relative">
        <div class="shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0 overflow-hidden z-1 text-white dark:text-slate-900">
            <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-8 md:col-span-6">
                    <div class="p-6 rounded-md shadow dark:shadow-gray-800">

                        <img style="width:100%;min-height:450px;max-height:450px;" src="{{ asset('/blog_images/' . $data->image) }}" class="rounded-md" alt="">
                        <div class="mt-6">
                            <p class="text-slate-400">{{$data->description}}</p>
                        </div>     
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
