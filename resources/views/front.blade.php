@extends('template.app')
@section('content')
<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
                <center>
                    <h3>APLIKASI SIG PEMETAAN LAHAN PERTANIAN KEC.PALARAN</h3> 
                </center>

            <!-- post Atas -->
            <div class="col-md-6">
                <a class="post-img" >
                    <center>
                    <img src="{{asset('front/img/tes.jpg')}}" width="1090px" height="700px"></a>
                    </center>
                <div class="post-body">
            </div>
            <!-- /post Atas --> 
        </div>

        
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <br>
                    <h2>Berita</h2>
                </div>
            </div>
            <div class="clearfix visible-md visible-lg"></div>
        </div>
        <!-- /row -->

        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <!-- <center> -->
                        <div class="clearfix visible-md visible-lg"></div>

                        <!-- post Content-->
                        @foreach ($berita as $a)
                            <div class="col-md-6">
                                <div class="post">
                                    <a class="post-img">
                                        <img src="{{ asset($a->gambar) }}" alt="" width="300" height="300"></a> 
                                    <div class="post-body">
                                        <h3 class="post-title">
                                            <a href="{{ route( 'berita.detail', $a->id ) }}">
                                                <br>
                                                    {{ $a->judul }}
                                                </br>
                                            </a>
                                        </h3>
                                        <div class="post-meta">
                                            <span class="post-date">{{ $a->created_at }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /post Content -->  
                        @endforeach

                        <div class="clearfix visible-md visible-lg"></div>
                    <!-- </center> -->
                </div>
            </div>
        </div>
        <!-- /row Terkait -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
@endsection