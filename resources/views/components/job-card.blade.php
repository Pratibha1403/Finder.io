@props(['job'])
<x-panel class="flex flex-col text-center ">
    <div class="self-start text-sm">{{$job->employer->name}}</div>
    <div class="py-8 ">
        <h3 class="group-hover:text-blue-600 font-bold text-lg transition-colors duration-300">{{$job->title}}</h3>
        <p class="text-sm mt-4">{{$job->job_type}} - {{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
            <x-tag :$tag size="small" />
            @endforeach
           
        </div>
        <x-employer-logo :width="40" />
    </div>
</x-panel>