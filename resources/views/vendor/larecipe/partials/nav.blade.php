<div class="fixed pin-t pin-x z-40">
    <div class="bg-gradient-primary text-white h-1"></div>

    <nav class="flex items-center justify-between text-black bg-navbar shadow-xs h-16">
        <div class="flex items-center flex-no-shrink">
            <a href="{{ url('/') }}" class="flex items-center flex-no-shrink text-black mx-4 h-8 block">
                <img src="/wave/img/logo.png" alt="Wave logo" class="h-full w-auto">
            </a>

            <div class="switch">
                <input type="checkbox" name="1" id="1" v-model="sidebar" class="switch-checkbox" />
                <label class="switch-label" for="1"></label>
            </div>
        </div>

        <div class="block mx-4 flex items-center">
            


            {{-- versions dropdown --}}
            <larecipe-dropdown>
                <larecipe-button type="primary" class="flex">
                    {{ $currentVersion }} <i class="mx-1 fa fa-angle-down"></i>
                </larecipe-button>

                <template slot="list">
                    <ul class="list-reset">
                        @foreach ($versions as $version)
                            <li class="py-2 hover:bg-grey-lightest">
                                <a class="px-6 text-grey-darkest" href="{{ route('larecipe.show', ['version' => $version, 'page' => $currentSection]) }}">{{ $version }}</a>
                            </li>
                        @endforeach
                    </ul>
                </template>
            </larecipe-dropdown>

        </div>
    </nav>
</div>