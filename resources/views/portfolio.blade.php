<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>ERE - Business Solutions Pvt Ltd</title>
    <meta name="version" content="1.5.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- favicon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/images/Group 1.png" />
    <!-- Css -->
    <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
    <!-- Main Css -->
    <link href="assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/icons.css" />
    <link rel="stylesheet" href="assets/css/tailwind.css" />
</head>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
    <style>
        .main-div-portfolio div.single-portfolio:nth-of-type(odd) {
            direction: rtl;
            text-align: left;
        }
    </style>
    @extends('layouts.navbar')
    <div class="splash-logo">
        <img class="fade-in-splash" style="width: 400px;" src="./assets/images/ERE_LOGO_BLACK (2).png" alt="">
        <!-- <img class="fade-in-splash santa" style="width: 400px;" src="./assets/images/santa.png" alt=""> -->
    </div>
    <!-- home services section  -->

    <section class="relative md:py-24 py-16">
        <div class="container md:mt-0 mt-16 main-div-portfolio">
            <h1 class="our-works-main-heading mt-3" style="color: rgb(215, 230, 227);">OUR WORKS</h1>
            @foreach ($datas as $data)
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px] mt-5 single-portfolio">
                <div class="md:col-span-6">
                    <div class="lg:mr-8">
                        <img src="{{ asset('/portfolio_images/' . $data->image) }}" alt="">
                    </div>
                </div>
                <div class="md:col-span-6">
                    <div class="lg:ml-8">
                        <!-- <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2"></h6> -->
                        <h3 class="md:text-3xl md:leading-normal text-2xl leading-normal font-semibold"><span style="color: rgb(28, 165, 80);">{{ $data->project_name }}</span></h3>
                        <small>{{ $data->campany_name }}</small>
                        <p class="text-slate-400 max-w-xl mb-6">{{ $data->description }}</p>
                        <a href="{{ $data->campany_url }}" target="_blank" class="btn btn-ere text-white rounded-md" style="border: none;"><i class="uil uil-globe"></i>WEBSITE</a>
                    </div>
                </div>
            </div>
            @endforeach


            <div class="row" style="margin-top: 80px;">
                <div class="col-12 mb-5">
                    <h1 class="portfolio-heading">ALREADY <span style="color: rgb(73, 167, 107);">WITH US</span></h1>
                </div>
                @foreach ($datas as $data)

                <div class="col-3">
                    <img style="height: 100px; width:100px; margin:auto;" src="./portfolio_images/{{$data->logo}}" alt=""><br>
                </div>
                @endforeach
            </div>



        </div>

    </section>

    @extends('layouts.footer')


</body>

</html>