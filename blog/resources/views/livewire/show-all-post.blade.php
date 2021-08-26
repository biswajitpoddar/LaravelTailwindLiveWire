<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    Showing All Posts
    @foreach($posts as $post)
        <div class="w-full m-auto">
            <div class="w-1/5 m-3 p-2 border-2 border-indigo-600 rounded-lg  inline-block" >
                @if($post->imagefile == "")
                    <img src="{{url('/images/no-image.jpeg')}}" class="w-80 h-70">
                @else
                    <img src="{{url('/images/'.$post->imagefile)}}" class="w-80 h-70">
                @endif
            </div>
            <div class="w-2/5 m-3 p-2 border-2 border-indigo-600 rounded-lg  inline-block ">
                <span class="text-green-500">Post ID </span>{{$post->id}}
                <br>
                <span class="text-green-500">User ID </span>{{$post->user_id}}
                <br>
                <span class="text-green-500">User Name </span>{{$post->user->name}}
                <br>
                <span class="text-green-500">Title of the Post </span>
                <br>
                <span class="text-red-500 border-2 rounded-lg">
                {{$post->title}}
                </span>
                <br>
                <span class="text-green-500">Body of the Post</span>
                <br>
                <span class="text-red-500 border-2 rounded-lg">
                {{$post->body}}
                </span>
                <br>
                <span class="text-green-500">Comments</span>
                <span class="text-red-500 border-2 rounded-lg">
                    <ul class="list-inside md:list-decimal">
                    @foreach($post->comment as $comment)
                        <li>{{ $comment->ucomment }} </li>
                        <br>
                    @endforeach
                    </ul>
                </span>

                <span class="text-green-500">Tags</span>
                <span>
                        <ul >
                        @foreach($post->tag as $tags)

                        <button  class="myTag py-2 px-2 bg-blue-500 text-white
                        rounded-lg shadow-md hover:bg-green-900 focus:outline-none focus:ring-2
                        focus:ring-green-400 focus:ring-opacity-75">
                        {{ $tags->name }}
                        </button>
                        {{-- <li class="bg-red-500 text-white border-8 rounded-full border-red-900  inline-block px-2 m-2 hover:border-gray-500">{{ $tags->name }}</li> --}}
                        @endforeach
                        </ul>
                </span>
                <br>

                <button class="py-2 px-4 bg-red-500 text-white font-semibold
                rounded-lg shadow-md hover:bg-green-700 focus:outline-none
                focus:ring-2 focus:ring-green-400 focus:ring-opacity-75" id="editPost"
                data-id="{{ $post->id }}" data-title="{{ $post->title }}"
                data-body="{{ $post->body }}" data-target="#editPostModal" data-toggle="modal">
                   Edit Post
                 </button>
                 <button  class="deleteRecord py-2 px-4 bg-red-900 text-white font-semibold
                 rounded-lg shadow-md hover:bg-green-900 focus:outline-none focus:ring-2
                 focus:ring-green-400 focus:ring-opacity-75" data-target="#deleteModal"
                  data-toggle="modal" data-id="{{ $post->id }}" >
                   Delete Post
                 </button>

            </div>
        </div>

    @endforeach

    <div class=" m-auto">
        {{ $posts->links() }}
    </div>
</div>
