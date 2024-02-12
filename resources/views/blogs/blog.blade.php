@include('include.header')
<!-- inner banner sec -->
<section class="inner_banner">
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


        <div class="row my_gap">

            @forelse ($blogs as $row)
            <div class="col-sm-4">
                <a href="{{ route('blog-details',[$row->id])}}" class="service_area">
                    <div class="image_box">
                        <img class="img-fluid" src="{{ asset('storage/'.$row->image) }}" alt="" />
                        <span class="fevorite_btn">
                            <i class="fa-solid fa-heart"></i>
                        </span>
                    </div>
                    <button class="btn custom_btn" href="#">
                        <span class="bt_text">{{ $row->title }}</span>
                        <span class="tb_icon"><i class="fas fa-long-arrow-right" aria-hidden="true"></i></span>
                    </button>
                </a>
            </div>
            @empty

            @endforelse

        </div>
    </div>
</section>

<!--===================== services section end  ===================== -->

@include('include.footer')
