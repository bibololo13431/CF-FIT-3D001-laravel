
<section id="explore_area" class="section_padding">
    <div class="container">
        <!-- Section Heading -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section_heading_center">
                    <h2>{{$tours->count()}} tour found</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="left_side_search_area">
                    <div class="left_side_search_boxed">
                        <div class="item_searc_map_area">
                            Bến xe Tp.Đà Lạt
                            <iframe
                                src="https://maps.google.com/maps?q=Đại học Đà Lạt&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                    <div class="left_side_search_boxed">
                        <div class="item_searc_map_area">
                            Bến xe Tp.Hồ Chí Minh
                            <iframe
                                src="https://maps.google.com/maps?q=266 Lê Hồng Phong&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="flight_search_result_wrapper">
                            <div class="flight_search_item_wrappper">
                                @foreach($tours as $tours)
                                <div class="flight_search_items">
                                    <div class="multi_city_flight_lists">
                                        <div class="flight_multis_area_wrapper">
                                            <div class="flight_search_left">
                                                <div class="flight_logo" style="width: 50%;">
                                                    <img style="width: 75%;" src="{{asset('images').'/'.$tours->image_url }}" alt="img">
                                                </div>
                                                <div class="flight_search_destination">
                                                    <h3>Thông tin chuyến đi:</h3>
                                                    <h5>Schedule: {{optional($tours->scheduleCatPro)->schedule}}</h5>
                                                    <h5>Loại ghế: {{optional($tours->type)->type}}</h5>
                                                    <h5>Ngày khởi hành: {{$tours->date}}</h5>
                                                    <h5>Giờ khởi hành: {{$tours->time}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flight_search_right">
                                        <h2>${{ number_format($tours->price, 2) }}</h2>
                                        <a href="{{route('book.seat', ['id' => $tours ->id])}}" class="btn btn_theme btn_sm">Book now</a>
                                        <p>Còn lại {{$tours->actualseat}} chỗ ngồi </p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
