<x-layout>
    
    <div class="container-fluid p-0 sellBg">
        <div class="row p-4 text-white text-center title_bg">
            <div class="col-12">
                <h2 class="display-5">Vendite</h2>

                
                
                @if (session('sellDeleted'))
                <div class="alert alert-danger alert-dismissible fade show border-start border-end" role="alert">
                    {{ session('sellDeleted') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                
                @if (session('houseUpdated'))
                <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
                    {{ session('houseUpdated') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                
            </div>
        </div>
    </div>

            <div class="col-12 align-item-center">
                   <a href="#explore-section">
                       <i class="bi bi-chevron-down display-5 text-white scrollArrow"></i>
                   </a>
            </div>

    <div class="container-fluid cardBg" id="explore-section">
        <div class="row justify-content-center">
            
            @if (count($sells))
            
            @foreach($sells as $sell)
            <div class="col-12 col-md-5 mb-2">
                <div class="card shadow position-relative custom-card mt-5 bg-transparent border-0 pb-1">
                    @if (!$sell->cover)
                    <img src="https://picsum.photos/300/200" class="img-fluid card-img-top" alt="...">
                    @else
                    <a href="{{route('sell.show', compact('sell'))}}">
                        <img src="{{Storage::url($sell->cover)}}" class="img-fluid card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="p-1 text-dark d-flex justify-content-between">
                        <h5 class="ps-2 ">{{$sell->name}}</h5>
                        <h6 class="ps-2 pe-4 fst-italic text-muted">{{$sell->price}} €</h6>
                    </div>
                    <div class="d-flex position-absolute button_position">
                        <a href="{{route('sell.show', compact('sell'))}}" class="btn btn-custom btn-dark">Leggi di più</a>
                        <br>
                        <a href="{{route('sell.edit', compact('sell'))}}" class="btn btn-warning ms-5 ">Modifica</a>
                        <form action="{{route('sell.destroy', compact('sell'))}}" method="POST" class="ms-1">
                            @csrf @method('delete')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            
            @else
            <div class="col-12 d-flex justify-content-center fs-3 sellBg">
                <p class="bg-info rounded px-2 mt-5"> Ancora non ci sono Contenuti</p> 
            </div>
            @endif
            
        </div>
    </div>
    
</x-layout>