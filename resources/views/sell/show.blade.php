<x-layout>
    
    <h2 class="text-center bg-dark text-white p-4">VENDITA SINGOLA</h1>
    
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7">
                <img src="{{Storage::url($sell->cover)}}" class="card-img-top" alt="">
            </div>
            <div class="col-12 col-md-5 d-flex justify-content-center">
                <div class="">
                    <h5 class="card-title">{{$sell->name}}</h5>
                    <p class="card-text">{{$sell->price}} €</p>
                    <p class="card-text">{{$sell->description}}</p>
                    <a href="{{(route('sell.index'))}}" class="btn btn-primary">torna indietro</a>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-4">
                <div class="card text-dark position-relative">
                    <img src="{{ Storage::url($sell->cover) }}" class="card-img opacity" alt="...">
                    <div class="card-body position-absolute top-0 start-0 font-weight-bold text-wrap">
                        <h5 class="card-title">{{ $sell->title }}</h5>
                        <p class="card-text">{{ $sell->description }}</p>
                        <p class="card-text">Prezzo: {{ $sell->price }}</p>
                        <a href="{{route('sell.index')}}" class="btn btn-primary">Acquista</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
</x-layout>