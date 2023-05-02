@extends('main')
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}

@section('content')
    <header class="header">
        <div class="hero-div center">
            <h1 style="font-family: Times New Roman">BOHOL I ELECTRIC COOPERATIVE, INC.</h1>
            <p class="animate__animated animate__fadeInUp animate__slow">Cabulijan, Tubigon, Bohol</p>

            <div class="row center">
                <div class="col-sm-5 col-lg-5 animate__animated animate__fadeInLeft animate__slow">
                    <h3 class="txt">MISSION</h3>

                    <p>
                    <h6>To deliver quality electric services consistent with our core values, taking advantage of the latest
                        technologies of the resources for member-consumer-owner satisfaction.</h6>
                    </p>
                </div>
                <div class="vl"></div>
                <div class="col-sm-5 col-lg-5 animate__animated animate__fadeInRight animate__slow">
                    <h3 class="txt">VISION</h3>

                    <p>
                    <h6 class="mb-5">The premier electric power provider improving the lives of every Boholano</h6>
                    </p>
                </div>

            </div>

            <div class="hero-btns animate__animated animate__fadeInUp animate__slow">
                <a href="#service"><button type="button" class="btn-trans">SERVICES</button></a>
                <a href="{{ url('/bill') }}"><button type="button" class="btn-white">QUICK BILL INQUIRY</button></a>
            </div>
        </div>

    </header>

    <section>
        <div class="container-fluid">
            <header><h1 class="text-center mt-2 mb-2 ">NEWS({{ $countNews }})</h1></header>
            @foreach ($news as $new)
            <div class="row">
                <div class="col-md-6 mt-2" style="box-shadow: 2px 2px 5px #1b1b1b; background-color: rgba(255, 255, 0, 0.384);">
                    <div id="myCarousel-{{ $new->id }}" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" >
                            <ol class="carousel-indicators">
                                <li data-bs-target="#myCarousel-{{ $new->id }}" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#myCarousel-{{ $new->id }}" data-bs-slide-to="1"></li>
                                <li data-bs-target="#myCarousel-{{ $new->id }}" data-bs-slide-to="2"></li>
                            </ol>
                            @foreach (json_decode($new->image, true) as $index => $img)
                                <div class="carousel-item @if($index == 0) active @endif" style=" box-shadow: 2px 2px 5px #1b1b1b " >
                                    <figure data-toggle="modal" data-target="#newsView-{{ $new->id }}">
                                        <img  class="mt-3" src="{{ url('uploads/news/' . $img) }}" alt="Image" style="height: 400px;">
                                    </figure>
                                </div>
                                @include('news.view')
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-2" style="background-color: rgba(255, 202, 211, 0.726)">
                    <div class="container">
                      <h2><p class="text-center">{{ $new->title }}</p></h2>
                        <p>{{ $new->article }}</p>
                    </div>
                </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center mt-4">
                {{ $news->appends(['news' => $news->currentPage()])->links() }}
            </div>
        </div>
    </section>
    <hr>
    <section class="service" id="service">
        <div class="container">
            <h1 class="section-title">SERV<span>I</span>CES</h1>
            <div class="row">
                <div class="service-item wow animate__animated animate__fadeInLeft animate__slow"
                    style="box-shadow: 2px 2px 10px #000000">
                    <div class="icon"><img src="./images/index1.png" /></div>
                    <h2>Power Distribution</h2>
                    <div class="line"></div>
                    <p class="text">Maintaining a Consistent Power Distribution for a Better
                        Service</p>
                </div>

                <div class="service-item wow animate__animated animate__fadeInUp animate__slow"
                    style="box-shadow: 2px 2px 10px #1b1b1b">
                    <div class="icon"><img src="./images/index2.png" /></div>
                    <h2>Consumer Satisfaction</h2>
                    <div class="line"></div>
                    <p class="text">Prioritizing Consumer’s Satisfaction</p>
                </div>

                <div class="service-item wow animate__animated animate__fadeInRight animate__slow"
                    style="box-shadow: 2px 2px 10px #1b1b1b">
                    <div class="icon"><img src="./images/index3.png" /></div>
                    <h2>Total Electrification</h2>
                    <div class="line"></div>
                    <p class="text">100% Sitio Energized</p>
                </div>
            </div>
        </div>
    </section>
<hr>
    <section class="power" id="power">
        <div class="container">
            <div class="card wow animate__animated animate__fadeInUp animate__slow"
                style="box-shadow: 2px 2px 10px #1b1b1b">
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
<hr>
    <section class="power">
        <div class="container-fluid">
            <h1 class="section-title">POWER<span>RATES</span></h1>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-5 mb-4">
                    <div class="card" style="box-shadow: 2px 2px 10px #1b1b1b">
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
                        <div class="card mb-2" style="box-shadow: 2px 2px 10px #1b1b1b">
                            <figure class="wp-block-image size-large"><img src="./images/rate1.jpg" alt="image"
                                    style="height: auto" width="auto"></figure>
                        </div>

                        <div class="card mb-2" style="box-shadow: 2px 2px 10px #1b1b1b">
                            <figure class="wp-block-image size-large"><img src="./images/rate2.jpg" alt="image"
                                    style="height: auto" width="auto"></figure>
                        </div>

                        <div class="card" style="box-shadow: 2px 2px 10px #1b1b1b">
                            <figure class="wp-block-image size-large"><img src="./images/rate3.jpg" alt="image"
                                    style="height: auto" width="auto"></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    </section>


<hr>

    <section>
        <div class="container-fluid">
            <div class="content">
                <div class="row">
                    <div class="col-md-3 col-lg-4 mb-4">
                        <header><h1 class="text-center">INTERRUPTIONS({{$countInt}})</h1></header>
                        <div class="card-body bg-white" style="box-shadow: 2px 2px 10px #1b1b1b; padding: 10px ">
                            <table class="table table-striped table-hover" >
                                    <thead class="bg-secondary">

                                        <th></th>
                                    </thead>
                                    <tbody>
                                        @foreach ($interruptions as $int)
                                        <tr data-toggle="modal" data-target="#myModal-{{$int->id}}">
                                            <td><p><strong>WHEN:</strong> {{$int->dateTime}}</p></td>
                                          </tr>


                                          {{-- modal --}}
                                          <div class="modal fade" id="myModal-{{$int->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h4 class="modal-title" id="myModalLabel">INTERRUPTIONS</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4 class="advisory-title text-center">{{$int->created_at->isoFormat('MMMM d, Y')}}</h4>
                                                    <div class="container">
                                                     <p ><strong>WHAT:</strong> {{$int->what}}</p>
                                                     <p><strong>WHEN:</strong> {{$int->dateTime}}</p>
                                                     <p><strong>WHERE:</strong> {{$int->where}}</p>
                                                     <p><strong>WHY:</strong> {{$int->why}}</p>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <small>
                                                        <p class="text-center text-muted">
                                                            We sincerely apologize for the inconvenience this will bring you. We
                                                            request
                                                            your patience and understanding on this matter. Rest assured that our team will exert best
                                                            effort to restore the power the soonest possible time.
                                                            For further queries, please call our hotline numbers at <strong> 09177147493 </strong> or <strong> 09199950240</strong>
                                                        </p>
                                                       </small>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="card-footer text-center"  style="padding-bottom: 10px">
                                <a href="{{ route('int.index') }}"><h5>All Interruptions</h5></a>
                          </div>
                          <div class="d-flex justify-content-center">
                            {{ $interruptions->appends(['interruptions_page' => $interruptions->currentPage()])->links('pagination::bootstrap-4') }}
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7 col-lg-8">
                        <header><h1 class="text-center">ADVISORIES({{ $countAdv }})</h1></header>
                        <div class="content">
                            <div class="card-body">
                                @foreach ($advisories as $adv)
                                <div class="container-fluid mb-2 mt-2">
                                    <div class="card mt-2 ">
                                        <div class="card-body" style="box-shadow: 2px 2px 5px #181818">

                                            <div class="d-inline">
                                                <h2 class="d-inline">{{$adv->place}}</h2>
                                            </div>
                                            <div class="d-inline d-flex justify-content-end">
                                                 <p class="text-muted text-right d-inline text-right">{{ Carbon\Carbon::parse($adv->dateTime)->format('M d, Y') }}</p>
                                            </div>
                                            <p class="text-center ellipsis">{{$adv->info}}</p>
                                        @role('admin')
                                        <div class="card-footer1 d-flex justify-content-end ">
                                            <a href="{{ route('advisory.edit', $adv) }}" class="btn btn-sm btn-success mx-1"><i class="fas fa-edit"></i></a>

                                            <form id="delete-form-{{ $adv->id }}" action="{{ route('advisory.destroy', $adv->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="deleteData({{ $adv->id }}, '{{ $adv->place }}')" type="button" data-placement="bottom" onclick="deleteAdvisory()" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </div>
                                        @endrole
                                    </div>
                                </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                          <div class="d-flex justify-content-center mt-4">{{ $advisories->appends(['advisory_page' => $advisories->currentPage()])->links('pagination::bootstrap-4') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<hr>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-7 col-lg-8 mb-4">
                    <h2 class="text-center">FEATURED</h2>
                    <div class="img-fluid" style="box-shadow: 2px 2px 5px #181818">
                        <figure>
                            <img width="100%" height="830px" src="{{ asset('../images/boheco-pay.jpg') }}" alt="boheco.image">
                        </figure>
                    </div>
                    </div>

            <div class="col-sm-12 col-md-4 col-lg-4">

                <header><h2 class="text-center">Maps</h2></header>
            <div class="card mt-2"  style="box-shadow: 2px 2px 5px #181818">
                <div id="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d491.2266397873222!2d123.9766890130919!3d9.949501664860648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aa2587a96c5389%3A0x198d33da345169ef!2sBohol%201%20Electric%20Cooperative!5e0!3m2!1sen!2sph!4v1682728312572!5m2!1sen!2sph"
                        width="100%" height="100%" style="padding: 10px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <header><h5 class="text-center mt-3">PAYMENTS PARTNER</h5></header>
            <div class="container">
                <div class="row mt-3">
                    <div class="col-md-6 mb-2">
                        <div class="card hov" style="box-shadow: 2px 2px 5px #181818">
                            <img src="{{ asset('../images/secu.png') }}" alt="">
                            <p>Security Bank</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card hov" style="box-shadow: 2px 2px 5px #181818">
                            <img src="{{ asset('../images/ub.png') }}" alt="">
                            <p>Union Bank</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="card hov" style="box-shadow: 2px 2px 5px #181818">
                            <img src="{{ asset('../images/mlu.png') }}" alt="">
                            <p>M Lhuiller</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card hov" style="box-shadow: 2px 2px 5px #181818">
                            <img src="{{ asset('../images/paws.png') }}" alt="">
                            <p>Palawan Pawnshop</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2" >
                        <div class="card hov" style="box-shadow: 2px 2px 5px #181818">
                            <img src="{{ asset('../images/fcb.png') }}" alt="">
                            <p>FCB</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card hov" style="box-shadow: 2px 2px 5px #181818">
                            <img src="{{ asset('../images/ceb.png') }}" alt="">
                            <p>Cebuana Lhuiller
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card hov" style="box-shadow: 2px 2px 5px #181818">
                            <img src="{{ asset('../images/lban.png') }}" alt="">
                            <p>Landbank</p>
                        </div>
                    </div>
                    <div class="col-md-6 hov">
                        <div class="card hov" style="box-shadow: 2px 2px 5px #181818">
                            <img src="{{ asset('../images/bancofc.png') }}" alt="">
                            <p>Bank of Commerce</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
          </div>
        </div>
    </section>

<hr>

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <style>
        #map-container {
            height: 300px;
            width: 100%;
            border: 1px solid #ccc;
         }
         .ellipsis {
                width: 100%;
                padding-left: 8px;
                padding-right: 8px;
                display: -webkit-box;
                -webkit-line-clamp: 5;
                -webkit-box-orient: vertical;
                overflow: hidden;
                text-overflow: ellipsis;

            }
            .modal {
            z-index: 9999; /* or a higher value if needed */
            }
            .card img{
                width: 100%;
                height: 75px;
            }
            .card p{
                text-align: center;
            }
            .hov:hover{
                transition: box-shadow 0.3s ease-in-out;
                transform: scale(1.3);
                z-index: 2;
            }
    </style>
@endsection
