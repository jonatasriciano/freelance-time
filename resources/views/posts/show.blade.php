@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Informações</div>

                <div class="panel-body">
                    <p><strong>Id:</strong> {{ $post->id }}</p>
                    <p><strong>Name:</strong> {{ $post->title }}</p>
                    <p><strong>Conteúdo:</strong> {{ $post->content }}</p>
                    <p><strong>Created At:</strong> {{ $post->created_at }}</p>
                    <p><strong>Updated At:</strong> {{ $post->updated_at }}</p>
                </div>
                <a href="{{ route('posts.index') }}">Voltar</a>
            </div>
        </div>
    </div>
</div>


<h2>Comments</h2>
<ul>
    @foreach($post->comments as $comment)
        <li>
            <strong>{{ $comment->author }}:</strong> {{ $comment->content }}
        </li>
    @endforeach
</ul>

<h3>Add New Comment</h3>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('posts.comments.store', $post->id) }}" method="POST">
    @csrf
    <label for="author">Author:</label>
    <input type="text" name="author" id="author" value="{{ old('author') }}">
    
    <label for="content">Comment:</label>
    <textarea name="content" id="content">{{ old('content') }}</textarea>
    
    <button type="submit">Enviar</button>
</form>