@extends('admin.layout.master')

@section('content')
<div class="sb2-2">
  <!--== breadcrumbs ==-->
  <div class="sb2-2-2">
      <ul>
          <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
          </li>
          <li class="active-bre"><a href="#"> Dashboard</a>
          </li>
          {{-- <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
          </li> --}}
      </ul>
  </div>

  <!--== User Details ==-->
  <div class="ad-v2-hom-info">
    <div class="ad-v2-hom-info-inn">
      <ul>
        <li>
          {{-- <div class="ad-hom-box ad-hom-box-1">
            <span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa-bar-chart"></i></span>
            <div class="ad-hom-view-com">
            <p><i class="fa  fa-arrow-up up"></i> Total ticket Sell</p>
            <h3></h3>
            </div>
          </div> --}}
        </li>
        <li>
          {{-- <div class="ad-hom-box ad-hom-box-2">
            <span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa-usd"></i></span>
            <div class="ad-hom-view-com">
            <p><i class="fa  fa-arrow-up up"></i> Total profit</p>
            <h3></h3>
            </div>
          </div> --}}
        </li>
        <li>
          {{-- <div class="ad-hom-box ad-hom-box-3">
            <span class="ad-hom-col-com ad-hom-col-3"><i class="fa fa-address-card-o"></i></span>
            <div class="ad-hom-view-com">
            <p><i class="fa  fa-arrow-up up"></i> Users</p>
            <h3></h3>
            </div>
          </div> --}}
        </li>
        <li>
          {{-- <div class="ad-hom-box ad-hom-box-4">
            <span class="ad-hom-col-com ad-hom-col-4"><i class="fa fa-envelope-open-o"></i></span>
            <div class="ad-hom-view-com">
            <p><i class="fa  fa-arrow-up up"></i></p>
            <h3></h3>
            </div>
          </div> --}}
        </li>
      </ul>
    </div>
  </div>
  <div class="sb2-2-3">
      <div class="row">
          <!--== Country Campaigns ==-->
          <div class="col-md-6">
              <div class="box-inn-sp">
                  <div class="inn-title">
                    <h4>Order status</h4>
                    <p>Show the status of each Order</p>
                      <div id="piechart" style="width: 700px; height: 500px;"></div>
                  </div>
              </div>
          </div>
          <div class="col-md-6">
            <div class="box-inn-sp">
                <div class="inn-title">
                  <h4>Ticket</h4>
                    <p>The total ticket selling for each day</p>
                  <div id="columnchart" style="width: 600px; height: 500px;"></div>
                </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

@endsection
@section('js-custom')

<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable(@json($result));

    var options = {
      title: 'Order Status'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
</script>

<script type="text/javascript">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable(@json($resultOrderNumber));

    var options = {
      chart: {
        title: 'Ticket Per Date',
        subtitle: 'The ticket qty selling in each date',
      }
    };

    var chart = new google.charts.Bar(document.getElementById('columnchart'));

    chart.draw(data, google.charts.Bar.convertOptions(options));
  }
</script>
    
@endsection