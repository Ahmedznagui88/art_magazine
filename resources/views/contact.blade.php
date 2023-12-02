<x-layout>

  <x-navbar>

  </x-navbar>

    @if (session('emailSent'))
     <div class="alert alert-success div-alert rounded-0 text-center">
        {{ session('emailSent') }}
    </div> 
    @elseif (session('emailError'))

    <div class="alert alert-danger div-alert rounded-0 text-center">
      {{ session('emailError') }}
    </div> 

       @endif   
   

    <div class="container cont-form ">
        <div class="row justify-content-center">

            <div class="col-6 col-md-4 div-form">

                <form action="{{ route('send.contact') }}" method="POST" class="shadow p-5">
                    @csrf 
                    <div class="mb-3 text-light">
                        <label for="name" class="form-label ">Name/Surname</label>
                        <input type="text " name="name " class="form-control bg-transparent rounded-0 text-light" id="name">
                      </div>

                    <div class="mb-3 text-light">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control bg-transparent rounded-0 text-light" id="email">
                    </div>
                    <div class="mb-3 text-light ">
                      <label for="User_Message" class="form-label">Message</label>
                      <textarea name="user_message" class="form-control bg-transparent rounded-0 text-light" id="" cols="10" rows="4"></textarea>
                      
                    </div>
                    
                    <button type="submit" class="btn btn-dark rounded-0">Contact us</button>
                  </form>

            </div>

        </div>
        
    </div>

    <div class="arrow">
      <a href="./artists">
          <img class="img-fluid" src="./media/icons8-arrow-100 .png" alt="">
      </a>
  </div>
  
 {{--  <div class="arrow-1">
      <a href="./contact">
          <img class="img-fluid" src="./media/icons8-arrow-100.png" alt="">
      </a>
  </div> --}}


  <div class="clicko">

  </div>

</x-layout>
