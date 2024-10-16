@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ old('title') }}">
    
    <label for="content">Content:</label>
    <textarea name="content" id="content">{{ old('content') }}</textarea>
    
    <button type="submit">Salvar</button>
</form>