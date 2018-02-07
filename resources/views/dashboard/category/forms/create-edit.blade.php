{!! csrf_field() !!}

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}" placeholder="Category Name">
</div>