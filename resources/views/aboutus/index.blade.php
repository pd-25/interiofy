@include('include.header')


<section class="inner_banner">
    <div class="container">
        <div class="inner_box">
            <div class="inner_banner_caption">
                <h1>About Us</h1>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-info">
                    <h5>About Us</h5>
                    {!! @$aboutus->description !!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-interiofy-pic">
                    <img src="{{ asset('storage/'.@$aboutus->image) }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-challenge-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="challenge-box">
                    <div class="challenge-info">
                        <span><img src="images/icon-01.webp" alt="" /></span>
                        <div class="challenge-content">
                            <h4><a href="#">{{ @$aboutus->title_one }}</a></h4>
                            {!! @$aboutus->title_one_description !!}
                        </div>
                        <div class="read-more-btn">
                            <a href="#">Read More <i class="fas fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="challenge-box">
                    <div class="challenge-info">
                        <span><img src="images/icon-02.webp" alt="" /></span>
                        <div class="challenge-content">
                            <h4><a href="">{{ @$aboutus->title_two }}</a></h4>
                            {!! @$aboutus->title_two_description !!}
                        </div>
                        <div class="read-more-btn">
                            <a href="">Read More <i class="fas fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="challenge-box">
                    <div class="challenge-info">
                        <span><img src="images/icon-03.webp" alt="" /></span>
                        <div class="challenge-content">
                            <h4><a href="">{{ @$aboutus->title_three }}</a></h4>
                            {!! @$aboutus->title_three_description !!}
                        </div>
                        <div class="read-more-btn">
                            <a href="">Read More <i class="fas fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--//////////////////////////// (We will later add FAQS as well in future)/////////////// --}}
{{-- <section class="mb-70">
    <div class="container faq">
        <div class="heading">
            <h2>FAQ</h2>
        </div>
        <div id="accordion" class="accordion">
            <div class="card mb-0">
                <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                    <a class="card-title"> {{ @$aboutus->title_one_faq }} </a>
                </div>
                <div id="collapseOne" class="card-body collapse show" data-parent="#accordion">
                    <p>
                        {{ @$aboutus->faq_item_one_description }}
                    </p>
                </div>
                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    <a class="card-title"> {{ @$aboutus->title_two_faq }} </a>
                </div>
                <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                    <p>
                        {{ @$aboutus->faq_item_two_description }}
                    </p>
                </div>
                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                    <a class="card-title"> {{ @$aboutus->title_three_faq }} </a>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        {{ @$aboutus->faq_item_three_description }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


@include('include.footer')
