<div class="my-2 flex ">
    <div style="width: 300px !important"><label for="{{$name}}" >{{ $label}}:</label></div>
    <input type="text" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}">
    @error ( $name)
    {{ $message }}
    @enderror
</div>