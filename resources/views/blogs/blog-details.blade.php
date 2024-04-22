@include('include.header')
<!-- inner banner sec -->
<section class="inner_banner inner_bannerblog">
    <div class="container">
        <div class="inner_box">
            <div class="inner_banner_caption">
                <h1>Blogs</h1>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- inner banner sec end  -->

<!--===================== services section  ===================== -->
<section class="services_section">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-sm-12 text-center">
                <div class="heading">
                    <h2>{{ $blogs->title }}</h2>
                    <p> {!! $blogs->description !!}</p>
                </div>
                <img class="img-fluid" src="{{ asset('storage/'.$blogs->image) }}" alt="" />
            </div>
        </div>

    </div>
</section>

<!--===================== services section end  ===================== -->

@include('include.footer')
