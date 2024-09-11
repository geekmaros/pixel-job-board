@props([
    "employer",
    "width" => 90,
])
<img
    src="{{ asset($employer->logo) }}"
    class="rounded-xl"
    alt="User Avatar"
    width="{{ $width }}"
/>
