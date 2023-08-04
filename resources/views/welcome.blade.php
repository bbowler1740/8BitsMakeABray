@extends('./layouts.app')

@section('content')
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8">
                    @include('partials/about-me-card')
                </div>
                <div class="mt-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        @include('partials/projects-card')
                        @include('partials/blog-posts-card')
                        @include('partials/resume-card')
                        @include('partials/contact-card')
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
