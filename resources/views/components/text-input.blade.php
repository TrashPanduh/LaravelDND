<div class="mb-2">
    <label for="{{$slug}}">{{$label}}:</label><br>
    <input class="outline-black" type="{{$type}}" id="{{$slug}}" name="{{$slug}}" value="{{ old($slug) ?? $value }}"><br>

    @error($slug)
        <div style="color: red">{{ $message }}</div>
    @enderror($slug)
</div>