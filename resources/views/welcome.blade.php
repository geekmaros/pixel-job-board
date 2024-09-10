<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h3 class="text-4xl font-bold">Find Your Dream Job</h3>

            <form action="" class="mt-6">
                <input
                    type="text"
                    placeholder="Web Developer..."
                    name=""
                    id=""
                    class="rounded-xl bg-white/5 border focus:outline-transparent border-white/10 max-w-lg w-full px-5 py-4"
                />
            </form>
        </section>
        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6 space-y-3">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section>
    </div>
</x-layout>
