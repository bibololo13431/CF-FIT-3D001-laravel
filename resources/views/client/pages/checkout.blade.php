@extends('client.layout.master')

@section('content')


<section id="tour_booking_submission" class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="tou_booking_form_Wrapper">
                    <div class="booking_tour_form">
                        <h3 class="heading_theme">Thông tin khách hàng</h3>
                    <form action="{{route('book.place.order')}}" id="tour_bookking_form_item" method="POST">
                            @csrf
                            <div class="tour_booking_form_box">
                                <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div>Tên khách hàng: </div>
                                                <input type="text" class="form-control bg_input"
                                                name="name" placeholder="name">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div>Email: </div>
                                                <input type="text" class="form-control bg_input"
                                                name="email" placeholder="Email address (Optional)">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div>Điện thoại: </div>
                                                <input type="text" class="form-control bg_input"
                                                    name="phone" placeholder="Mobile number*">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div>Địa chỉ </div>
                                                <input type="text" class="form-control bg_input"
                                                name="address" placeholder="Street address">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div>Số chỗ đặt: </div>
                                                <input type="text" class="form-control bg_input"
                                                    name ="countSeat" value="{{$countSeat}}" readonly>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div>Vị trí ghế: </div>
                                                <input type="text" class="form-control bg_input"
                                                name="seatdetail" value="{{$selectedSeat}}" readonly>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div>Ngày khởi hành: </div>
                                                <input type="date" class="form-control bg_input"
                                                value="{{$tour->date}}" readonly >
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div>Giờ khởi hành: </div>
                                                <input type="time" class="form-control bg_input"
                                                value="{{$tour->time}}" readonly >
                                            </div>
                                        </div> 
                                 </div>
                            </div>
                        </div>
                    <div class="booking_tour_form">
                        <h3 class="heading_theme">Payment method</h3>
                        <div class="tour_booking_form_box">
                            <div class="booking_payment_boxed">
                                    <div class="form-check">
                                        <label for="VNBANK">
                                            VNPay
                                            <input value="VNBANK" name="payment_method" type="radio" id="VNBANK">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label for="INTCARD">
                                            INTCARD
                                            <input value="INTCARD" name="payment_method" type="radio" id="INTCARD">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="booking_tour_form_submit">
                        <button type="submit" class="site-btn">PLACE ORDER</button>
                    </div>
                </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="tour_details_right_sidebar_wrapper">
                    <div class="tour_detail_right_sidebar">
                        <div class="tour_details_right_boxed">
                            <div class="tour_details_right_box_heading">
                                <h3>Tour Detail</h3>
                            </div>
                            <div class="flight_sidebar_right">
                                <div class="flight_search_left_sidebar">
                                    <div class="flight_search_destination_sidebar">
                                        <h2>{{ $tour->name }}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="tour_package_details_bar_list">
                                <h5>Description of Tour</h5>
                                <ul>
                                    <li><i class="fas fa-circle"></i>Lộ trình: {{ optional($tour->scheduleCatPro)->schedule }}</li>
                                    <li><i class="fas fa-circle"></i>{!!$tour->description!!}</li>
                                </ul>
                            </div>
                            <div class="tour_package_details_bar_price">
                                <h5>Price</h5>
                                <div class="tour_package_bar_price">
                                    <h3>${{ number_format($tour->price, 2) }} <sub> / Ticket X 1</sub> </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="tour_detail_right_sidebar">
                        <div class="tour_details_right_boxed">
                            <div class="tour_details_right_box_heading">
                                <h3>Coupon code</h3>
                            </div>
                            <div class="coupon_code_area_booking">
                                <form action="#!">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg_input"
                                            placeholder="Enter coupon code">
                                    </div>
                                    <div class="coupon_code_submit">
                                        <button class="btn btn_theme btn_md">Apply voucher</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div> --}}
                    <div class="tour_detail_right_sidebar">
                        <div class="tour_details_right_boxed">
                            <div class="tour_details_right_box_heading">
                                <h3>Thành tiền</h3>
                            </div>

                            <div class="tour_booking_amount_area">
                                @php 
                                    $ticket = $tour->price * $countSeat;
                                    $total = $ticket;
                                @endphp
                                <ul>
                                    <li>Ticket X {{$countSeat}}
                                        <span>
                                            {{$countSeat}} x ${{number_format($tour->price,2)}} =
                                            ${{ number_format($ticket, 2) }}
                                        </span>
                                    </li>
                                </ul>
                                <div class="total_subtotal_booking">
                                    <h6>Total Amount <span>${{ number_format($total, 2) }}</span> </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js-custom')
@endsection