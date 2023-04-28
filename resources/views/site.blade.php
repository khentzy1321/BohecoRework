@extends('main')
@section('content')
<header class="header">
    <div class="hero-div center">
      <h1 style="font-family: Times New Roman">BOHOL I ELECTRIC COOPERATIVE, INC.</h1>
      <p class="animate__animated animate__fadeInUp animate__slow">Cabulijan, Tubigon, Bohol</p>

      <div class="row center">
        <div class="col-sm-5 col-lg-5 animate__animated animate__fadeInLeft animate__slow">
          <h3 class="txt">MISSION</h3>

          <p><h6>To deliver quality electric services consistent with our core values, taking advantage of the latest technologies of the resources for member-consumer-owner satisfaction.</h6></p>
        </div>
        <div class="vl"></div>
        <div class="col-sm-5 col-lg-5 animate__animated animate__fadeInRight animate__slow">
          <h3 class="txt">VISION</h3>

         <p> <h6 class="mb-5">The premier electric power provider improving the lives of every Boholano</h6></p>
        </div>

      </div>

      <div class="hero-btns animate__animated animate__fadeInUp animate__slow">
        <a href="#service"><button type="button" class="btn-trans">SERVICES</button></a>
        <a href="{{ url('/bill') }}"><button type="button" class="btn-white">QUICK BILL INQUIRY</button></a>
      </div>
    </div>

</header>
<section class = "service" id="service">
    <div class = "container">
      <h1 class="section-title">SERV<span>I</span>CES</h1>
      <div class = "row">
        <div class = "service-item wow animate__animated animate__fadeInLeft animate__slow">
          <div class="icon"><img src="./images/index1.png" /></div>
          <h2>Power Distribution</h2>
          <div class = "line"></div>
          <p class = "text">Maintaining a Consistent Power Distribution for a Better
            Service</p>
        </div>

        <div class = "service-item wow animate__animated animate__fadeInUp animate__slow">
          <div class="icon"><img src="./images/index2.png" /></div>
          <h2>Consumer Satisfaction</h2>
          <div class = "line"></div>
          <p class = "text">Prioritizing Consumer’s Satisfaction</p>
        </div>

        <div class = "service-item wow animate__animated animate__fadeInRight animate__slow">
          <div class="icon"><img src="./images/index3.png" /></div>
          <h2>Total Electrification</h2>
          <div class = "line"></div>
          <p class = "text">100% Sitio Energized</p>
        </div>
      </div>
    </div>
  </section>

  <section class="power" id="power">
    <div class="container">
        <div class="card wow animate__animated animate__fadeInUp animate__slow">
            <div class="card-header">
                <h2 class="text-center">POWER SUPPLY OUTLOOK</h2>
                <p class="text-muted text-center">March 2023</p>
            </div>
            <div class="card-body">
                <div class="table-full-width table-responsive">
                <table class="table table-striped shadow text-center table-hover">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th width="200">Capacity (kW)</th>
                            <th width="100">Morning<br>(1:00AM-12:00NN)</th>
                            <th width="100">Afternoon<br>(12:01PM-6:00PM)</th>
                            <th width="100">Evening<br>(6:01PM-12:59PM)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Contracted Power Supply (ERC Approved)</td>
                            <th>0</th>
                            <th>1</th>
                            <th> </th>
                        </tr>
                        <tr>
                            <td>System Peak Demand</td>
                            <th> </th>
                            <th>2</th>
                            <th> </th>
                        </tr>
                        <tr>
                            <td>Power Supply Reserve/(Deficit)</td>
                            <th>(0)</th>
                            <th>(1)</th>
                            <th>(0)</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="power">
  <div class="container-fluid">
    <h1 class="section-title">POWER<span>RATES</span></h1>
    <div class="row">
      <div class="col-sm-12 col-md-4 col-lg-5 mb-4">
        <div class="card">
          <div class="card-header">
            <h3>Summary (February 2023)</h3>
          </div>
            <div class="card-body">
              <div class="table-full-width table-responsive">
                <table class="table table-striped table-hover shadow">
                  <thead class="bg-dark text-light">
                    <th>Consumer Class</th>
                    <th></th>
                    <th style="text-align: center;">Rate<br>(PhP/kWh)</th>
                    <th style="text-align: center;">Rate<br>(PhP/kW)</th>
                    <th style="text-align: center;">Fixed Monthly Rate<br>(PhP)</th>
                  </thead>
                  <tbody>
                    <tr class="bg-primary">
                      <th class="text-white">Residential</th>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td></td>
											<td>On-Grid</td>
											<th>16.3144</th>
											<th></th>
											<th>5.6000</th>
										</tr>
										<tr>
											<td></td>
											<td>Off-Grid (Islands)</td>
											<th>10.4416</th>
											<th></th>
											<th></th>
										</tr>

										<tr class="bg-primary">
											<th class="text-white">Low Voltage</th>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td></td>
											<td>Commercial</td>
											<th>15.3608</th>
											<th></th>
											<th>88.3232</th>
										</tr>
										<tr>
											<td></td>
											<td>Public Building</td>
											<th>15.3608</th>
											<th></th>
											<th>88.3232</th>
										</tr>
										<tr>
											<td></td>
											<td>Street Lights</td>
											<th>15.3608</th>
											<th></th>
											<th>88.3232</th>
										</tr>

										<tr class="bg-primary">
											<th class="text-white">High Voltage</th>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td></td>
											<td>Industrial</td>
											<th>13.8400</th>
											<th>658.7205</th>
											<th>88.3232</th>
										</tr>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-7 col-lg-7">
        <div class="card-body">
          <div class="card mb-2">
            <figure class="wp-block-image size-large"><img src="./images/rate1.jpg" alt="image" style="height: auto" width="auto"></figure>
          </div>

          <div class="card mb-2">
            <figure class="wp-block-image size-large"><img src="./images/rate2.jpg" alt="image" style="height: auto" width="auto"></figure>
          </div>

          <div class="card">
            <figure class="wp-block-image size-large"><img src="./images/rate3.jpg" alt="image" style="height: auto" width="auto"></figure>
          </div>
        </div>
      </div>
    </div>
  </div>

            <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</section>
@endsection


