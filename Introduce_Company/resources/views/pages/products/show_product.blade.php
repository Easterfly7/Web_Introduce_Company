@extends('layout.layout')
@section('body')
<head>
    <style>

body {
    background: #fff;

}

.carousel-item {
    width: 100%
}

.price span {
    font-size: 18px
}

.cut {
    text-decoration: line-through;
    color: red
}

.icons i {
    font-size: 17px;
    color: green;
    margin-right: 2px
}

.offers i {
    color: green
}

.delivery i {
    color: blue
}

label.radio {
    cursor: pointer
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio span {
    padding: 2px 11px;
    margin-right: 3px;
    border: 1px solid #8f37aa;
    display: inline-block;
    color: #8f37aa;
    border-radius: 3px;
    text-transform: uppercase
}

label.radio input:checked+span {
    border-color: #8f37aa;
    background-color: #8f37aa;
    color: #fff
}
    </style>
</head>
    <div class="container_12 justify-content-center">
        <div class="row">
        @foreach ($pr1 as $p1)
        <div class="col-md-12">
            <div class="carousel slide" data-ride="carousel" id="carousel-1">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active"><img class="img-thumbnail w-100 d-block" src="{{ asset('img/1.jpg')}}" alt="Slide Image" loading="lazy"></div>
                    <div class="carousel-item"><img class="img-thumbnail w-100 d-block" src="{{ asset('img/3.jpg')}}" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="img-thumbnail w-100 d-block" src="{{ asset('img/2.jpg')}}" alt="Slide Image"></div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                    <li data-target="#carousel-1" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
        <div class="col-md-12">
            <h4>{{$p1->name}}</h4>
                <div class="price">
                @if ($p1->price == 0)
                 <span class="mr-2" style="color: red;"></i>
                &nbsp;Liên hệ</span></div>
                @else
                <span class="mr-2"></i>
                &nbsp;{{ number_format($p1->price) }} VND</span></div>
                @endif

            <div class="d-flex flex-row">
                {{-- <div class="icons mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></div><span>1200 ratings &amp; 564 reviews</span> --}}
            </div>
            <div class="d-flex align-items-center"></i><span class="ml-1">{{$p1->description}}<br></span></div>
           <hr>
            <div class="mt-3"><button class="btn btn-primary" type="button">Liên hệ để được tư vẫn và hỗ trợ</button></div>
        </div>
        @endforeach


    </div>
</div>

@endsection
