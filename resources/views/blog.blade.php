@extends('layout.app')
 
@section('content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Blogs</div>
 
                <div class="card-body">
                    <ul>
                        @foreach ($blogs as $data)
                         <a href="{{ route('blog', $data->post_slug) }}"><li>{{ $data->post_title }}</li></a>
                        @endforeach
                    </ul>
                </div>
                 
            </div>
        </div>
    </div>
</div> --}}

    <section class="tm-section">
        <div class="container-fluid">
            <div class="row">
              @foreach ($blogs as $data)
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="tm-content-box">
                        <img src="img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                        <h4 class="tm-margin-b-20 tm-gold-text">{{ $data->post_title }}</h4>
                        <p class="tm-margin-b-20"></p>
                        <a href="{{ route('blog', $data->post_slug) }}" class="tm-btn text-uppercase">Detail</a>

                    </div>
                </div>
             @endforeach
            </div> 
        </div>
    </section>
@endsection