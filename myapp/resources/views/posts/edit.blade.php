<h1>Edit post {{$post->title}}</h1>
<form action="{{ route('posts.update', ['postId' => $post->id]) }}" method="post">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" placeholder="Insert a title" value="{{$post->title}}" />
    </div>
    <div>
        <label for="body">Body</label>
        <input type="text" id="body" name="body" placeholder="Insert a body" value="{{$post->body}}" />
    </div>
    <div>
        <label for="slug">Slug</label>
        <input type="text" id="slug" name="slug" placeholder="Insert a slug" value="{{$post->slug}}" />
    </div>
    <div>
        <input type="submit" id="send" value="Send" />
    </div>
</form>