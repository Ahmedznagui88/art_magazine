<x-layout>
<x-navbar/>
@if (session('emailSent'))
    <div class="alert alert-success w-75">
        {{ 'emailSent' }}
    </div>
@endif
        {{-- art / magazine --}}
        <div class="">
            <div class="div-2 flowing">
                <p class="letter-1">A</p>
                <p class="letter-1">R</p>
                <p class="letter-1">T</p>
            </div>

            <div class="div-3 ">
                <p class="letter-2">M</p>
                <p class="letter-2">A</p>
                <p class="letter-2">G</p>


            </div>
        </div>

        {{-- main frame / rotate --}}

        <div class="div-1">
            <div class="div-img bg-warning rotate" >
                <img  class="img-fluid img" src="./media/art.png" alt="">
            </div>
            <div class="div-omg" style="" >
                <img id="imgDue" style="object-fit: contain;" class="img-fluid" src="./media/woman-circle.jpg" alt="">
            </div>
            <div class="div-omg-1">
                <img id="imgUno" class="img-fluid" src="./media/sfera.jpeg" alt="">
            </div>

        </div>

        <div class="arrow-1">
            <a href="./lab">
                <img class="img-fluid" src="./media/icons8-arrow-100.png" alt="">
            </a>
        </div>

        
</x-layout>
