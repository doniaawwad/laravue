<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CMS</title>

        <!-- Plugins -->
        <link rel="stylesheet" href="{{ asset('site/css/plugins.css') }}" />
        <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet" />
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <meta name="csrf-token" value="{{ csrf_token() }}" />
    </head>

    <body>


          <!-- =====================================
    	==== Start Loading -->

    <div class="loading">
        <div class="gooey">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <!-- End Loading ====
        ======================================= -->


    @if($message!='')
    <script>
        alert(' {{ $message }}')
    </script>
    @endif
        <div id="app">

            <header-menu loggedin="{{ Auth::check() ? true : false }}"></header-menu>
            <header-section></header-section>






            <!-- =====================================
        ==== Start Features -->

    <section class="features section-padding bg-gray" data-scroll-index="1">
        <div class="container">
            <div class="row">
               <div class="col-lg-12">
                        @foreach($pages as $k=>$page)
                @if($k%2==0)
                    <left-preview title="{{ $page->title }}" description="{{ $page->description }}" image="{{ $page->image }}"></left-preview>
                @else
                    <right-preview title="{{ $page->title }}" description="{{ $page->description }}" image="{{ $page->image }}"></right-preview>
                @endif
            @endforeach

                </div>

            </div>
        </div>
    </section>

    <!-- End Features ====
        ======================================= -->









    <!-- =====================================
        ==== Start Blog -->

    <section class="blog section-padding bg-gray" data-scroll-index="2">
        <div class="container">
            <div class="row">

                <div class="section-head text-center col-lg-8 col-md-10 offset-md-1 offset-lg-2">
                    <h6>Our Blog</h6>
                    <h4>Latest News</h4>
                    <svg class="bord-botm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px">
                        <polyline fill="transparent" stroke="#1dabf2" stroke-width="2" stroke-miterlimit="10" points="51.269,6.716 45.685,2.031 39.086,6.716 32.487,2.031
                            26.904,6.716 20.812,2.031 14.721,6.716 7.614,2.031 2.538,6.716 "/>
                        </svg>
                </div>


                 @foreach($news as $nhl)

                        <news title="{{ $nhl->title }}" image="{{ $nhl->image }}" description="{{ $nhl->description }}"></news>
                    @endforeach







            </div>
        </div>
    </section>

    <!-- End Blog ====
        ======================================= -->












        <!-- =====================================
        ==== Start Contact -->

    <section class="contact section-padding" data-scroll-index="3">
        <div class="container">
            <div class="row">

                <div class="section-head text-center col-lg-8 col-md-10 offset-md-1 offset-lg-2">
                    <h4>Contact Us</h4>
                    <svg class="bord-botm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px">
                        <polyline fill="transparent" stroke="#1dabf2" stroke-width="2" stroke-miterlimit="10" points="51.269,6.716 45.685,2.031 39.086,6.716 32.487,2.031
                            26.904,6.716 20.812,2.031 14.721,6.716 7.614,2.031 2.538,6.716 "/>
                        </svg>
                </div>

                <div class="col-lg-12 contact-info">
                    <div class="row">

                         <contact icon="phone" title="Phone :" content="{{ $contact->phone }}"></contact>
                        <contact icon="envelope" title="Email :" content="{{ $contact->email }}"></contact>
                        <contact icon="map-marker-alt" title="Address :" content="{{ $contact->address }}"></contact>





                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End Contact ====
        ======================================= -->



         <!-- =====================================
        ==== Start Footer -->

    <footer class="dark">


        <div class="sub-footer">
            <div class="container">

            <div class="text-center">
                <p>&copy; 2019 Donia. All Rights Reserved.</p>
                </div>

            </div>
        </div>
    </footer>

    <!-- End Footer ====
        ======================================= -->




        </div><!-- APP -->




        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

        <script src="{{ asset('site/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery-migrate-3.0.0.min.js') }}"></script>


        <!-- scrollIt -->
    <script src="{{ asset('site/js/scrollIt.min.js') }}"></script>

    <!-- custom scripts -->
    <script src="{{ asset('site/js/scripts.js') }}"></script>



    </body>
</html>
