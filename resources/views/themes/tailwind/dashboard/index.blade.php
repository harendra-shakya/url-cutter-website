@extends('theme::layouts.app')

@section('content')
    <form action="{{ route('wave.settings.profile.put') }}" method="POST" enctype="multipart/form-data">
	<div class="relative flex flex-col px-10 py-8 lg:flex-row">
		
		<div class="grid-cols-2">
				<label for="name" class="block text-sm font-medium leading-5 text-gray-700">Enter a URL</label>
				<div class="mt-1 rounded-md shadow-sm">
					<input id="name" type="text" name="name" placeholder="Name" value="{{ Auth::user()->name }}" required class="w-full form-input">
				</div>
				<button class="flex self-end justify-center w-auto px-4 py-2 mt-5 text-sm font-medium text-white transition duration-150 ease-in-out border border-transparent rounded-md bg-wave-600 hover:bg-wave-500 focus:outline-none focus:border-wave-700 focus:shadow-outline-wave active:bg-wave-700" dusk="update-profile-button">Save</button>
			</div>
	

			<div class="flex justify-end w-full">
				
		</div>
	</div>

	{{ csrf_field() }}



</form>

@endsection
