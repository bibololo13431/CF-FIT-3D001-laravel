
 <!-- Form Area -->
 <section id="theme_search_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="theme_search_form_area">
                    <div class="theme_search_form_tabbtn">
                        <ul class="nav nav-tabs" role="tablist">

                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="bus-tab" data-bs-toggle="tab"
                                    data-bs-target="#bus" type="button" role="tab" aria-controls="bus"
                                    aria-selected="true"><i class="fas fa-bus"></i> Chuyến xe</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="bus" role="tabpanel" aria-labelledby="bus-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tour_search_form">
                                        <form id="search-form">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Destination</p>
                                                        <input type="text" name ="name" placeholder="Where are you going?">
                                                        <span>Where are you going?</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="form_search_date">
                                                        <div class="flight_Search_boxed date_flex_area">
                                                            <div class="Journey_date">
                                                                <p>Journey date</p>
                                                                <input type="date" name="date" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed dropdown_passenger_area">
                                                        <p>Passenger, Class </p>
                                                        <div class="dropdown">
                                                            <input name="seatqty" value="" class="count pcount">
                                                        </div>
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="top_form_search_button">
                                                    <button class="btn btn_theme btn_md" type="submit">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="renderhere"></div>
</section>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#search-form").submit(function(e){
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    type: "GET",
                    url: "{{ route('search') }}",
                    data: formData,
                    success: function (response) {
                        if (response.tours) {

                            renderHTML(response.tours);
                        } else {
                            $("#renderhere").html(response);
                        }
                        console.log("Done");
                    },
                    error: function (error){
                        console.log("Error:" . error);
                        alert("An error occurred. Please try again.");
                    }
                });
            });
        });      
    </script>