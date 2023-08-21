@extends('./layouts.app')

@section('content')
    <body>
    <div class="relative min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mb-10">
                @include('partials/nav-bar')
            </div>
            <div class="mb-10">
                <livewire:contact-form></livewire:contact-form>
            </div>
            <div class="mb-10">
                @include('partials/contact-information')
            </div>
        </div>
    </div>
    </body>
@endsection
