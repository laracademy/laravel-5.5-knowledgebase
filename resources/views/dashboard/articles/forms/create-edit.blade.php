{!! csrf_field() !!}

<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $article->title) }}">
</div>

<div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ old('content', $article->content) }}</textarea>
</div>

@push('style')
    <link rel="stylesheet" href="//cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <style>
        .CodeMirror {
            height: 300px;
        }
    </style>
@endpush

@push('script')
    <script src="//cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script>
        var simplemde = new SimpleMDE({ element: $("#content")[0] });
    </script>
@endpush