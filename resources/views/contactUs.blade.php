<x-layout>

<div class="container-fluid">
    <div class="row justify-content-center mt-4">
        
        <div class="col-12 col-md-6">
           

            <form action="{{route('contact_us')}}" method="POST" class="p-3 shadow ">
                 {{-- ALERT DONE --}}
                 @if (session('emailSented'))
                 <div class="alert alert-success">
                     {{ session('emailSented') }}
                 </div>
                 @endif

                 <h3 class="text-center">
                    Manda una mail:
                </h3>

                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome completo:</label>
                    <input type="name" class="form-control" id="name" name="name" placeholder="es. Mario Rossi">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="es. name@example.com">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number:</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="es. 333-333-6664">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Testo email:</label>
                    <textarea class="form-control" name="message" id="message" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-info" >Contattaci</button>
            </form>

        </div>
    </div>
</div>

    
</x-layout>