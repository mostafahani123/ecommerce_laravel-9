@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-lg-8 offset-lg-2 text-center my-5 ">
        <div class="section-title">	
            <h3><span class="orange-text">اقسام</span> الموقع</h3>
            <p>متعه التسوق عبر فورعنا</p>
        </div>
    </div>
</div>

<div class="row">
    @foreach ($categors as $item)
        
  
   
    <div class="col-lg-4 col-md-6 text-center">
        <div class="single-product-item">
            <div class="product-image">
                <a href="{{url("/product/{$item->id}")}}"><img src="{{$item-> imagepath}}" style="max-height:250px; min-height:250px; !important " alt=""></a>
            </div>
            <h3>{{$item->name}}</h3>
        </div>
      
    </div>
    @endforeach
</div>
</div>
</div>


@endsection