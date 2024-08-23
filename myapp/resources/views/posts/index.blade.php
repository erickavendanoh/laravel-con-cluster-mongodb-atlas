<h1>Posts</h1>
<a href="{{ route('posts.new') }}">Crear</a>
<table border="1">
    <thead>
        <th>Title</th>
        <th>Body</th>
        <th>Slug</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>{{ $post->slug }}</td>
                <td>
                    <a href=" {{ route('posts.edit', ['postId' => $post->id]) }} ">Editar</a>
                    <a href=" {{ route('posts.destroy', ['postId' => $post->id]) }} ">Eliminar</a>
                </td>
            </tr>
        @endforeach
</table>