<div class="card d-flex flex-column" style="width: 10rem; height: 100%">
    <img src="{{Storage::url($product->img)}}" class="card-img-top" alt="">
    <div class="card-body p-2 d-flex flex-column">
        <h5 class="card-title">{{$product->name}}</h5>
        <h6 class="card-subtitle mb-3">{{$product->price}}€</h6>
        <p class="card-text">{{$product->description}}</p>
        <a href="#" class="btn btn-primary btn-sm mt-auto ">Continua a leggere</a>
    </div>
</div>