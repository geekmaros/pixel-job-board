@props([
    "job",
])
<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>

    <div class="flex-1 flex flex-col">
        <a
            href=""
            class="self-start text-sm text-gray-400 transition-colors duration-300"
        >
            <a target="_blank" href="{{ $job->url }}">{{ $job->title }}</a>
        </a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800">
            {{ $job->title }}
        </h3>
        <p class="text-sm font-medium mt-auto">
            {{ $job->schedule }} - From {{ $job->salary }}
        </p>
    </div>

    <div class="space-x-1">
        @foreach ($job->tags as $tag)
            <x-tag :tag="$tag" />
        @endforeach
    </div>
</x-panel>
