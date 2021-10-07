<x-app>
    <div>
        @foreach($users as $user)
            <a href="{{$user->path()}}" class="flex items-center mb-5">
                <img src="{{$user->avatar}}"
                    class="inline object-cover w-16 h-16 mr-4 rounded-full"
                    alt="{{$user->username}}'s avatar">
            <div>
                <h4 class="font-bold">
                    {{'@'.$user->username}}
                </h4>
            </div>
            </a>
        @endforeach
    </div>
</x-app>
