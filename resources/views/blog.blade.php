<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>ERE -Business Solutions Pvt Ltd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="version" content="1.5.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="/assets/images/Group 1.png" />
    <!-- Css -->
    <link href="/assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/icons.css" />
    <link rel="stylesheet" href="/assets/css/tailwind.css" />
</head>
<style>
    .max-length-blog {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 6;
        -webkit-box-orient: vertical;
    }
</style>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">

    @extends('layouts.navbar')
    <div class="splash-logo">
        <img class="fade-in-splash" style="width: 400px;" src="./assets/images/ERE_LOGO_BLACK (2).png" alt="">
    </div>
    <section class="relative table w-full py-32 lg:py-36 bg-[url('../../assets/images/blog/bg.jpg')] bg-center bg-no-repeat">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center mt-10">
                <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Blogs & News
                </h3>
            </div>
        </div>
        <div class="absolute text-center z-10 bottom-5 right-0 left-0 mx-3">
            <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
                <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white">
                    <a href="index.html">EREBS</a>
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
            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
                @foreach ($datas as $data)
                <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                    <img style="width:100%;min-height:250px;max-height:250px;" src="{{ asset('/blog_images/' . $data->image) }}" alt="">
                    <div class="content p-6">
                        <a href="blog-detail.html" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">{{ $data->subject }}</a>

                        <p class="text-slate-400 mt-3 max-length-blog">{{ $data->description }}</p>

                        <div class="mt-4">
                            <a href="{{route('blogdetail',$data->id)}}" class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                                More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
                <div class="md:col-span-12 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="inline-flex items-center -space-x-px">
                            <li>
                                <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-l-lg hover:text-white border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                                    <i class="uil uil-angle-left text-[20px]"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">1</a>
                            </li>
                            <li>
                                <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page" class="z-10 w-[40px] h-[40px] inline-flex justify-center items-center text-white bg-indigo-600 border border-indigo-600">3</a>
                            </li>
                            <li>
                                <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">4</a>
                            </li>
                            <li>
                                <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">5</a>
                            </li>
                            <li>
                                <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-r-lg hover:text-white border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                                    <i class="uil uil-angle-right text-[20px]"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </section>
    @extends('layouts.footer')
</body>
</html>