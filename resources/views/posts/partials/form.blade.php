@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif    
<div><input type="text" name="title" value="{{ old('title', optional($post ?? null)->title) }}"></div>
@error('title')
    <div style="color: red">{{ $message }}</div>
@enderror
<div><textarea name="content">{{ old('content', optional($post ?? null)->content) }}</textarea></div>
@error('content')
    <div style="color: red">{{ $message }}</div>
@enderror
