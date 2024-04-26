@extends('layout.layout')
@section('body')

<head>
    <style>
        url('https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap');

body{

  background-color: #eee;
}

.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #495057;
    background-color: transparent;
    border-color: transparent;
    border-bottom: 3px solid #000;

}

.nav-tabs>li>a{

  text-transform: uppercase;
  color: #000;
      font-weight: 500;
}

.nav-tabs .nav-link:hover {
    border-color: transparent;
    border-bottom: 3px solid #000
}

.navbar{

      border-bottom: 1px solid #00000012;
      padding-top: 0rem !important;
      padding-bottom: 0rem !important;
          background-color: #ffffff!important;
}

.navbar-brand{

  font-size: 24px;
  text-transform: uppercase;
  font-family: 'Allerta Stencil', sans-serif;
  font-weight: 500;
}

.nav-tabs {
    border-bottom: none;
    align-self: center;
}

.card{

  border:none;

}

.card-body {
    flex: 1 1 auto;
    padding: 10px;
}

.card-text{

  font-size: 13px;
}

.guarantee{

  color: #05882c;
  margin-left: 4px;
  font-weight: 700

}

hr{
    margin: 0.2rem 0;
   color: #bfbebe;
}

.buttons button{

  text-transform: uppercase;
  font-size: 12px;
  border-radius: 2px;
}
    </style>
</head>



        <div class="container-fluid px-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
                <div class="container-fluid justify-content-center" >
                    <ul class="nav nav-tabs" id="myTab" role="tablist" >
                        <li class="nav-item" role="presentation"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Vật liệu xây dựng</a> </li>
                        <li class="nav-item" role="presentation"> <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Nội thất</a> </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container mt-2 mb-5">
            <div class="products">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="d-flex justify-content-between p-3 bg-white mb-3 align-items-center"> <span class="font-weight-bold text-uppercase">Vật liệu xây dựng</span>
                        </div>
                        <div class="row g-3">
                            @foreach ($pr1 as $p1 )
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="{{route('list',$p1->id)}}"> <img src="{{ asset('img/1.jpg')}}" class="card-img-top"></a>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between"> <span class="font-weight-bold">{{$p1->name}}</span>
                                        {{-- <span class="font-weight-bold">$550</span> --}}
                                    </div>

                                        <p class="card-text mb-1 mt-1">{{$p1->description}}</p>
                                    </div>
                                    <hr>
                                    {{-- <div class="card-body">
                                        <div class="text-right buttons"> <button class="btn btn-outline-dark">add to wishlist</button> <button class="btn btn-dark">Add to cart</button> </div>
                                    </div> --}}
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <!--Dining-->
                        <div class="d-flex justify-content-between p-3 bg-white mb-3 align-items-center"> <span class="font-weight-bold text-uppercase">Nội thất</span>
                        </div>
                        <div class="row g-3">
                            @foreach ($pr2 as $p2 )
                            <div class="col-md-4">
                                <div class="card">
                                <a href="{{route('list',$p2->id)}}"> <img src="{{ asset('img/2.jpg')}}" class="card-img-top"></a>

                                    <div class="card-body">
                                        <div class="d-flex justify-content-between"> <span class="font-weight-bold">{{$p2->name}}</span>
                                            {{-- <span class="font-weight-bold">$450</span> --}}
                                         </div>
                                        <p class="card-text mb-1 mt-1">{{$p2->description}}</p>
                                    </div>
                                    <hr>
                                    {{-- <div class="card-body">
                                        <div class="text-right buttons"> <button class="btn btn-outline-dark">add to wishlist</button> <button class="btn btn-dark">Add to cart</button> </div>
                                    </div> --}}
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection


