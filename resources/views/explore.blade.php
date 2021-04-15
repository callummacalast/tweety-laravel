<x-app>
  <div>
    @foreach ($users as $user)
    <a href="{{ $user->path() }}" class="flex items-center mb-5 ">
      <img class="mr-4" src="{{ $user->avatar }}" alt="{{ $user->username }}'s avatar" width="100">


      <div>
      
      
      </div>

      <h4 class="font-bold">{{ '@' . $user->username }}</h4>
    </a>
    @endforeach

    {{ $users->links() }}

  </div>
</x-app>