<footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="py-[60px] px-0">
                    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                        <div class="lg:col-span-4 md:col-span-12">
                            <a href="{{route('home')}}" class="text-[22px] focus:outline-none">
                                <img src="assets/images/ERE_LOGO_WHITE 1 (1).png" alt="">
                            </a>
                            <p class="mt-6 text-gray-300">ERE Business Solution is an innovative software solution for businesses to gain global market</p>
                            <ul class="list-none mt-6">
                                <li class="inline"><a href="https://www.linkedin.com/company/erebs-india/mycompany/" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-linkedin" title="Linkedin"></i></a></li>
                                <li class="inline"><a href="#" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                <li class="inline"><a href="https://www.instagram.com/erebusinesssolutions/" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                                <li class="inline"><a href="https://twitter.com/ErebsI" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                                <li class="inline"><a href="mailto:erebsindia@gmail.com" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                            </ul>
                        </div>
                        <div class="lg:col-span-2 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Company</h5>
                            <ul class="list-none footer-list mt-6">
                                <li><a href="{{route('aboutus')}}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"> About us</a></li>

                                <li class="mt-[10px]"><a href="{{route('aboutus')}}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">Our Team</a></li>
                                <li class="mt-[10px]"><a href="{{route('careers')}}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"> Careers</a></li>

                                <li class="mt-[10px]\ "><a href="{{route('blog')}}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"> Blog</a></li>
                                <li class="mt-[10px]"><a href="{{route('contactus')}}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"> Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Our Services</h5>
                            <ul class="list-none footer-list mt-6">
                                <li><a href="services.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">Web Development</a></li>
                                <li class="mt-[10px]"><a href="{{route('services')}}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"> Mobile-App Development</a></li>
                                <li class="mt-[10px]"><a href="{{route('services')}}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"> Digital Marketing</a></li>
                                <li class="mt-[10px]"><a href="{{route('services')}}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"> Web Designing</a></li>
                                <li class="mt-[10px]"><a href="{{route('services')}}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"> UI/UX Designing</a></li>
                                <li class="mt-[10px]"><a href="{{route('services')}}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"> Content Creation</a></li>
                                <li class="mt-[10px]"><a href="{{route('services')}}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"> Graphic Designing </a></li>
                                <li class="mt-[10px]"><a href="{{route('services')}}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"> Software Solution </a></li>
                            </ul>
                        </div>
                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Get In Touch</h5>
                            <p class="mt-6">Sign up and receive the latest tips via email.</p>
                            <form>
                                <div class="grid grid-cols-1">
                                    <div class="foot-subscribe my-3">
                                        <label class="form-label">Write your email <span class="text-red-600">*</span></label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="mail" class="w-4 h-4 absolute top-3 left-4"></i>
                                            <input type="email" class="form-input bg-gray-800 border border-gray-800 text-gray-100 pl-12 focus:shadow-none" placeholder="Email" name="email" required="">
                                        </div>
                                    </div>
                                    <button type="submit" id="submitsubscribe" name="send" class="btn bg-indigo-600   text-white rounded-md" style="border: none;">Contact</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-[30px] px-0 border-t border-slate-800">
        <div class="container text-center">
            <div class="grid md:grid-cols-2 items-center">
                <div class="md:text-left text-center">
                    <p class="mb-0">
                        © Copyright
                        <a href="www.erebsindia.com" target="_blank" class="text-reset">ERE </a>
                        <script>
                            document.write(new Date().getFullYear())
                        </script> All Right Reserved
                    </p>
                </div>
                <ul class="list-none md:text-right text-center mt-6 md:mt-0">
                    <li class="inline"><a href=""><img src="assets/images/payments/american-ex.png" class="max-h-6 inline" title="American Express" alt=""></a></li>
                    <li class="inline"><a href=""><img src="assets/images/payments/discover.png" class="max-h-6 inline" title="Discover" alt=""></a></li>
                    <li class="inline"><a href=""><img src="assets/images/payments/master-card.png" class="max-h-6 inline" title="Master Card" alt=""></a></li>
                    <li class="inline"><a href=""><img src="assets/images/payments/paypal.png" class="max-h-6 inline" title="Paypal" alt=""></a></li>
                    <li class="inline"><a href=""><img src="assets/images/payments/visa.png" class="max-h-6 inline" title="Visa" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 right-5 h-9 w-9 text-center bg-indigo-600 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
<script src="/assets/libs/tiny-slider/min/tiny-slider.js"></script>
<script src="/assets/libs/tobii/js/tobii.min.js"></script>
<script src="/assets/libs/js-datepicker/datepicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="/assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="/assets/libs/feather-icons/feather.min.js"></script>
<script src="/assets/js/plugins.init.js"></script>
<script src="/assets/js/app.js"></script>