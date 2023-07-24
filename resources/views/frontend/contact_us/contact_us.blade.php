@extends('frontend.common.product_master')

@section('product_content')

@section('title')

Contact Us

@endsection

 <!-- Start of Main -->
 <main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">Contact Us</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-10 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.html">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <div class="page-content contact-us">
                <div class="container">
                    <section class="content-title-section mb-10">
                        <h3 class="title title-center mb-3">Contact
                            Information
                        </h3>
                        <p class="text-center">Lorem ipsum dolor sit amet,
                            consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                    </section>
                    <!-- End of Contact Title Section -->

                    <section class="contact-information-section mb-10">
                        <div class="row owl-carousel owl-theme cols-xl-4 cols-md-3 cols-sm-2 cols-1" data-owl-options="{
                        'items': 4,
                        'nav': false,
                        'dots': false,
                        'loop': false,
                        'margin': 20,
                        'responsive': {
                            '0': {
                                'items': 1
                            },
                            '480': {
                                'items': 2
                            },
                            '768': {
                                'items': 3
                            },
                            '992': {
                                'items': 3
                            }
                        }
                    }">
                            <div class="icon-box text-center icon-box-primary">
                                <span class="icon-box-icon icon-email">
                                    <i class="w-icon-envelop-closed"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">E-mail Address</h4>
                                    <p>{{ $SiteSetting->email }}</p>
                                </div>
                            </div>
                            <div class="icon-box text-center icon-box-primary">
                                <span class="icon-box-icon icon-headphone">
                                    <i class="w-icon-headphone"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">Phone Number</h4>
                                    <p>  @if(session()->get('language') == 'others')
                            {{ $SiteSetting->phone_one_others }}
                            @else
                            {{ $SiteSetting->phone_one_en }}
                            @endif
							 /
							 @if(session()->get('language') == 'others')
                            {{ $SiteSetting->phone_one_others }}
                            @else
                            {{ $SiteSetting->phone_two_en }}
                            @endif
						</p>
                                </div>
                            </div>
                            <div class="icon-box text-center icon-box-primary">
                                <span class="icon-box-icon icon-map-marker">
                                    <i class="w-icon-map-marker"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">Address</h4>
                                    <p>@if(session()->get('language') == 'others')
                            {{ $SiteSetting->company_address_others }}
                            @else
                            {{ $SiteSetting->company_address_en }}
                            @endif</p>
                                </div>
                            </div>
                            
                        </div>
                    </section>
                    <!-- End of Contact Information section -->

                    <hr class="divider mb-10 pb-1">

                    <section class="contact-section">
                        <div class="row gutter-lg pb-3">

						<div class="col-lg-3">

				</div>
                            
                            <div class="col-lg-6 mb-8">
                                <h4 class="title mb-3">Send Us a Message</h4>
                                <form class="form contact-us-form" action="{{ route('contact.store') }}" method="post">
								@csrf
								<div class="form-group">
                                        <label for="username">Your Name</label>
                                        <input type="text" id="username" name="name" 
                                            class="form-control" >
											@error('name')
                            <span class="text-danger">{{ $message }} </span>
                       @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email_1">Your Email</label>
                                        <input type="email" id="email_1" name="email"
                                            class="form-control" >
											@error('email')
                            <span class="text-danger">{{ $message }} </span>
                       @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Your Message</label>
                                        <textarea id="message" name="comment" cols="30" rows="5"
                                            class="form-control" ></textarea>
											@error('comment')
                            <span class="text-danger">{{ $message }} </span>
                       @enderror
                                    </div>
                                    <button type="submit" class="btn btn-dark btn-rounded">Send Now</button>
                                </form>
                            </div>
							
                        </div>
                    </section>
                    <!-- End of Contact Section -->
                </div>

                <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                <div class="google-map contact-google-map" id="googlemaps"></div>
                <!-- End Map Section -->
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->







@endsection