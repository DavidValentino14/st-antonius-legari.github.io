<x-template>
    <x-slot:title>{{$title}}</x-slot:title>  
</x-template>

<h1 style="font-family: DM Serif Display, serif;" class="text-5xl lg:text-7xl text-center pb-10 pt-5">Activity</h1>

@foreach($dataGerejas as $data)
    <article>
        <div class="place-items-center ">
            <div class="w-[90vw] grid grid-cols-12 gap-[2vw] border-b-2 py-3" style="">

                <div class="col-span-3">
                    <img src=" {{ URL ("images\Gereja1.jpg") }}" alt="">
                </div>

                <div class="col-span-9 relative">
                    <a href="#" style="color:grey;"><h5 class="card-title">{{$data['title']}}</h5></a>
                    <p class="">{{Str::limit($data['body'], 150);}}</p>
                    <a href="/activity/{{ $data['slug'] }}" class="absolute bottom-0 right-20">See more &raquo;</a>
                </div>
            </div>
    </article>
@endforeach
