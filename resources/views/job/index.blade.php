<x-layout>
    <x-breadcrumbs  class="mb-2" :links="['Jobs' => route('jobs.index')]" />
    @foreach ($jobs as $job)
        <x-job-card class="mb-2" :$job>
            <div>
                <x-link-button :href="route('jobs.show', $job)">
                    Show
                </x-link-button>
            </div>
        </x-job-card>
    @endforeach
</x-layout>
