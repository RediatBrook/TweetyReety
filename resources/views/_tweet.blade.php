<div class=" mb-4 flex p-4 border-b border-b-gray-400 rounded-lg  bg-green-300 font-semibold">
    <div class="mr-2 flex-shrink-0">
        <a href="{{route('profile',$tweet->user)}}"><img src="{{$tweet->user->avatar}}" width="60px" height="60px" alt="" class="inline object-cover w-16 h-16 mr-2 rounded-full"></a>
    </div>
    <div>
        <a href="{{route('profile', $tweet->user)}}"><h5 class="font-bold mb-4">{{$tweet->user->name}}</h5></a>
        <p class="text-sm">{{$tweet->body}} </p>
        <x-like-buttons :tweet="$tweet">

        </x-like-buttons>
    </div>
</div>
