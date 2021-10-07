<x-app>
  <header class="mb-6 relative">
      <div class="relative">
          <img class="rounded-lg mb-2" src="https://wallpapercave.com/wp/wp4110968.jpg" width="700px" height="223px">
          <img src="{{$user->avatar}}"
               alt=""
               class="rounded-full mr-20 absolute bottom-0"
               style="width: 150px; height: 150px; transform: translateX(-50%) translateY(50%);left: 50%" >
      </div>
      <div class="flex justify-between items-center mb-6">
          <div>
              <h2 class="font-bold text-2xl mb-2">{{$user->username}}</h2>
              <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
          </div>
          <div class="flex">
              @if(current_user()->is($user))
              <a class="rounded-full border border-gray-300 py-2 px-4 text-green-500 mr-2 text-xs" href="{{$user->path('edit')}}">
                  Edit Profile
              </a>
              @endif
             <x-follow-button :user="$user">

             </x-follow-button>
          </div>

      </div>
      <p> This is my long-winded bio.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Justo donec enim diam vulputate ut pharetra sit. Aliquet sagittis id consectetur purus.</p>
  </header>
    @include('_timeline',[
    'tweets'=>$tweets
])

</x-app>
