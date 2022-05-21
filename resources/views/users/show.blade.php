<x-guest-layout>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{ route('home') }}" class="nav-link px-2 text-white">LinkTree</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                </form>
                @if (Route::has('login'))
                    <div class="text-end">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-outline-warning me-2">Sign-up</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
      </header>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
                    {{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"> --}}
                        {{-- <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"> --}}
                            @foreach ($links as $link)
                                <a href="{{ $link->body }}" class="btn btn-outline-dark me-2 m-4">{{ $link->name }}</a>
                                {{-- <p class="p-6 border-b border-gray-500 m-4">{{ $link->name }}</p> --}}
                            @endforeach

                            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                                    This is the footer. Website by @ McMillan 2022
                                </div>
                            </div>
                        {{-- </div> --}}
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
