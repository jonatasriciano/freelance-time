@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Edit Post: </h3>
                    </div>

                    <div class="panel-body">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}">

                        <label for="content">Content:</label>
                        <textarea name="content" id="content">{{ old('content', $post->content) }}</textarea>
                    </div>
                    <div class="panel-footer">
                        <a href="{{ route('posts.index') }}">Back</a>
                        <button type="submit">Save</button>
                    </div>

                </div>
            </div>
        </div>
    </div>


</form>