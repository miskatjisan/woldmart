@extends('frontend.common.product_master')

@section('product_content')

@section('title')

Faq 

@endsection

<!-- Start of Main -->
<main class="main">
            <!-- Start of Page Header -->
            <div class="page-header" style="height: 180px;">
                <div class="container">
                    <h1 class="page-title mb-0">FAQs</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-10 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>FAQs</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <div class="page-content faq">
                <div class="container">
                    <section class="content-title-section">
                        <h3 class="title title-simple justify-content-center bb-no pb-0">Frequent Asked
                            Questions
                        </h3>
                        <!-- <p class="description text-center">You can show the faqs with <b>Wolmart Elements</b> easily.</p> -->
                    </section>

                    <section class="mb-6">
                        <h4 class="title title-center mb-5"></h4>
                        <div class="row">

                        @foreach($faq->chunk(2) as $chunk)

                            <div class="col-md-6 mb-8">
                                <div class="accordion accordion-bg accordion-gutter-md accordion-border">
                                   
                                @foreach($chunk as $items)
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse1-2" class="expand">
                                            @if(session()->get('language') == 'others')
                          
                          {{ ($items->question_others)  }}
                          @else
                          
                          {{ ($items->question_en)  }}
                          @endif
                                            </a>
                                        </div>
                                        <div id="collapse1-2" class="card-body collapsed">
                                            <p class="mb-0">
                                            @if(session()->get('language') == 'others')
                            {!! $items->answer_others !!}
                            @else
                            {!! $items->answer_en !!}
                            @endif
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

    @endforeach

                            <!-- <div class="col-md-6 mb-8">
                                <div class="accordion accordion-bg accordion-gutter-md accordion-border">
                        
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse1-4" class="expand">What Shipping Methods are Available?</a>
                                        </div>
                                        <div id="collapse1-4" class="card-body collapsed">
                                            <p class="mb-0">Fringilla urna porttitor rhoncus dolor purus. Luctus venenatis lectus  semper bibendum
                                                Diam maecenas ultricies mi eget mauris. Nibh tellus molestie nunc non isse faucibus 
                                                Ultrices eros in cursus turpis massa tincidunt. Ante in nibh mauri eger enim neque volu
                                                lectus. Etiam non quam lacus suspendisse faucibus.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        
                    </section>

 
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->






@endsection