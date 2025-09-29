@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo />
    </div>

    <div class="fex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">Laracast</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800">Video Producer</h3>
        <p class="text-sm text-gray- mt-auto">Full Time - From $60,000</p>

        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag>Backend</x-tag>
            @endforeach
        </div>
    </div>
</x-panel>