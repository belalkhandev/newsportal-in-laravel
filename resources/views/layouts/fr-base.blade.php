<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Laravel times such is newspaper & magazine types of theme.">
    <!-- site title here -->
    <title>Laravel Times</title>
    <!-- css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/fr/css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('assets/fr/plugins/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fr/plugins/owl-carousel/owl.carousel.min.css') }}">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|PT+Serif:400,400i,700,700i&display=swap" rel="stylesheet">
    <!-- main stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/fr/css/style.css') }}">
    <!-- custom stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/fr/css/custom.css') }}">
</head>
<body>
    <!-- header area -->
    <header id="header" class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="header-top-item">
                    <i class="far fa-clock"></i>
                    <span>Last Updated 1min ago.....</span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="container">
                <div class="logo text-center">
                    <a href=""><img src="assets/fr/img/logo.png" alt=""></a>
                </div>
                <div class="header-timebox text-center">
                    <p>
                        <span class="timebox-item">Friday</span>
                        <span class="timebox-item">April 17, 2020</span>
                        <span class="timebox-item">Shaaban 24, 1441</span>
                        <span class="timebox-item">Boishakh 4, 1427</span>
                        <span class="timebox-item">Last Updated 5min ago</span>
                    </p>
                </div>
            </div>
        </div>
    </header>

    <!-- navigation area -->
    <nav id="navigation" class="navigation-area">
        <div class="container">
            <div class="navigation">
                <ul class="main-nav">
                    <li><a href="">Home</a></li>
                    <li><a href="">International</a></li>
                    <li><a href="">Sports</a></li>
                    <li><a href="">Opinion</a></li>
                    <li><a href="">Entertainment</a></li>
                    <li><a href="">Lifestyle</a></li>
                    <li><a href="">Business</a></li>
                    <li><a href="">Islam</a></li>
                    <li><a href="">Others</a></li>
                </ul>
                <div class="navigation-widget">
                    <span><i class="fas fa-search"></i></span>
                    <span><i class="fas fa-bars"></i></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- main section area -->
    <main id="main-content-area">
        <!-- top news area -->
        <section class="top-news-area">
            <div class="container">
                <div class="top-newses">
                    <div class="top-news">
                        <a href="#">
                            <div class="top-news-img">
                                <img src="https://www.jugantor.com/assets/news_photos/2020/04/30/image-303197-1588263959.jpg" alt="">
                            </div>
                            <div class="top-news-title">
                                <h3>দেশে চিকিৎসকসহ ৮ শতাধিক স্বাস্থ্যকর্মী করোনায় আক্রান্ত</h3>    
                            </div>
                        </a>
                    </div>
                    <div class="top-news">
                        <a href="#">
                            <div class="top-news-img">
                                <img src="https://paloimages.prothom-alo.com/contents/cache/images/320x224x1/uploads/media/2020/03/08/6e4fd7b8ce143be41513cb001db3e9e8-5e651067b3bf1.jpg" alt="">
                            </div>
                            <div class="top-news-title">
                                <h3>করোনা সন্দেহভাজন রোগীদের ভর্তির বিষয়ে নির্দেশনা</h3>    
                            </div>
                        </a>
                    </div>
                    <div class="top-news">
                        <a href="#">
                            <div class="top-news-img">
                                <img src="https://paloimages.prothom-alo.com/contents/cache/images/640x359x1/uploads/media/2020/04/30/66f9f717fcb1733e4c7fd3b5dbf39f0e-5eaaa9709931d.jpg" alt="">
                            </div>
                            <div class="top-news-title">
                                <h3>করোনার চিকিৎসায় আশার আলো দেখাচ্ছে পরীক্ষামূলক ওষুধ রেমডেসিভির</h3>    
                            </div>
                        </a>
                    </div>
                    <div class="top-news">
                        <a href="#">
                            <div class="top-news-img">
                                <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                            </div>
                            <div class="top-news-title">
                                <h3>করোনা সন্দেহ বা আক্রান্ত হলে</h3>    
                            </div>
                        </a>
                    </div>
                    <div class="top-news">
                        <a href="#">
                            <div class="top-news-img">
                                <img src="https://paloimages.prothom-alo.com/contents/cache/images/640x358x1/uploads/media/2020/04/30/dc02ba60b82ebe2befa35222fc581585-5eaadc05285ba.jpg" alt="">
                            </div>
                            <div class="top-news-title">
                                <h3>বেনাপোল দিয়ে আমদানি-রপ্তানি শুরু</h3>    
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- features news area -->
        <section class="featured-news-area">
            <div class="container">
                <div class="featured-news owl-carousel" id="featureNewsCarousel">
                    <div class="featured-news-item">
                        <a href="#">
                            <div class="feature-new-content">
                                <div class="featured-news-img">
                                    <img src="https://www.jugantor.com/assets/news_photos/2020/04/30/image-303199-1588265362.jpg" alt="">
                                </div>
                                <div class="featured-news-title">
                                    <h3>পেলের বন্ধু কিশোরগঞ্জের কিংবদন্তি ফুটবলার চুনি গোস্বামী আর নেই</h3>
                                    <p>ভারতের সর্বকালের সেরা ক্রীড়াবিদ’, ভারত জাতীয় ফুটবল দলের সাবেক অধিনায়ক চুনি গোস্বামী আর নেই। তিনি কিশোরগঞ্জ সদর উপজেলার যশোদল ইউনিয়নের গোঁসাই পাড়া গ্রামের অধিবাসী ছিলেন।</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="featured-news-item">
                        <a href="#">
                            <div class="feature-new-content">
                                <div class="featured-news-img">
                                    <img src="https://www.jugantor.com/assets/news_photos/2020/04/30/image-303205-1588267161.jpg" alt="">
                                </div>
                                <div class="featured-news-title">
                                    <h3>স্বাস্থ্য বিজ্ঞানে রোজার তাৎপর্য ও উপকারিতা</h3>
                                    <p>রমজানের রোজা ধর্মীয় দৃষ্টিকোণ থেকে যেমন উত্তম, তেমন শারীরিক সুস্থতার জন্য কার্যকরী একটি ব্যবস্থাপনা। গবেষণায় দেখা গেছে, যারা সাহরি এবং ইফতারে পরিমিত খাবার খান।</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="featured-news-item">
                        <a href="#">
                            <div class="feature-new-content">
                                <div class="featured-news-img">
                                    <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                </div>
                                <div class="featured-news-title">
                                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, suscipit!</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, dignissimos.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="featured-news-item">
                        <a href="#">
                            <div class="feature-new-content">
                                <div class="featured-news-img">
                                    <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                </div>
                                <div class="featured-news-title">
                                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, suscipit!</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, dignissimos.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="featured-news-item">
                        <a href="#">
                            <div class="feature-new-content">
                                <div class="featured-news-img">
                                    <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                </div>
                                <div class="featured-news-title">
                                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, suscipit!</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, dignissimos.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- categories news area -->
        <section class="categories-news-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- section-title -->
                        <div class="section-title-area">
                            <div class="section-title">
                                <a href="">
                                    <h3 class="title">International</h3>
                                </a>
                            </div>
                            <div class="section-action-nav">
                                <ul>
                                    <li><a href="">All</a></li>
                                    <li><a href="">Sub Category 1 </a></li>
                                    <li><a href="">Sub Category 2 </a></li>
                                    <li><a href="">Sub Category 3 </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="categories-news">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="category-top-news">
                                <a href="#">
                                    <div class="category-top-news-content">
                                        <div class="category-top-news-img">
                                            <img src="https://paloimages.prothom-alo.com/contents/cache/images/640x357x1/uploads/media/2020/04/30/ec4b3b6f3b9e37e340c9d7450cce4b30-5eaa62a1ad542.jpg" alt="" style="width: 100%;">
                                        </div>
                                        <div class="category-top-news-text">
                                            <div class="category-top-news-title">
                                                <h3>সেপ্টেম্বরে আসতে পারে করোনার টিকা</h3>
                                            </div>
                                            <div class="category-top-news-description">
                                                <p>করোনাভাইরাসের ভ্যাকসিন আবিষ্কারের চেষ্টা করছেন সারা বিশ্বের বিজ্ঞানীরা। কে আগে তৈরি করবেন এই প্রতিষেধক, চলছে প্রতিযোগিতা। কয়েকটি দেশে ক্লিনিক্যাল ট্রায়ালও শুরু হয়ে গেছে। বিজ্ঞানীরা বলছেন, তাঁরা খুবই আশাবাদী, আগামী সেপ্টেম্বরে বাজারে আসতে পারে কোভিড-১৯ ভ্যাকসিন।</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="category-newses">
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="https://www.jugantor.com/assets/news_photos/2020/04/25/image-301585-1587813742.jpg" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>ভারত-পাকিস্তানে লকডাউনের বিধিনিষেধ শিথিল</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="https://www.jugantor.com/assets/news_photos/2020/04/27/image-302222-1588000728.jpg" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>সীমান্তের পাকিস্তানি অংশে সন্ত্রাসীদের লঞ্চ-প্যাড গুঁড়িয়ে দিল ভারত</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="https://www.jugantor.com/assets/news_photos/2020/04/28/image-302534-1588086462.jpg" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>বিশ্বে সামরিক ব্যয়ে তৃতীয় ভারত, দশের মধ্যে নেই পাকিস্তান</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="https://www.jugantor.com/assets/news_photos/2020/04/30/image-303131-1588249470.jpg" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>পাকিস্তানে ২৪ ঘণ্টায় সর্বোচ্চ আক্রান্তের রেকর্ড</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="https://www.jugantor.com/assets/news_photos/2020/04/25/image-301585-1587813742.jpg" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>ভারত-পাকিস্তানে লকডাউনের বিধিনিষেধ শিথিল</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="https://www.jugantor.com/assets/news_photos/2020/04/27/image-302222-1588000728.jpg" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>সীমান্তের পাকিস্তানি অংশে সন্ত্রাসীদের লঞ্চ-প্যাড গুঁড়িয়ে দিল ভারত</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="https://www.jugantor.com/assets/news_photos/2020/04/28/image-302534-1588086462.jpg" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>বিশ্বে সামরিক ব্যয়ে তৃতীয় ভারত, দশের মধ্যে নেই পাকিস্তান</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="https://www.jugantor.com/assets/news_photos/2020/04/30/image-303131-1588249470.jpg" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>পাকিস্তানে ২৪ ঘণ্টায় সর্বোচ্চ আক্রান্তের রেকর্ড</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- categories news area -->
        <section class="categories-news-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- section-title -->
                        <div class="section-title-area">
                            <div class="section-title">
                                <a href="">
                                    <h3 class="title">Lifestyle</h3>
                                </a>
                            </div>
                            <div class="section-action-nav">
                                <ul>
                                    <li><a href="">All</a></li>
                                    <li><a href="">Sub Category 1 </a></li>
                                    <li><a href="">Sub Category 2 </a></li>
                                    <li><a href="">Sub Category 3 </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="categories-news">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="category-top-news">
                                <a href="#">
                                    <div class="category-top-news-content">
                                        <div class="category-top-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="" style="width: 100%;">
                                        </div>
                                        <div class="category-top-news-text">
                                            <div class="category-top-news-title">
                                                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h3>
                                            </div>
                                            <div class="category-top-news-description">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure velit aliquam inventore laboriosam.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="category-newses">
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- categories news area -->
        <section class="categories-news-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- section-title -->
                        <div class="section-title-area">
                            <div class="section-title">
                                <a href="">
                                    <h3 class="title">Business</h3>
                                </a>
                            </div>
                            <div class="section-action-nav">
                                <ul>
                                    <li><a href="">All</a></li>
                                    <li><a href="">Sub Category 1 </a></li>
                                    <li><a href="">Sub Category 2 </a></li>
                                    <li><a href="">Sub Category 3 </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="categories-news">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="category-top-news">
                                <a href="#">
                                    <div class="category-top-news-content">
                                        <div class="category-top-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="" style="width: 100%;">
                                        </div>
                                        <div class="category-top-news-text">
                                            <div class="category-top-news-title">
                                                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h3>
                                            </div>
                                            <div class="category-top-news-description">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure velit aliquam inventore laboriosam.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="category-newses">
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- categories news area -->
        <section class="categories-news-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- section-title -->
                        <div class="section-title-area">
                            <div class="section-title">
                                <a href="">
                                    <h3 class="title">Sports</h3>
                                </a>
                            </div>
                            <div class="section-action-nav">
                                <ul>
                                    <li><a href="">All</a></li>
                                    <li><a href="">Sub Category 1 </a></li>
                                    <li><a href="">Sub Category 2 </a></li>
                                    <li><a href="">Sub Category 3 </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="categories-news">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="category-top-news">
                                <a href="#">
                                    <div class="category-top-news-content">
                                        <div class="category-top-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="" style="width: 100%;">
                                        </div>
                                        <div class="category-top-news-text">
                                            <div class="category-top-news-title">
                                                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h3>
                                            </div>
                                            <div class="category-top-news-description">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure velit aliquam inventore laboriosam.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="category-newses">
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-news">
                                    <div class="category-news-content">
                                        <div class="category-news-img">
                                            <img src="{{ asset('assets/fr/img/post-img.png') }}" alt="">
                                        </div>
                                        <div class="category-news-text">
                                            <div class="category-news-title">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elitd oloribus.</h3>
                                            </div>
                                            <div class="category-news-description">
                                                <p><i class="far fa-clock"></i> 5min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- opinion and latest news area -->
        <section class="sight-news-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="tab-news-area">
                            <div class="section-title-area">
                                <div class="section-title">
                                    <a href="">
                                        <h3 class="title">Sports</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-newses">
                                <div class="tab-news-header">
                                    <div class="tab-news-nav">
                                        <ul>
                                            <li><a href="">Latest</a></li>
                                            <li><a href="">Commented</a></li>
                                            <li><a href="">Selected</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-news-body">
                                   <div class="tab-news-items">
                                       <div class="tab-news-item">
                                           <a href="">
                                               <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quas!</h4>
                                            </a>
                                       </div>
                                       <div class="tab-news-item">
                                           <a href="">
                                               <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quas!</h4>
                                            </a>
                                       </div>
                                       <div class="tab-news-item">
                                           <a href="">
                                               <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quas!</h4>
                                            </a>
                                       </div>
                                       <div class="tab-news-item">
                                           <a href="">
                                               <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quas!</h4>
                                            </a>
                                       </div>
                                       <div class="tab-news-item">
                                           <a href="">
                                               <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quas!</h4>
                                            </a>
                                       </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="opinion-news-area">
                            <div class="section-title-area">
                                <div class="section-title">
                                    <a href="">
                                        <h3 class="title">Opinion</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="opinion-newses">
                                <div class="opinion-news-item">
                                    <a href="">
                                        <div class="opnion-news-title">
                                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
                                        </div>
                                        <div class="opnion-news-content">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptas ea nihil minima recusandae sunt.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="opinion-news-item">
                                    <a href="">
                                        <div class="opnion-news-title">
                                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
                                        </div>
                                        <div class="opnion-news-content">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptas ea nihil minima recusandae sunt.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="opinion-news-item">
                                    <a href="">
                                        <div class="opnion-news-title">
                                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
                                        </div>
                                        <div class="opnion-news-content">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptas ea nihil minima recusandae sunt.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="opinion-news-item">
                                    <a href="">
                                        <div class="opnion-news-title">
                                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
                                        </div>
                                        <div class="opnion-news-content">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptas ea nihil minima recusandae sunt.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="opinion-news-item">
                                    <a href="">
                                        <div class="opnion-news-title">
                                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
                                        </div>
                                        <div class="opnion-news-content">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptas ea nihil minima recusandae sunt.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="opinion-news-item">
                                    <a href="">
                                        <div class="opnion-news-title">
                                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
                                        </div>
                                        <div class="opnion-news-content">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptas ea nihil minima recusandae sunt.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

    <!-- footer area -->
    <footer id="footer" class="footer-area">
        <div class="footer-top-area"></div>
        <div class="footer-bottom-area"></div>
    </footer>
    
    <!-- main js -->
    <script src="{{ asset('assets/fr/js/jquery.min.js') }}"></script>
    <!-- js plugins -->
    <script src="{{ asset('assets/fr/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/fr/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/fr/js/custom.js') }}"></script>
</body>
</html>