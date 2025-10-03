@php
    $page = \Illuminate\Support\Facades\DB::table('pages')->where('id', 33)->first();
    $sections = \Illuminate\Support\Facades\DB::table('section')->where('page_id', 33)->get();
    $banners = \Illuminate\Support\Facades\DB::table('banners')->get();
@endphp

@extends('layouts.app')
@section('title', 'Home')

@section('css')
@endsection

@section('content')

    <section class="hm-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="main-book-sldier">
                        <div class="banner-sliders owl-carousel owl-theme">
                            @foreach ($products as $product)
                                <div class="item">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="banner-content">
                                                <h2 class="typingheading">{{ $product->product_title }}</h2>
                                                <!-- <h2>simply dummy text</h2> -->
                                                {!! $product->description !!}
                                                <div class="banner-btn">
                                                    <a href="{{route("contact")}}" class="btn btn-web trns-btn">Contact</a>
                                                    <a href="#bookssec" class="btn btn-web blue-btn">Books</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="banner-books">
                                                <div class="books-wanhu">
                                                    <div class="atropos my-atropos">
                                                        <div class="atropos-scale">
                                                            <div class="atropos-rotate">
                                                                <div class="atropos-inner">
                                                                    <a href="" id="show"
                                                                        class="main-text-1">
                                                                        <img src="{{ $product->image }}" class="img-fluid"
                                                                            alt="" data-atropos-offset="2">
                                                                    </a>
                                                                    <!-- <div id="hide" class="beast main-after">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <h3>The Legend of Wan Hu</h3>
                                                                    <p>A timeless fable brought to life in lyrical verse, The Legend of Wan Hu tells the story of a young dreamer determined to touch the skies. Set in a faraway land, it follows Wan Hu’s relentless pursuit of flight. A journey marked by hope, ingenuity, and the courage to chase the impossible. Whether his daring attempt soars or falters, his story endures as a lesson in ambition, the necessity of caution, and the beauty of never giving up.</p>
                                                                    <p>With its delicate balance of whimsy and wisdom, this poetic retelling invites readers into a world where dreams stretch beyond the horizon, and imagination has no limits.</p>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="item">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="banner-content">
                                            <h2 class="typingheading">Macabee Brothers</h2>
                                            <!-- <h2>simply dummy text</h2> -->
                                            <p>Spanning two decades of shared labor and laughter, Macabee Brothers
                                                tells the
                                                moving story of two siblings bound by love, tested by pride, and
                                                ultimately
                                                reunited by forgiveness. When an argument fractures a long-standing
                                                partnership on the family farm, the brothers must face the distance
                                                between
                                                them, and the ties that refuse to break.
                                            </p>
                                            <p>This heartfelt tale speaks to the strength of family, the cost of
                                                division,
                                                and the quiet power of reconciliation. Told with warmth and honesty,
                                                it
                                                captures the truth that even the deepest rifts can be mended when
                                                love is
                                                given the chance to lead.
                                            </p>
                                            <div class="banner-btn">
                                                <a href="contact.php" class="btn btn-web trns-btn">Contact</a>
                                                <a href="#bookssec" class="btn btn-web blue-btn">Books</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="banner-books">
                                            <div class="books-wanhu">
                                                <div class="atropos my-atropos">
                                                    <div class="atropos-scale">
                                                        <div class="atropos-rotate">
                                                            <div class="atropos-inner">
                                                                <a href="JavaScript:;" id="show" class="main-text-1">
                                                                    <img src="{{asset("asset/images/macabee-banner-2.png")}}" class="img-fluid"
                                                                        alt="" data-atropos-offset="2">
                                                                </a>
                                                                <!-- <div id="hide" class="beast main-after">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <h3>The Legend of Wan Hu</h3>
                                                                <p>A timeless fable brought to life in lyrical verse, The Legend of Wan Hu tells the story of a young dreamer determined to touch the skies. Set in a faraway land, it follows Wan Hu’s relentless pursuit of flight. A journey marked by hope, ingenuity, and the courage to chase the impossible. Whether his daring attempt soars or falters, his story endures as a lesson in ambition, the necessity of caution, and the beauty of never giving up.</p>
                                                                <p>With its delicate balance of whimsy and wisdom, this poetic retelling invites readers into a world where dreams stretch beyond the horizon, and imagination has no limits.</p>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="banner-content">
                                            <h2 class="typingheading"> Farmer Dell And Jezebell</h2>
                                            <!-- <h2>simply dummy text</h2> -->
                                            <p>Farmer Dell and Jezebel is a warm, rhythmic tale of a patient farmer
                                                and his
                                                strong-willed mule. When stubbornness meets quiet determination,
                                                their day
                                                in the fields becomes a gentle lesson in self-control and the value
                                                of
                                                thinking before acting.
                                            </p>
                                            <p>Set against the charm of country life, this story’s playful rhymes
                                                and vivid
                                                imagery offer children a glimpse into the rewards of patience,
                                                teamwork, and
                                                understanding. More than a farmyard fable, it’s a reminder that
                                                kindness and
                                                calm can guide even the most difficult moments toward harmony.
                                            </p>
                                            <div class="banner-btn">
                                                <a href="contact.php" class="btn btn-web trns-btn">Contact</a>
                                                <a href="#bookssec" class="btn btn-web blue-btn">Books</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="banner-books">
                                            <div class="books-wanhu">
                                                <div class="atropos my-atropos">
                                                    <div class="atropos-scale">
                                                        <div class="atropos-rotate">
                                                            <div class="atropos-inner">
                                                                <a href="JavaScript:;" id="show" class="main-text-1">
                                                                    <img src="{{asset("asset/images/farmer-banner-4.png")}}" class="img-fluid"
                                                                        alt="" data-atropos-offset="2">
                                                                </a>
                                                                <!-- <div id="hide" class="beast main-after">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <h3>The Legend of Wan Hu</h3>
                                                                <p>A timeless fable brought to life in lyrical verse, The Legend of Wan Hu tells the story of a young dreamer determined to touch the skies. Set in a faraway land, it follows Wan Hu’s relentless pursuit of flight. A journey marked by hope, ingenuity, and the courage to chase the impossible. Whether his daring attempt soars or falters, his story endures as a lesson in ambition, the necessity of caution, and the beauty of never giving up.</p>
                                                                <p>With its delicate balance of whimsy and wisdom, this poetic retelling invites readers into a world where dreams stretch beyond the horizon, and imagination has no limits.</p>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="banner-content">
                                            <h2 class="typingheading"> The Crossing</h2>
                                            <!-- <h2>simply dummy text</h2> -->
                                            <p>Based on a true story, The Crossing follows fourteen-year-old Paul
                                                Manz on a
                                                reckless dare that hurls him into the unforgiving current of the
                                                Mississippi
                                                River. Swept nearly twenty-three miles downstream, he endures a
                                                night of
                                                exhaustion, injury, and fear before awakening beside a mysterious
                                                stranger
                                                who offers comfort and then vanishes without a trace.
                                            </p>
                                            <p>Set in 1950s Louisiana, this haunting account is part survival tale,
                                                part
                                                unsolved mystery. It’s a testament to courage, the fragility of
                                                life, and
                                                the moments of grace that arrive when we need them most.
                                            </p>
                                            <div class="banner-btn">
                                                <a href="contact.php" class="btn btn-web trns-btn">Contact</a>
                                                <a href="#bookssec" class="btn btn-web blue-btn">Books</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="banner-books">
                                            <div class="books-wanhu">
                                                <div class="atropos my-atropos">
                                                    <div class="atropos-scale">
                                                        <div class="atropos-rotate">
                                                            <div class="atropos-inner">
                                                                <a href="JavaScript:;" id="show"
                                                                    class="main-text-1">
                                                                    <img src="{{asset("asset/images/crossing-banner-3.png")}}"
                                                                        class="img-fluid" alt=""
                                                                        data-atropos-offset="2">
                                                                </a>
                                                                <!-- <div id="hide" class="beast main-after">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <h3>The Legend of Wan Hu</h3>
                                                                <p>A timeless fable brought to life in lyrical verse, The Legend of Wan Hu tells the story of a young dreamer determined to touch the skies. Set in a faraway land, it follows Wan Hu’s relentless pursuit of flight. A journey marked by hope, ingenuity, and the courage to chase the impossible. Whether his daring attempt soars or falters, his story endures as a lesson in ambition, the necessity of caution, and the beauty of never giving up.</p>
                                                                <p>With its delicate balance of whimsy and wisdom, this poetic retelling invites readers into a world where dreams stretch beyond the horizon, and imagination has no limits.</p>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="back-circle">
            <img src="{{ asset('asset/images/banner-circle.png') }}" class="img-fluid" alt="">
        </div>
    </section>
    <section class="books" id="bookssec">
        <div class="sides-animation tractor-img">
            <img src="{{ asset('asset/images/tractor.png') }}" class="img-fluid" alt="">
        </div>
        <div class="sides-animation donkey-img">
            <img src="{{ asset('asset/images/donkey.png') }}" class="img-fluid" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="book-content">
                        <div class="animate-img right-img">
                            <img src="{{ asset('asset/images/1.png') }}" class="img-fliud" alt="">
                        </div>
                        <h3>
                            “Montz turns a centuries-old legend into a gentle reminder that even the
                            wildest aspirations deserve a moment to shine. This poetic tale plants a
                            spark of possibility in young hearts and reminds us all to keep looking up.”

                            <!--<span class="d-block">expedita aut optio soluta</span>-->
                        </h3>
                        <a href="#reviews" class="btn btn-web blue-btn">More Reviews</a>
                        <div class="animate-img left-img">
                            <img src="{{ asset('asset/images/2.png') }}" class="img-fliud" alt="">
                        </div>
                        <div class="animate-img bird-img">
                            <img src="{{ asset('asset/images/bird.png') }}" class="img-fliud" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="web-books">
                        <h2 class="typingheading">Books</h2>
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt-->
                        <!--    ut labore et dolore magna aliqua.</p>-->
                    </div>
                </div>
                    <div class="col-lg-3">
                        <div class="book-list box">
                            <a href="{{ route('legend_wanhu') }}" id="show1" class="main-text-2">
                                <div class="book-img">
                                    <img src="{{ $legend_wanhu->additional_image }}" class="img-fluid" alt="">
                                </div>
                                <div class="book-name">
                                    <h5>
                                        {{ $legend_wanhu->product_title }}
                                    </h5>
                                </div>
                            </a>

                            {{-- <div id="hide1" class="beast1 main-after akajk">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3>{{ $product->product_title }}</h3>
                                        {!! $product->description !!}
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                <div class="col-lg-3">
                    <div class="book-list box">
                        <a href="{{ route('macabee_brothers') }}" id="show3" class="main-text-3">
                            <div class="book-img">
                                <img src="{{ $macabee_brothers->additional_image }}" class="img-fluid" alt="">
                            </div>
                            <div class="book-name">
                                <h5>
                                    {{$macabee_brothers->product_title}}
                                </h5>
                            </div>
                        </a>

                        {{-- <div id="hide3" class="beast3 main-after akajk">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Farmer Dell and Jezebel</h3>
                                    <p>Farmer Dell and Jezebel is a warm, rhythmic tale of a patient farmer and his
                                        strong-willed mule. When stubbornness meets quiet determination, their day
                                        in the fields becomes a gentle lesson in self-control and the value of
                                        thinking before acting.</p>
                                    <p>Set against the charm of country life, this story’s playful rhymes and vivid
                                        imagery offer children a glimpse into the rewards of patience, teamwork, and
                                        understanding. More than a farmyard fable, it’s a reminder that kindness and
                                        calm can guide even the most difficult moments toward harmony.</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="book-list box">
                        <a href="{{ route('farmer_dell_jezebell') }}" id="show4" class="main-text-4">
                            <div class="book-img">
                                <img src="{{ $farmer_dell_jezebell->additional_image }}" class="img-fluid" alt="">
                            </div>
                            <div class="book-name">
                                <h5>
                                    {{$farmer_dell_jezebell->product_title}}
                            </div>
                        </a>

                        {{-- <div id="hide4" class="beast4 main-after akajk">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>The Crossing</h3>
                                    <p>Based on a true story, The Crossing follows fourteen-year-old Paul Manz on a
                                        reckless dare that hurls him into the unforgiving current of the Mississippi
                                        River. Swept nearly twenty-three miles downstream, he endures a night of
                                        exhaustion, injury, and fear before awakening beside a mysterious stranger
                                        who offers comfort and then vanishes without a trace.</p>
                                    <p>Set in 1950s Louisiana, this haunting account is part survival tale, part
                                        unsolved mystery. It’s a testament to courage, the fragility of life, and
                                        the moments of grace that arrive when we need them most.</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="book-list box">
                        <a href="{{ route('the_crossing') }}" id="show2" class="main-text-2">
                            <div class="book-img">
                                <img src="{{ $the_crossing->additional_image }}" class="img-fluid" alt="">
                            </div>
                            <div class="book-name">
                                <h5>
                                    {{$the_crossing->product_title}}
                                    </h6>
                            </div>
                        </a>
                        {{-- <div id="hide2" class="beast2 main-after akajk">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>The Legend of Wan Hu</h3>
                                    <p>A timeless fable brought to life in lyrical verse, The Legend of Wan Hu tells
                                        the story of a young dreamer determined to touch the skies. Set in a faraway
                                        land, it follows Wan Hu’s relentless pursuit of flight. A journey marked by
                                        hope, ingenuity, and the courage to chase the impossible. Whether his daring
                                        attempt soars or falters, his story endures as a lesson in ambition, the
                                        necessity of caution, and the beauty of never giving up.</p>
                                    <p>With its delicate balance of whimsy and wisdom, this poetic retelling invites
                                        readers into a world where dreams stretch beyond the horizon, and
                                        imagination has no limits.</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-books">
        <div class="sides-animation farmer-img">
            <img src="{{ $sections[1]->value }}" class="img-fluid" alt="">
        </div>
        <div class="sides-animation farmer1-img">
            <img src="{{ $sections[2]->value }}" class="img-fluid" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wanhu-books">
                        <a href="#" class="btn btn-web blue-btn">Buy this on kindle</a>
                        <div class="atropos my-atropos">
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner">
                                        <img src="{{ $page->image }}" class="img-fluid"
                                            alt="" data-atropos-offset="2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-web wth-btn">Buy this on amazon</a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="wanhu-books-content">
                        <h3 class="typingheading">{{ $page->name }}</h3>
                        {!! $page->content !!}
                        <a href="about.php" class="btn btn-web blue-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wanhu-video">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-wanhu">
                        <video width="100%" height="100%" autoplay="" muted="" loop class="mySwiperVideo">
                            <source src="{{ asset('asset/images/roy-video.mp4') }}" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="book-store">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="book-store-logo">
                        <img src="{{ asset('asset/images/store-logo.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="new-audibook">
        <div class="sides-animation farmer2-img">
            <img src="{{ $sections[4]->value }}" class="img-fluid" alt="">
        </div>
        <div class="sides-animation farmer3-img">
            <img src="{{ $sections[5]->value }}" class="img-fluid" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="audibook">
                        <div class="col-lg-12">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="phone-img">
                                        <figure>
                                            <img src="{{ $sections[3]->value }}" class="img-fluid"
                                                alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="phone-img">
                                        {!!$sections[6]->value!!}
                                        <div class="btn-flux">
                                            <a class="btn btn-web wth-btn">Buy this on audible</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonils" id="reviews">
        <div class="contianer-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="main-testimonial">
                        <h2 class="typingheading">Happy People</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-slides">
                        <div class="happy-client owl-carousel owl-theme">
                            @foreach($testimonial as $testimonial)
                            {{-- @dd($testimonial) --}}
                            <div class="item">
                                <div class="main-client">
                                    <img src="{{ asset('asset/images/21.png') }}" class="img-fluid" alt="">
                                    {!!$testimonial->comments!!}
                                    <div class="name-client">
                                        <h6>
                                            {{$testimonial->name}}
                                            <span class="d-block">{{$testimonial->designation}}</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{-- <div class="item">
                                <div class="main-client">
                                    <img src="{{ asset('asset/images/21.png') }}" class="img-fluid" alt="">
                                    <p>“‘Farmer Dell and Jezebel’ teaches big lessons on patience with just the
                                        right amount of rhyme and warmth. Sweet, simple, and full of heart.”
                                    </p>
                                    <div class="name-client">
                                        <h6>
                                            Farmer Dell and Jezebel
                                            <span class="d-block">by Roy Montz</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="main-client">
                                    <img src="{{ asset('asset/images/21.png') }}" class="img-fluid" alt="">
                                    <p>“‘The Crossing’ had me rooting for Paul with every page and reflecting long
                                        after I turned the last one. A gripping testament to teenage courage.”
                                    </p>
                                    <div class="name-client">
                                        <h6>
                                            The Crossing
                                            <span class="d-block"> by Roy Montz</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="main-client">
                                    <img src="{{ asset('asset/images/21.png') }}" class="img-fluid" alt="">
                                    <p>“Montz turns a centuries-old legend into a gentle reminder that even the
                                        wildest aspirations deserve a moment to shine. This poetic tale plants a
                                        spark of possibility in young hearts and reminds us all to keep looking up.”
                                    </p>
                                    <div class="name-client">
                                        <h6>
                                            The Legend of Wan Hu
                                            <span class="d-block">the World’s First Astronaut</span>
                                        </h6>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('js')
@endsection
