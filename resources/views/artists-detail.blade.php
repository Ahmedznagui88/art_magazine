<x-layout> 
    <x-navbar/>
    <div  class="container-1 ">
        <div class="card-int">
            <p class="artist-name">{{ $artist['name'] }}</p>
            <x-card picture="{{ $artist['picture' ] }} " id="{{ $artist['id'] }}">
            </x-card>
        </div>
    </div>

    
</x-layout>

