   @extends('front/layout')
   @section('page_title','Home Page')
   @section('container')   
        <!-- Page Header-->
        <header class="masthead" style="background-image: url({{asset('front_asset/assets/img/home-bg.jpg')}})">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>My Blog</h1>
                            <span class="subheading">A Blog Theme by Start Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    @foreach($data as $value)
                    <div class="post-preview">
                        <a href="{{url('showpost/'.$value->id)}}">
                            <h2 class="post-title">{{$value->title}}</h2>
                            <h3 class="post-subtitle">{{$value->short_desc}}</h3>
                        </a>
                        <p class="post-meta">Post on {{$value->added_on}}</p>                  
                            
                           
                        
                    </div>
                    @endforeach

                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
        @endsection