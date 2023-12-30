@extends('frontend/front-layouts.front-app')
@section('title') Best Web Analytics Expert in Bangladesh - Mohammad Saiful Islam @endsection
@section('keyword') Mohammad Saiful Islam, Web Analytics Expert, Best Web Analytics Expert, Web Analytics Expert in Bangladesh, Digital Marketing and Web Developing Service in bangladesh @endsection
@section('description') Boost your business performance by using my expertise in web development and digital marketing, offering 13+ years of experience in web development and data driving business growth &amp; success. @endsection

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-light my-6 mt-0" id="home">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                <h3 class="text-primary mb-3">I'm</h3>
                <h2 class="display-3 mb-3">Mohammad Saiful Islam</h2>
                <h2 class="typed-text-output d-inline"></h2>
                <div class="typed-text d-none">
                    <h1>Passionate Full Stack Web Developer, 
                        Expert in Google Ads & Web Analytics, 
                        Transforming Businesses with Data-Driven Solutions,  
                        Digital Marketing Strategist Making,  
                        Organic SEO Expart
                    </h1>
                </div>
                <p>Are you ready to take your business to the next level? Do you want to increase your sales and profits while saving money on your ads? If yes, you are in the right place. I can boost your business performance by using my expertise in web development and digital marketing. Contact me today and let's get started.</p>
                <div class="d-flex align-items-center pt-5">
                    <a href="" class="btn btn-primary py-3 px-4 me-5" title="Hire Me" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Hire Me </a>
                    {{-- <button type="button" class="btn-play" data-bs-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button> --}}
                    {{-- <h5 class="ms-4 mb-0 d-none d-sm-block">Play Video</h5> --}}
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid" src="{{ asset('front-assets/img/Who-is-the-best-web-analytics-expert-in-Bangladesh.png') }}" alt="Mohammad Saiful Islam" title="Mohammad Saiful Islam">
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<!-- About Start -->
<div class="container-xxl py-6" id="about">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex align-items-center mb-5">
                    <div class="years flex-shrink-0 text-center me-4">
                        <h2 class="display-1 mb-0">13</h2>
                        <h5 class="mb-0">Years</h5>
                    </div>
                    <h3 class="lh-base mb-0">of work experience as web development and digital marketing services</h3>
                </div>
                <p class="mb-4">I'm a full stack web developer and digital marketing expert with a passion for creating and optimizing websites and web application. I can design and develop websites for various niches and industries, such as Real Estate, Health, Fashion, Education, Restaurant, News Portal, etc.</p>
                <p>My main goal is to help you save money on your advertising expenses by increasing your sales and profits and enhancing your business performance.I believe that if I can deliver results for you, you will reward me accordingly. I have expertise in Google, Facebook, and Instagram Marketing and converting "Followers" into loyal customers.</p>
                <p>I can also help you rank and market your website on various online platforms, such as google, social media, email, etc. I can use organic SEO and more to boost your website's visibility and traffic on search engines like Google or Bing. I can provide high-quality work within your budget and deadline. I can start working on your project right away.</p>
                <p>I also have a good team to manage big jobs. We collaborate to deliver excellence and efficiency in every project.</p>
                
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-3 mb-4">
                    <div class="col-sm-6">
                        <img class="img-fluid rounded" src="{{ asset('front-assets/img/Business-deal.png') }}" alt="Business Deal" title="Business Deal" loading="lazy">
                    </div>
                    <div class="col-sm-6">
                        <img class="img-fluid rounded" src="{{ asset('front-assets/img/Business-Grouth.png') }}" alt="Business Grouth" titile="Business Grouth" loading="lazy">
                    </div>
                </div>
                <div class="mb-3">
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Building Brand Awareness</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Building Customer Loyalty</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Engaging Customers</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Improve Your Conversion Rate</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>10X your Online Sales</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Marketing Consultancy</p>
                </div>
                {{-- <a class="btn btn-primary py-3 px-5 mt-3" href="" title="Download My CV" target="_blank">Download My CV</a> --}}
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="container-fluid bg-light my-5 py-6" id="service">
    <div class="container">
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h2 class="display-5 mb-0">My Services</h2>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a class="btn btn-primary py-3 px-5" href="" title="Hire Me" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Hire Me</a>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                    <div class="bg-icon flex-shrink-0 mb-3">
                        <i class="fa fa-code fa-2x text-dark"></i>
                    </div>
                    <div class="ms-sm-4">
                        <h4 class="mb-3">Web Design and Web Development</h4>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>PHP, Laravelm, MySql, MongoDB, VueJs, Jquery</p>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>Custom Website Design & Development </p>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>Wordpress, Woocommerce, Shopify</p>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>Bug Fixing & Maintenance</p>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>eCommerce Application Development</p>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>eCommerce Planing & Consultancy</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                    <div class="bg-icon flex-shrink-0 mb-3">
                        <i class="fas fa-chart-line fa-2x text-dark"></i>
                    </div>
                    <div class="ms-sm-4">
                        <h4 class="mb-3">Web Analytics & Server Side Tracking</h4>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>Google Analytics 4- Enhanced Ecommerce Tracking</p>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>GA4 Migrations & Google Tag Manager</p>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>Custom Event Conversion & Attribution Tracking</p>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>Serverside Tracking & Cross Domain Tracking</p>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>GA4/GTM Audits & Complete Data Analysis </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                    <div class="bg-icon flex-shrink-0 mb-3">
                        <i class="fab fa-google fa-2x text-dark"></i>
                    </div>
                    <div class="ms-sm-4">
                        <h4 class="mb-3">Google, Facebook, Instragram Ads</h4>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>Google, Facebook & Instragram Ads Management</p>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>Facebook Pixel Setup</p>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>Search/Display/Shopping Ad Setup & Management</p>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>Ads Dynamic Re-marketing Setup</p>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>Funnel Setup and Visualizations</p>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>Ads Account Audit and Optimization</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                    <div class="bg-icon flex-shrink-0 mb-3">
                        <i class="fas fa-search-location fa-2x text-dark"></i>
                    </div>
                    <div class="ms-sm-4">
                        <h4 class="mb-3">Organic SEO</h4>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>SEO Audits</p>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>Technical SEO</p>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>On-Page SEO</p>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>Off-Page SEO</p>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>Local & Youtube SEO</p>
                        <p class="mb-1"><i class="far fa-check-circle text-primary me-3"></i>Keywords Research & Competitor Analysis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Projects Start -->
<div class="container-fluid py-6 pt-5" id="project">
    <div class="container">
        <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h2 class="display-5 mb-0">My Works</h2>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a class="btn btn-primary py-3 px-5" href="{{ route('my-works') }}" title="View More">View More</a>
            </div>
        </div>
        
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('front-assets/portfolio/Development/bdhomeland.png') }}" alt="bdhomeland" title="bdhomeland" loading="lazy">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="{{ asset('front-assets/portfolio/Development/bdhomeland-2.png') }}" title="bdhomeland" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="http://bdhomeland.com" title="bdhomeland.com" target="_blank" rel="nofollow"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('front-assets/portfolio/Development/fragdeal.png') }}" alt="fragdeal" title="fragdeal" loading="lazy">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="{{ asset('front-assets/portfolio/Development/fragdeal-2.png') }}" title="fragdeal" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="https://fragdeal.com" title="fragdeal.com" target="_blank" rel="nofollow"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('front-assets/portfolio/Development/vortibd.png') }}" alt="vortibd" title="vortibd" loading="lazy">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="{{ asset('front-assets/portfolio/Development/vortibd-2.png') }}" title="vortibd" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="https://vortibd.com" title="vortibd.com" target="_blank" rel="nofollow"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('front-assets/portfolio/Google/google-ads.png') }}" alt="google ads" title="google ads" loading="lazy">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="{{ asset('front-assets/portfolio/Google/google-ads.png') }}" title="google-ads" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="#" title="google-ads.png" rel="nofollow"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('front-assets/portfolio/Google/google-ga4.png') }}" alt="google ga4" title="google ga4" loading="lazy">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="{{ asset('front-assets/portfolio/Google/google-ga4.png') }}"  title="google-ga4" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="#" title="google-ga4.png" rel="nofollow"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('front-assets/portfolio/Facebook/facebook-ads.png') }}" alt="facebook ads" title="facebook ads" loading="lazy">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="{{ asset('front-assets/portfolio/Facebook/facebook-ads.png') }}" title="facebook-ads" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="#" title="facebook-ads.png" rel="nofollow"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Projects End -->


<!-- Blog Start -->
<div class="container py-6 pb-5" id="team">
    <div class="container">
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h2 class="display-5 mb-0">Blog</h2>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a class="btn btn-primary py-3 px-5" href="{{ url('blog/all-post') }}" title="Read More Blog">Read More</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="#" title="What is the best for you google search ads or display  ads">
                <div class="single-blog">
                   <div class="thumb">
                      <img class="img-fluid" src="{{ asset('https://drive.google.com/uc?export=view&id=1uOvZORrAtELvFlHtDk60oom8WLrU-r1k') }}" alt="What is the best for you google search ads or display  ads" title="What is the best for you google search ads or display  ads" loading="lazy" width="100%">
                   </div>
                   <div class="blog-card-body">
                      <h5 class="h5">What is the best for you google search ads or display  ads</h5>
                      <p>Both are very important topics of google ads but they are used for different purposes and it is very important to decide which one to use at which stage of advertising.</p>
                   </div>
                </div>
                </a>
             </div>

             <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="#" title="How do I create a GMB and why is it so important for local SEO?">
                <div class="single-blog">
                   <div class="thumb">
                      <img class="img-fluid" src="{{ asset('https://drive.google.com/uc?export=view&id=1FYO5teqqNoAlTzVrsigPY68RiN_ckqsw') }}" alt="How do I create a GMB and why is it so important for local SEO" title="How do I create a GMB and why is it so important for local SEO" loading="lazy" width="100%">
                   </div>
                   <div class="blog-card-body">
                      <h5 class="h5">How do I create a GMB and why is it so important for local SEO?</h5>
                      <p>A Google my business account is essential for your organization, as it helps you grow your local business and rank higher on Google search, which boosts your sales. </p>
                   </div>
                </div>
                </a>
             </div>

             <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="#">
                <div class="single-blog" title="What to do about back and shoulder pain in digital workers">
                   <div class="thumb">
                      <img class="img-fluid" src="{{ asset('https://drive.google.com/uc?export=view&id=1KwPTyZHMHdVRoL5CcVs5T1FuiuyzrEAx') }}" alt="What to do about back and shoulder pain in digital workers" title="What to do about back and shoulder pain in digital workers" loading="lazy" width="100%">
                   </div>
                   <div class="blog-card-body">
                      <h5 class="h5">What to do about back and shoulder pain in digital workers</h5>
                      <p>Back pain, neck pain, and shoulder pain are all too common these days for those of us who regularly sit at desks and work on computers.So we should be aware of this.</p>
                   </div>
                </div>
                </a>
             </div>
        </div>
    </div>
</div>
<!-- Blog End -->


<!-- Testimonial Start -->
<div class="container-fluid bg-light py-5 my-5" id="testimonial">
    <div class="container-fluid py-5">
        <h2 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Testimonial</h2>
        <div class="row justify-content-center">
            <div class="col-lg-3 d-none d-lg-block">
                <div class="testimonial-left h-100">
                    <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src="{{ asset('front-assets/img/Shafiqure Rahman.png') }}" alt="Dr Shafiqure Rahman" title="Dr Shafiqure Rahman">
                    <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src="{{ asset('front-assets/img/Shopon.png') }}" alt="Shopon" title="Shopon">
                    <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src="{{ asset('front-assets/img/Shamim.JPG') }}" alt="Shamim" title="Shamim">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-5">
                            <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="{{ asset('front-assets/img/Shafiqure Rahman.png') }}" alt="Dr Shafiqure Rahman" title="Dr Shafiqure Rahman">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left text-primary"></i>
                            </div>
                        </div>
                        <p class="fs-5 fst-italic">I needed an app that could solve my specific problem. I found the perfect developer who built it for me and supported me all the way. He is amazing.</p>
                        <hr class="w-25 mx-auto">
                        <h5>Dr Shafiqure Rahman</h5>
                        <span>Vice President at Australian Academy of Business Leadership</span>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-5">
                            <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="{{ asset('front-assets/img/Shopon.png') }}" alt="Shopon" title="Shopon">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left text-primary"></i>
                            </div>
                        </div>
                        <p class="fs-5 fst-italic">The app he built for me was exactly what I wanted. He listened to my needs and delivered a great solution. He was always there to help me. He is awesome.</p>
                        <hr class="w-25 mx-auto">
                        <h5>T.H.Shopon</h5>
                        <span>Fragdeal Owner</span>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-5">
                            <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="{{ asset('front-assets/img/Shamim.JPG') }}" alt="Shamim" title="Shamim">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left text-primary"></i>
                            </div>
                        </div>
                        <p class="fs-5 fst-italic">He is not just a developer, he is a partner. He understood my vision and created an app that matched it. He provided excellent support and guidance. He is wonderful.</p>
                        <hr class="w-25 mx-auto">
                        <h5>Mohammad Shamim Ahammed</h5>
                        <span>Managing Director at Desh Universal Private Limited</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-none d-lg-block">
                <div class="testimonial-right h-100">
                    <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src="{{ asset('front-assets/img/Shafiqure Rahman.png') }}" alt="Dr Shafiqure Rahman" title="Dr Shafiqure Rahman">
                    <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src="{{ asset('front-assets/img/Shopon.png') }}" alt="Shopon" title="Shopon">
                    <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src="{{ asset('front-assets/img/Shamim.JPG') }}" alt="Shamim" title="Shamim">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Contact Start -->
<div class="container-xxl pb-5" id="contact">
    <div class="container py-5">
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h2 class="display-5 mb-0">Let's Work Together</h2>
            </div>
            <div class="col-lg-6 text-lg-end">
                
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <address>
                <p class="mb-2">My office:</p>
                <h3 class="h6 fw-bold">Mirpur-1,Dhaka-1216, Bngladesh</h3>
                <hr class="w-100">
                <p class="mb-2">Call me:</p>
                <h3 class="h6 fw-bold"><a href="https://api.whatsapp.com/send?phone=8801814957460" title="Mohammad Saiful Islam Phone Number & WhatsApp">+880 1814957460 <i class="fab fa-whatsapp text-success"></i></a></h3>
                <h3 class="h6 fw-bold"><a href="skype:shesherbd?chat" title="Mohammad Saiful Islam Skype User">shesherbd <i class="fab fa-skype text-primary"></i></a></h3>
                <hr class="w-100">
                <p class="mb-2">Mail me:</p>
                <h3 class="h6 fw-bold"><a href="mailto:webmaster@example.com" title="Mohammad Saiful Islam Email">info@analiticsaiful.com</a></h3>
                <hr class="w-100">
                </address>
                <p class="mb-2">Follow me:</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-primary me-2" href="https://github.com/saifulprog" title="Mohammad Saiful Islam GitHub Account" target="_blank"><i class="fab fa-github"></i></a>
                    <a class="btn btn-square btn-primary me-2" href="https://www.linkedin.com/in/php-laravel-full-stack-developer-and-web-analytics-expert" title="Mohammad Saiful Islam LinkedIn Account" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-primary me-2" href="https://www.facebook.com/saiful.WebDeveloper.and.WebAnalyst/" title="Mohammad Saiful Islam Facebook Account" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-instagram"></i></i></a>
                    <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-telegram-plane"></i></a>
                </div>
            </div>

            <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <h6 class="mb-4">If You Have Any Query and Hire Me, Please Feel Free Contact Me.</h6>
                <form action="{{ route('contact') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="txtName" class="form-control" id="name" placeholder="Your Name" required maxlength="99">
                                <label for="name">Your Name</label>
                            </div>

                            @if ($errors->has('txtName'))
                                <span class="help-block text-danger">
                                <strong>{{ $errors->first('txtName') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" name="txtEmail" class="form-control" id="email" placeholder="Your Email" required maxlength="69">
                                <label for="email">Your Email</label>
                            </div>

                            @if ($errors->has('txtEmail'))
                                <span class="help-block text-danger">
                                <strong>{{ $errors->first('txtEmail') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" name="txtSubject" class="form-control" id="subject" placeholder="Subject" required maxlength="255">
                                <label for="subject">Subject</label>
                            </div>

                            @if ($errors->has('txtSubject'))
                                <span class="help-block text-danger">
                                <strong>{{ $errors->first('txtSubject') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="txtMessage" placeholder="Leave a message here" id="message" required maxlength="255"></textarea>
                                <label for="message">Message</label>
                            </div>

                            @if ($errors->has('txtMessage'))
                                <span class="help-block text-danger">
                                <strong>{{ $errors->first('txtMessage') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-4"><input type="text" name="txtCpt1" class="form-control" value="{{ bin2hex(random_bytes(3)) }}" style="height: 55px;text-align:center;font-weight: bolder;" required readonly oncopy="return false"></div>
                                <div class="col-sm-4"><input type="text" name="txtCpt2" class="form-control" placeholder="Write CAPTCHA Code" style="height: 55px;" required autocomplete="off"></div>
                                <div class="col-sm-4 d-grid"><button class="btn btn-primary" type="submit"><i class="fas fa-paper-plane"></i> Send Message</button></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection