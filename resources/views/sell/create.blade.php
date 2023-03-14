<x-layout>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                
                <form class="p-5 " action="{{route('sell.store')}}" method="POST" enctype="multipart/form-data"> 
                    <h3 class="display-5 text-center">Inserisci una nuova vendita:</h3>
                    
                    @if (session('houseCreated'))
                    <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
                        {{ session('houseCreated') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    
                    
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show border-start border-end">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    
                    @csrf
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Casa:</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo:</label>
                        <input type="double" class="form-control" name="price" id="price">
                    </div>
                    <div class="mb-3">
                        <label for="cover" class="form-label">Foto casa:</label>
                        <input type="file" class="form-control" name="cover" id="cover">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione:</label>
                        <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-outline-danger" >Inserisci annuncio</button>
                </form>

                <form action="{{route('sell.index')}}">
                    <button type="submit" class="btn btn-primary">Torna Indietro</button>
                </form>
                
            </div>
        </div>
    </div>
</x-layout>