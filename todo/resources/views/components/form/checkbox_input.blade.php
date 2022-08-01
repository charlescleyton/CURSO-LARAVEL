
  <div class="title">
      <input 
      type="checkbox"
      name="{{ $name }}" 
      id="{{ $name }}" 
      {{ empty($required) ? '':'required' }}
      {{-- value="1" --}}
      {{ $checked ? 'checked':' ' }}
      
      />
      <label for="{{ $name }}">
          {{ $label ?? '' }}
      </label>

</div>