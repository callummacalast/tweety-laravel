<h3 class="mb-2">Following</h3>

<ul>
@forelse(auth()->user()->follows as $user) 
 <li class="{{ $loop->last ? '' : 'mb-4' }}">
    <div class="flex items-center text-sm">
	<a href="{{ route('profile', $user) }}">
		<img 
		src="{{ $user->avatar }}" 
		alt="Avatar"
		class="rounded-full mr-2"
		width="50"
		>
	</a>
	
	<a href="{{ route('profile', $user)}}">
		{{ $user->name }}			
	</a>
    </div>
  </li>
  @empty
  <p class="p-4">No Friends Yet</p>
  @endforelse
</ul>