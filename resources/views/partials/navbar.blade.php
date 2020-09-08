<nav class="bg-orange-600 shadow mb-8 py-6">
    <div class="container px-6 md:px-0">
        <div class="flex items-center justify-center">
            <div class="mr-6">
                <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <div class="flex-1" style="">
                <x-nav-link url="/stuff" title="Things"></x-nav-link>
                <x-nav-link x-on="" url="#" title="Alert!"></x-nav-link>
                <a href="#" class="nav-link">new link</a>
            </div>
            <div class="flex-1 text-right">
                @guest
                    <x-nav-link :url="route('login')" :title="__('Login')"></x-nav-link>
                    @if (Route::has('register'))
                        <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <x-user-menu></x-user-menu>
                @endguest
            </div>
        </div>
    </div>
</nav>

<h2 class="text-6xl text-orange-600">Hi guys!</h2>
<div class="prose">

</div>
