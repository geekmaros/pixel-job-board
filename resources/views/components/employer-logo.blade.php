@props(["width" => 90])
<img
    src="http://picsum.photos/seed/{{ rand(0, 100000) }}/{{ $width }}/{{ $width }}"
    class="rounded-xl"
    alt="User Avatar"
/>
