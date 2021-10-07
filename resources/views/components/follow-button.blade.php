@if(auth()->user()->isNot($user))
    <form method="POST" action="/profiles/{{$user->username}}/follow">
        @csrf

        <button class="bg-green-500 rounded-full shadow py-2 px-4 text-white text-xs"
                type="submit">
            {{auth()->user()->following($user)?'Unfollow Me' : 'Follow me'}}
        </button>
    </form>
@endif

