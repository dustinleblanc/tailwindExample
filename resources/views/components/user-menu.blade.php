
<div
    class="inline-flex relative"
    x-on:mouseenter="open"
    x-on:mouseleave="close"
    x-data="dropdown()">
    <button>
        <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>
    </button>
    <div x-show="isOpen()" class="absolute top-auto mt-5 bg-gray-100 p-4 rounded-lg shadow-lg right-0">
        <x-nav-link class="block text-gray-700" url="#" title="Settings"></x-nav-link>
        <x-nav-link class="block text-gray-700" :url="route('logout')"
                    :title="__('Logout')"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"></x-nav-link>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            {{ csrf_field() }}
        </form>
    </div>
</div>

<script>
    function dropdown() {
        return {
            show: false,
            open() { this.show = true },
            close() { this.show = false },
            isOpen() { return this.show === true }
        }
    }
</script>
