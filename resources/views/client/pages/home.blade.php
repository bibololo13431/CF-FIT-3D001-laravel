@extends('client.layout.master')

@section('content')

<!-- imagination Area -->
 <section id="go_beyond_area" class="section_padding_top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="heading_left_area">
                    <h2>Go beyond your <span>imagination</span></h2>
                    <h5>Discover your ideal experience with us</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="imagination_boxed">
                    <a href="top-destinations.html">
                        <img src="{{asset('client/img/imagination/imagination1.png')}}" alt="img">
                    </a>
                    <h3><a href="top-destinations.html">7% Discount for all <span>Airlines</span></a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="imagination_boxed">
                    <a href="top-destinations.html">
                        <img src="{{asset('client/img/imagination/imagination2.png')}}" alt="img">
                    </a>
                    <h3><a href="#!">Travel around<span>the world</span></a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="imagination_boxed">
                    <a href="top-destinations.html">
                        <img src="{{asset('client/img/imagination/imagination3.png')}}" alt="img">
                    </a>
                    <h3><a href="top-destinations.html">Luxury resorts<span>top deals</span></a></h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Explore our hot deals -->
<section id="explore_area" class="section_padding_top">
    <div class="container">
        <!-- Section Heading -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section_heading_center">
                    <h2>Explore our hot deals</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="theme_nav_tab">
                    <nav class="theme_nav_tab_item">
                        <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                            <button class="nav-link active" id="nav-hotels-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-hotels" type="button" role="tab" aria-controls="nav-hotels"
                                aria-selected="true">Hotels</button>
                            <button class="nav-link" id="nav-tours-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-tours" type="button" role="tab" aria-controls="nav-tours"
                                aria-selected="false">Tours</button>
                            <button class="nav-link" id="nav-space-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-space" type="button" role="tab" aria-controls="nav-space"
                                aria-selected="false">Space</button>
                            <button class="nav-link" id="nav-events-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-events" type="button" role="tab" aria-controls="nav-events"
                                aria-selected="false">Events</button>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-hotels" role="tabpanel"
                        aria-labelledby="nav-hotels-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="{{asset('client/img/tab-img/hotel1.png')}}" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Kantua hotel, Thailand</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="{{asset('client/img/tab-img/hotel2.png')}}" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Indonesia</p>
                                        <div class="discount_tab">
                                            <span>50%</span>
                                        </div>

                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Hotel paradise international</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="{{asset('client/img/tab-img/hotel3.png')}}" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Hotel kualalampur</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="{{asset('client/img/tab-img/hotel4.png')}}" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Mariana island</p>
                                        <div class="discount_tab">
                                            <span>50%</span>
                                        </div>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Hotel deluxe</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="{{asset('client/img/tab-img/hotel5.png')}}" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Kathmundu, Nepal</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Hotel rajavumi</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="{{asset('client/img/tab-img/hotel6.png')}}" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Beach view</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Thailand grand suit</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="{{asset('client/img/tab-img/hotel7.png')}}" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Long island</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Zefi resort and spa</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="{{asset('client/img/tab-img/hotel8.png')}}" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Philippine</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Manila international resort</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-tours" role="tabpanel" aria-labelledby="nav-tours-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="{{asset('client/img/tab-img/hotel1.png')}}" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Kantua hotel, Thailand</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="{{asset('client/img/tab-img/hotel3.png')}}" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Hotel kualalampur</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="{{asset('client/img/tab-img/hotel8.png')}}" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Philippine</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Manila international resort</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-space" role="tabpanel" aria-labelledby="nav-space-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="{{asset('client/img/tab-img/hotel1.png')}}" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Kantua hotel, Thailand</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="{{asset('client/img/tab-img/hotel4.png')}}" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Hotel kualalampur</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="{{asset('client/img/tab-img/hotel1.png')}}" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Kantua hotel, Thailand</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="{{asset('client/img/tab-img/hotel8.png')}}" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Philippine</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Manila international resort</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
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

<!-- Offer Area -->
<section id="offer_area" class="section_padding_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="offer_area_box d-none-phone img_animation">
                    <img src="{{asset('client/img/offer/offer1.png')}}" alt="img">
                    <div class="offer_area_content">
                        <h2>Special Offers</h2>
                        <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                            accusam et justo duo dolores et ea rebum. Stet clita kasd dolor sit amet. Lorem ipsum
                            dolor sit amet.</p>
                        <a href="#!" class="btn btn_theme btn_md">Holiday deals</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="offer_area_box img_animation">
                    <img src="{{asset('client/img/offer/offer2.png')}}" alt="img">
                    <div class="offer_area_content">
                        <h2>News letter</h2>
                        <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et.</p>
                        <a href="#!" class="btn btn_theme btn_md">Subscribe now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="offer_area_box img_animation">
                    <img src="{{asset('client/img/offer/offer3.png')}}" alt="img">
                    <div class="offer_area_content">
                        <h2>Travel tips</h2>
                        <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et.</p>
                        <a href="#!" class="btn btn_theme btn_md">Get tips</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Destinations Area -->
<section id="destinations_area" class="section_padding_top">
    <div class="container">
        <!-- Section Heading -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section_heading_center">
                    <h2>Destinations for you</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="theme_nav_tab">
                    <nav class="theme_nav_tab_item">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-nepal-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-nepal" type="button" role="tab" aria-controls="nav-nepal"
                                aria-selected="true">Nepal</button>
                            <button class="nav-link" id="nav-malaysia-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-malaysia" type="button" role="tab" aria-controls="nav-malaysia"
                                aria-selected="false">Malaysia</button>
                            <button class="nav-link" id="nav-indonesia-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-indonesia" type="button" role="tab"
                                aria-controls="nav-indonesia" aria-selected="false">Indonesia</button>
                            <button class="nav-link" id="nav-turkey-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-turkey" type="button" role="tab" aria-controls="nav-turkey"
                                aria-selected="false">Turkey</button>
                            <button class="nav-link" id="nav-china-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-china" type="button" role="tab" aria-controls="nav-china"
                                aria-selected="false">China</button>
                            <button class="nav-link" id="nav-darjeeling-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-darjeeling" type="button" role="tab"
                                aria-controls="nav-darjeeling" aria-selected="false">Darjeeling</button>
                            <button class="nav-link" id="nav-italy-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-italy" type="button" role="tab" aria-controls="nav-italy"
                                aria-selected="false">Italy</button>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content" id="nav-tabContent1">
                    <div class="tab-pane fade show active" id="nav-nepal" role="tabpanel"
                        aria-labelledby="nav-nepal-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="top-destinations.html"><img
                                                src="{{asset('client/img/destination/destination-small1.png')}}" alt="img"></a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3><a href="top-destinations.html">Everest trek to Base Camp</a></h3>
                                        <p>Price starts at <span>$105.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="top-destinations.html"><img
                                                src="{{asset('client/img/destination/destination-small2.png')}}" alt="img"></a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3><a href="top-destinations.html">Kathmundu tour</a></h3>
                                        <p>Price starts at <span>$85.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="top-destinations.html"><img
                                                src="{{asset('client/img/destination/destination-small3.png')}}" alt="img"></a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3><a href="top-destinations.html">Beautiful pokhara</a></h3>
                                        <p>Price starts at <span>$100.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="top-destinations.html"><img
                                                src="{{asset('client/img/destination/destination-small4.png')}}" alt="img"></a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3><a href="top-destinations.html">Annapurna region</a></h3>
                                        <p>Price starts at <span>$75.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="top-destinations.html"><img
                                                src="{{asset('client/img/destination/destination-small5.png')}}" alt="img"></a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3><a href="top-destinations.html">Chitwan national park</a></h3>
                                        <p>Price starts at <span>$105.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="top-destinations.html"><img
                                                src="{{asset('client/img/destination/destination-small6.png')}}" alt="img"></a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3><a href="top-destinations.html">Langtang region</a></h3>
                                        <p>Price starts at <span>$105.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-malaysia" role="tabpanel" aria-labelledby="nav-malaysia-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="top-destinations.html"><img
                                                src="{{asset('client/img/destination/destination-small2.png')}}" alt="img"></a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3><a href="top-destinations.html">Kathmundu tour</a></h3>
                                        <p>Price starts at <span>$85.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="top-destinations.html"><img
                                                src="{{asset('client/img/destination/destination-small3.png')}}" alt="img"></a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3><a href="top-destinations.html">Beautiful pokhara</a></h3>
                                        <p>Price starts at <span>$100.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="top-destinations.html">
                                            <img src="{{asset('client/img/destination/destination-small4.png')}}" alt="img">
                                        </a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3><a href="top-destinations.html">Annapurna region</a></h3>
                                        <p>Price starts at <span>$75.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="top-destinations.html"><img
                                                src="{{asset('client/img/destination/destination-small6.png')}}" alt="img"></a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3><a href="top-destinations.html">Langtang region</a></h3>
                                        <p>Price starts at <span>$105.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-indonesia" role="tabpanel"
                        aria-labelledby="nav-indonesia-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="top-destinations.html"><img
                                                src="{{asset('client/img/destination/destination-small3.png')}}" alt="img"></a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3><a href="top-destinations.html">Beautiful pokhara</a></h3>
                                        <p>Price starts at <span>$100.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="top-destinations.html"><img
                                                src="{{asset('client/img/destination/destination-small4.png')}}" alt="img"></a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3><a href="top-destinations.html">Annapurna region</a></h3>
                                        <p>Price starts at <span>$75.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="top-destinations.html"><img
                                                src="{{asset('client/img/destination/destination-small6.png')}}" alt="img"></a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3><a href="top-destinations.html">Langtang region</a></h3>
                                        <p>Price starts at <span>$105.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-turkey" role="tabpanel" aria-labelledby="nav-turkey-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="top-destinations.html"><img
                                                src="{{asset('client/img/destination/destination-small2.png')}}" alt="img"></a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3><a href="top-destinations.html">Kathmundu tour</a></h3>
                                        <p>Price starts at <span>$85.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="top-destinations.html"><img
                                                src="{{asset('client/img/destination/destination-small3.png')}}" alt="img"></a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3><a href="top-destinations.html">Beautiful pokhara</a></h3>
                                        <p>Price starts at <span>$100.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="top-destinations.html"><img
                                                src="{{asset('client/img/destination/destination-small4.png')}}" alt="img"></a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3><a href="top-destinations.html">Annapurna region</a></h3>
                                        <p>Price starts at <span>$75.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-china" role="tabpanel" aria-labelledby="nav-china-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="top-destinations.html"><img
                                                src="{{asset('client/img/destination/destination-small4.png')}}" alt="img"></a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3><a href="top-destinations.html">Annapurna region</a></h3>
                                        <p>Price starts at <span>$75.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="top-destinations.html"><img
                                                src="{{asset('client/img/destination/destination-small6.png')}}" alt="img"></a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3><a href="top-destinations.html">Langtang region</a></h3>
                                        <p>Price starts at <span>$105.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-darjeeling" role="tabpanel"
                        aria-labelledby="nav-darjeeling-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="top-destinations.html"><img
                                                src="{{asset('client/img/destination/destination-small4.png')}}" alt="img"></a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3><a href="top-destinations.html">Annapurna region</a></h3>
                                        <p>Price starts at <span>$75.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-italy" role="tabpanel" aria-labelledby="nav-italy-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="top-destinations.html"><img
                                                src="{{asset('client/img/destination/destination-small4.png')}}" alt="img"></a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3><a href="top-destinations.html">Annapurna region</a></h3>
                                        <p>Price starts at <span>$75.00</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="tab_destinations_boxed">
                                    <div class="tab_destinations_img">
                                        <a href="top-destinations.html"><img
                                                src="{{asset('client/img/destination/destination-small6.png')}}" alt="img"></a>
                                    </div>
                                    <div class="tab_destinations_conntent">
                                        <h3><a href="top-destinations.html">Langtang region</a></h3>
                                        <p>Price starts at <span>$105.00</span></p>
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

<!-- News Area -->
<section id="home_news" class="section_padding_top">
    <div class="container">
        <!-- Section Heading -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section_heading_center">
                    <h2>Latest travel news</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="home_news_left_wrapper">
                    <div class="home_news_item">
                        <div class="home_news_img">
                            <a href="news-details.html"><img src="{{asset('client/img/news/small1.png')}}" alt="img"></a>
                        </div>
                        <div class="home_news_content">
                            <h3><a href="news-details.html">Revolutionising the travel industry,
                                    one partnership at a time</a></h3>
                            <p><a href="news.html">26 Oct 2021</a> <span> <i class="fas fa-circle"></i>5min
                                    read</span> </p>
                        </div>
                    </div>
                    <div class="home_news_item">
                        <div class="home_news_img">
                            <a href="news-details.html"><img src="{{asset('client/img/news/small2.png')}}" alt="img"></a>
                        </div>
                        <div class="home_news_content">
                            <h3><a href="news-details.html">t is a long established fact that a reader will be
                                    distracted.</a></h3>
                            <p><a href="news.html">26 Oct 2021</a> <span> <i class="fas fa-circle"></i>5min
                                    read</span> </p>
                        </div>
                    </div>
                    <div class="home_news_item">
                        <div class="home_news_img">
                            <a href="news-details.html"><img src="{{asset('client/img/news/small3.png')}}" alt="img"></a>
                        </div>
                        <div class="home_news_content">
                            <h3><a href="#!">There are many variations of passages of sum available</a></h3>
                            <p><a href="news.html">26 Oct 2021</a> <span> <i class="fas fa-circle"></i>5min
                                    read</span> </p>
                        </div>
                    </div>
                    <div class="home_news_item">
                        <div class="home_news_img">
                            <a href="news-details.html"><img src="{{asset('client/img/news/small4.png')}}" alt="img"></a>
                        </div>
                        <div class="home_news_content">
                            <h3><a href="news-details.html">Contrary to popular belief, Lorem Ipsum is not
                                    simply.</a></h3>
                            <p><a href="news.html">26 Oct 2021</a> <span> <i class="fas fa-circle"></i>5min
                                    read</span> </p>
                        </div>
                    </div>
                    <div class="home_news_item">
                        <div class="seeall_link">
                            <a href="news.html">See all article <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="home_news_big">
                    <div class="news_home_bigest img_hover">
                        <a href="news-details.html"><img src="{{asset('client/img/news/new-big.png')}}" alt="img"></a>
                    </div>
                    <h3><a href="news-details.html">There are many variations of passages available but</a> </h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of.
                        The point of using Lorem Ipsum is that it has a more</p>
                    <p>It is a long established fact that a reader will be distracted by the readable long
                        established fact that a reader will be distracted content of a
                        page when looking at its layout.</p>
                    <a href="news-details.html">Read full article <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

