<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">
    <form method="POST" action="/tweets">
        @csrf
                    <textarea
                        name="body"
                        class="w-full"

                        placeholder="What's cooking?"></textarea>
        <hr class="my-4">
        <footer class="flex justify-between">
            <img src="{{auth()->user()->avatar}}"
                 width="50px"
                 height="50px"
                 alt="your avatar"
                 class="inline object-cover w-16 h-16 mr-2 rounded-full">
            <button type="submit"
                    class="bg-green-500 rounded-lg shadow py-2 px-2 text-white"
            >
                Tweetyreety!

            </button>
        </footer>
    </form>
    @error('body')
    <p class="text-red-400 text-sm mt-2">{{$message }}</p>
    @enderror
</div>
