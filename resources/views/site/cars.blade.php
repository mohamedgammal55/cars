@extends('layouts.site.master')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1>Car Grid</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Car Grid</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Featured car start -->
<div class="featured-car content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                    <!-- Advanced search start -->
                    <div class="widget advanced-search2">
                        <h3 class="sidebar-title">Search your desire car</h3>
                        <form method="GET">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="brand">
                                    <option>Brand</option>
                                    <option>Any</option>
                                    <option>New</option>
                                    <option>Semi-New</option>
                                    <option>Damaged</option>
                                    <option>Used</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="location">
                                    <option>Location</option>
                                    <option>United States</option>
                                    <option>United Kingdom</option>
                                    <option>American Samoa</option>
                                    <option>Belgium</option>
                                    <option>Cameroon</option>
                                    <option>Canada</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="year">
                                    <option>Year</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="category">
                                    <option>Category</option>
                                    <option>Luxury Car</option>
                                    <option>Pickup Truck</option>
                                    <option>Minivan</option>
                                    <option>Truck</option>
                                    <option>Sports Car</option>
                                    <option>Wagon</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="transmission">
                                    <option>Transmission</option>
                                    <option>Automatic</option>
                                    <option>Manual</option>
                                    <option>Tiptronic</option>
                                </select>
                            </div>
                            <div class="range-slider clearfix">
                                <label>Price</label>
                                <div data-min="0" data-max="150000"  data-min-name="min_price" data-max-name="max_price" data-unit="USD" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group mb-0">
                                <button type="button" class="btn btn-primary btn-4 btn-lg btn-w-100">Search</button>
                            </div>
                        </form>
                    </div>
                    <!-- Brands start -->
                    <div class="widget brands">
                        <h3 class="sidebar-title">Brands</h3>
                        <form method="GET">
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox2" type="checkbox">
                                <label for="checkbox2">
                                    Audi
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox3" type="checkbox">
                                <label for="checkbox3">
                                    BMW
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox4" type="checkbox">
                                <label for="checkbox4">
                                    Mercedes benz
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">
                                    Lamborghini Huracán
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox5" type="checkbox">
                                <label for="checkbox5">
                                    Buick
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox6" type="checkbox">
                                <label for="checkbox6">
                                    Bugatti
                                </label>
                            </div>
                        </form>
                    </div>
                    <!-- Posts By Category Start -->
                    <div class="posts-by-category widget">
                        <h3 class="sidebar-title">Category</h3>
                        <ul class="list-unstyled list-cat">
                            <li><a href="#">Luxury <span>(45)</span></a></li>
                            <li><a href="#">Pickup Truck <span>(21)</span> </a></li>
                            <li><a href="#">Sports Car <span>(19)</span></a></li>
                            <li><a href="#">Automakers <span>(22) </span></a></li>
                            <li><a href="#">Wagon <span>(9) </span></a></li>
                        </ul>
                    </div>
                    <!-- Latest tweet start -->
                    <div class="widget latest-tweet">
                        <h3 class="sidebar-title">Tweet</h3>
                        <P><a href="#">Lorem Ipsum is simply dummy text</a> of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</P>
                    </div>
                    <!-- Question start -->
                    <div class="widget question widget-3">
                        <h5 class="sidebar-title">Follow us</h5>
                        <div class="social-list clearfix">
                            <ul>
                                <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <!-- Option bar start -->
                <div class="option-bar clearfix">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-12">
                            <div class="sorting-options2">
                                <h5>Showing 1-15 of 69 Listings</h5>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12">
                            <div class="sorting-options">
                                <a href="car-list-leftsidebar.html" class="change-view-btn float-right"><i class="fa fa-th-list"></i></a>
                                <a href="car-grid-leftside.html" class="change-view-btn active-view-btn float-right"><i class="fa fa-th-large"></i></a>
                            </div>
                            <div class="sorting-options-3">
                                <select class="selectpicker search-fields" name="default-order">
                                    <option>Default Order</option>
                                    <option>Price High to Low</option>
                                    <option>Price: Low to High</option>
                                    <option>Newest Properties</option>
                                    <option>Oldest Properties</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="car-box-4 car-photo-1">
                            <div class="tag-2 bg-active">for sale</div>
                            <div class="ling-section">
                                <h3>
                                    <a href="car-details.html">Ferrari Red Car</a>
                                </h3>
                                <ul class="facilities-list clearfix">
                                    <li><i class="flaticon-fuel"></i> Petrol</li>
                                    <li><i class="flaticon-way"></i> 4,000 km</li>
                                    <li><i class="flaticon-manual-transmission"></i> Manual</li>
                                    <li><i class="flaticon-car"></i> Sport</li>
                                    <li><i class="flaticon-gear"></i> white</li>
                                    <li><i class="flaticon-calendar-1"></i> 2020</li>
                                </ul>
                                <a href="car-details.html" class="read-more-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="car-box-4 car-photo-3">
                            <div class="tag-2 bg-active">for sale</div>
                            <div class="ling-section">
                                <h3>
                                    <a href="car-details.html">Volkswagen Scirocco 2016</a>
                                </h3>
                                <ul class="facilities-list clearfix">
                                    <li><i class="flaticon-fuel"></i> Petrol</li>
                                    <li><i class="flaticon-way"></i> 4,000 km</li>
                                    <li><i class="flaticon-manual-transmission"></i> Manual</li>
                                    <li><i class="flaticon-car"></i> Sport</li>
                                    <li><i class="flaticon-gear"></i> white</li>
                                    <li><i class="flaticon-calendar-1"></i> 2020</li>
                                </ul>
                                <a href="car-details.html" class="read-more-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="car-box-4 car-photo-4">
                            <div class="tag-2 bg-active">For Sale</div>
                            <div class="ling-section">
                                <h3>
                                    <a href="car-details.html">Lamborghini</a>
                                </h3>
                                <ul class="facilities-list clearfix">
                                    <li><i class="flaticon-fuel"></i> Petrol</li>
                                    <li><i class="flaticon-way"></i> 4,000 km</li>
                                    <li><i class="flaticon-manual-transmission"></i> Manual</li>
                                    <li><i class="flaticon-car"></i> Sport</li>
                                    <li><i class="flaticon-gear"></i> white</li>
                                    <li><i class="flaticon-calendar-1"></i> 2020</li>
                                </ul>
                                <a href="car-details.html" class="read-more-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="car-box-4 car-photo-1">
                            <div class="tag-2 bg-active">for sale</div>
                            <div class="ling-section">
                                <h3>
                                    <a href="car-details.html">Ferrari Red Car</a>
                                </h3>
                                <ul class="facilities-list clearfix">
                                    <li><i class="flaticon-fuel"></i> Petrol</li>
                                    <li><i class="flaticon-way"></i> 4,000 km</li>
                                    <li><i class="flaticon-manual-transmission"></i> Manual</li>
                                    <li><i class="flaticon-car"></i> Sport</li>
                                    <li><i class="flaticon-gear"></i> white</li>
                                    <li><i class="flaticon-calendar-1"></i> 2020</li>
                                </ul>
                                <a href="car-details.html" class="read-more-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="car-box-4 car-photo-3">
                            <div class="tag-2 bg-active">for sale</div>
                            <div class="ling-section">
                                <h3>
                                    <a href="car-details.html">Volkswagen Scirocco 2016</a>
                                </h3>
                                <ul class="facilities-list clearfix">
                                    <li><i class="flaticon-fuel"></i> Petrol</li>
                                    <li><i class="flaticon-way"></i> 4,000 km</li>
                                    <li><i class="flaticon-manual-transmission"></i> Manual</li>
                                    <li><i class="flaticon-car"></i> Sport</li>
                                    <li><i class="flaticon-gear"></i> white</li>
                                    <li><i class="flaticon-calendar-1"></i> 2020</li>
                                </ul>
                                <a href="car-details.html" class="read-more-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="car-box-4 car-photo-4">
                            <div class="tag-2 bg-active">For Sale</div>
                            <div class="ling-section">
                                <h3>
                                    <a href="car-details.html">Lamborghini</a>
                                </h3>
                                <ul class="facilities-list clearfix">
                                    <li><i class="flaticon-fuel"></i> Petrol</li>
                                    <li><i class="flaticon-way"></i> 4,000 km</li>
                                    <li><i class="flaticon-manual-transmission"></i> Manual</li>
                                    <li><i class="flaticon-car"></i> Sport</li>
                                    <li><i class="flaticon-gear"></i> white</li>
                                    <li><i class="flaticon-calendar-1"></i> 2020</li>
                                </ul>
                                <a href="car-details.html" class="read-more-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page navigation start -->
                <div class="pagination-box text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured car end -->

<!-- Car Overview Modal -->
<div class="car-model-2">
    <div class="modal fade" id="carOverviewModal" tabindex="-1" role="dialog" aria-labelledby="carOverviewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title" id="carOverviewModalLabel">
                        <h4>Explore Your Dream Car</h4>
                        <h5><i class="flaticon-pin"></i> 123 Kathal St. Tampa City,</h5>
                    </div>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row modal-raw">
                        <div class="col-lg-6 modal-left">
                            <div class="item active">
                                <img src="{{asset('site')}}/img/car-13.jpg" alt="best-car" class="img-fluid modalLabel-1">
                                <img src="{{asset('site')}}/img/car-14.jpg" alt="best-car" class="img-fluid modalLabel-2">
                                <div class="sobuz">
                                    <div class="price-box">
                                        <span class="del-2">$1050.00</span>
                                    </div>
                                    <div class="ratings-2">
                                        <span class="ratings-box">4.5/5</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        ( 7 Reviews )
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 modal-right">
                            <div class="modal-right-content">
                                <section>
                                    <h3>Features</h3>
                                    <div class="features">
                                        <ul class="bullets">
                                            <li>Cruise Control</li>
                                            <li>Airbags</li>
                                            <li>Air Conditioning</li>
                                            <li>Alarm System</li>
                                            <li>Audio Interface</li>
                                            <li>CDR Audio</li>
                                            <li>Seat Heating</li>
                                            <li>ParkAssist</li>
                                        </ul>
                                    </div>
                                </section>
                                <section>
                                    <h3>Overview</h3>
                                    <ul class="bullets">
                                        <li>Model</li>
                                        <li>Year</li>
                                        <li>Condition</li>
                                        <li>Price</li>
                                        <li>Audi</li>
                                        <li>2020</li>
                                        <li>Brand New</li>
                                        <li>$178,000</li>
                                    </ul>
                                </section>
                                <div class="description">
                                    <h3>Description</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                                    <a href="car-details.html" class="btn btn-md btn-round btn-theme">Show Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
