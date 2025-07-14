<div>
    {{-- Hero Section --}}
    @include('components.partial.banner')

    {{-- Static Sections --}}
    @include('components.partial.services')
    @include('components.partial.about')
    @include('components.partial.courses')
    @include('components.partial.facts')
    @include('components.partial.team')
    @include('components.partial.testimonials')
    @include('components.partial.events')

    {{-- Livewire Contact Form --}}
    <livewire:contact-form />
</div>
