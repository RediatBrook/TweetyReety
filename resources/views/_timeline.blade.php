<div class=" p-4 rounded-lg {{($tweets->isEmpty())?'':'bg-gray-700'}}">
    @foreach($tweets as $tweet)
        @include('_tweet')
    @endforeach

</div>
