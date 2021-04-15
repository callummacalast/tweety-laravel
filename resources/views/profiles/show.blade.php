

<x-app>


	<header class="mb-6 relative">
	<div class="relative">

		<img 
			src="/images/profileBanner.jpg" 
			alt="Profile Banner"
			class="rounded-lg object-cover h-40 w-full mb-4"
		>

		<img 
			src="{{ $user->avatar }}" 
			alt="Profile Banner"
			class=" absolute bottom-0 rounded-full transform -translate-x-1/2 translate-y-1/2" 
			style="left: 50%;"
			width="100"
		>
	</div>

		<div class="flex justify-between items-center mb-4">
			<div style="max-width: 270px;">

				<h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
				<p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
			</div>
		

			<div class="flex">
			@can ('edit', $user)

				<a href="{{ $user->path('edit') }}" class="bg-white-500 rounded-full border border-grey-400 py-2 px-4 text-black text-sm mr-4">Edit Profile</a>
			@endcan

				<x-follow-button :user="$user"></x-follow-button>
		
			</div>	
		</div>
		<p class="text-sm">
		Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam, cum at. Beatae, rerum reiciendis, quisquam inventore fuga consectetur eius perferendis laboriosam veniam dicta fugiat provident ab. Cupiditate possimus perferendis repellat.
		</p>

	

		


	</header>

   	@include('_timeline', [
		'tweets' => $tweets
   	])
</x-app>
