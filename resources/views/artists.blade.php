<x-layout>
    <x-navbar/>
    <div class="lab-2">
        <p>ARTISTS</p>
    </div>
    {{-- cards --}}
    <div  class="container-1">
        @foreach ($artists as $artist)
        <div class="card-int">
            <p class="artist-name">{{ $artist['name'] }}</p>
            <x-card
            picture="{{ $artist['picture'] }}"
            id="{{ $artist['id'] }}"
            />
        </div>
        @endforeach
    </div>
    {{-- arrow --}}
    <div class="arrow">
        <a href="./lab">
            <img class="img-fluid" src="./media/icons8-arrow-100 .png" alt="">
        </a>
    </div>
    
    <div class="arrow-1">
        <a href="./contact">
            <img class="img-fluid" src="./media/icons8-arrow-100.png" alt="">
        </a>
    </div>
         
</x-layout>

