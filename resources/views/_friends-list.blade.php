<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @forelse(auth()->user()->follows as $user)
    <li class="mb-4">
        <div class="flex items-center text-sm">
            <a href="{{route('profile',$user)}}"><img src="{{$user->avatar}}"  width="50px" height="50px" alt="" class="rounded-full mr-2"></a>
            <a href="{{route('profile',$user)}}"><p class="font-bold">{{$user->username}}</p></a>
        </div>
    </li>
    @empty
        <li>
            No friends yet!
        </li>
    @endforelse
</ul>
