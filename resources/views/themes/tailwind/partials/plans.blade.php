<div class="flex flex-wrap mx-auto mt-12 max-w-7xl">
    @foreach(Wave\Plan::all() as $plan)
        @php $features = explode(',', $plan->features); @endphp

        <div class="w-full max-w-md px-0 mx-auto mb-6 lg:w-1/3 lg:px-3 lg:mb-0">
            <div class="relative flex flex-col h-full mb-10 bg-white border border-gray-200 rounded-lg shadow-xl border-b-none sm:mb-0">
                <div class="px-10 pt-7">
                    <div class="absolute right-0 inline-block mr-6 transform">
                        <h2 class="relative z-20 w-full h-full px-2 py-1 text-xs font-bold leading-tight tracking-wide text-center uppercase bg-white border-2 @if($plan->default){{ 'border-wave-400 text-wave-500' }}@else{{ 'border-gray-900 text-gray-800' }}@endif rounded">{{ $plan->name }}</h2>

                    </div>
                </div>

                <div class="px-10 mt-5">
                    <span class="font-mono text-5xl font-bold">${{ $plan->price }}</span>
                    <span class="text-lg font-bold text-gray-500">per month</span>
                </div>

                <div class="px-10 mt-6 pb-9">
                    <p class="text-lg leading-7 text-gray-500">{{ $plan->description }}</p>
                </div>

                <div class="relative px-10 pt-0 pb-12 mt-auto text-gray-700 rounded-b-lg">

                    <ul class="flex flex-col space-y-2.5">
                        @foreach($features as $feature)
                            <li class="relative">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-3 text-green-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
                                    </svg>

                                    <span>
                                        {{ $feature }}
                                    </span>
                                </span>
                            </li>
                        @endforeach
                    </ul>


                </div>

                <div class="relative">
                        <div onclick="window.location.href='https://t.me/the_url_cutter_bot'" data-plan="{{ $plan->plan_id }}" class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-white transition duration-150 ease-in-out @if($plan->default){{ ' bg-gradient-to-r from-wave-600 to-indigo-500 hover:from-wave-500 hover:to-indigo-400' }}@else{{ 'bg-gray-800 hover:bg-gray-700 active:bg-gray-900 focus:border-gray-900 focus:shadow-outline-gray' }}@endif border border-transparent cursor-pointer rounded-b-md checkout focus:outline-none disabled:opacity-25">
                            @subscribed($plan->slug)
                                You are subscribed to this plan
                            @notsubscribed
                                @subscriber
                                    Switch Plans
                                @notsubscriber
                                    Get Started
                                @endsubscriber
                            @endsubscribed
                        </div>
                    </div>

            </div>
        </div>

    @endforeach
</div>

