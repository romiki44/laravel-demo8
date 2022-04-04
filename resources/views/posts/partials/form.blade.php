@if($errors->any())
    <div class="mb-3">
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item list-group-item-danger mb-2">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif    

<div class="form-group">
    <label for="title">Title</label>
    <input id="title" type="text" name="title" value="{{ old('title', optional($post ?? null)->title) }}" class="form-control">
    @error('title')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="content">Content</label>
    <textarea id="content" name="content" class="form-control">{{ old('content', optional($post ?? null)->content) }}</textarea>
    @error('content')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>
