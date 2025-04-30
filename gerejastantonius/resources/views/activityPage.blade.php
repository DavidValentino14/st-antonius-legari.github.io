<x-template>
    <x-slot:title>{{$title}}</x-slot:title>  
</x-template>

<article>
    <div class="place-items-center ">
        <div class="w-[90vw] grid grid-cols-12 gap-[2vw] border-b-2 py-3" style="">
            <div class="col-span-3">
                <img src=" {{ URL ("images\Gereja1.jpg") }}" alt="">
            </div>
            <div class="col-span-9 relative">
                <a href="#" style="color:grey;"><h5 class="card-title">{{$dataGereja['title']}}</h5></a>
                <p class="">{{$dataGereja['body']}}</p>
                <a href="/activity" class="absolute bottom-0 right-20">&laquo; back </a>
            </div>
        </div>
</article>