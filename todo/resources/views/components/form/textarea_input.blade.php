<div class="inputArea">
    <label for="{{ $name }}">
        {{ $label ?? '' }}
    </label>
    <textarea 
    id="{{ $name }}" 
    name="{{ $name }}" 
    value="{{ $value ?? '' }}" 
    placeholder="{{$placeholder ?? ''}}" 
    {{ empty($required) ? 'required':'' }}>
    {{ $value ?? "" }}
</textarea>

</div>
