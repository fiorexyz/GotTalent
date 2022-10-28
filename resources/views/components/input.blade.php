@props(['type', 'label', 'name', 'required' => false, 'retrieveOld' => true])
<div class="input-group has-validation">
    <div class="{{ $errors->has($name) ? 'is-invalid' : 'mb-3' }}  w-100">
        <input type="{{ $type }}" class="form-control transparent-100 border-0  border-bottom border-dark rounded-0 {{ $errors->has($name) ? 'is-invalid' : '' }}"
            id="floatingInput{{ strtolower(str_replace(' ', '', $label)) }}" name="{{ $name }}"
            placeholder="{{ $label }}" oninput="QuitInvalid(this)" autocomplete="off" {!! $required == true ? 'required' : '' !!}
            {{ $attributes(['value' => $retrieveOld ? old($name) : request($name)]) }}>
    </div>
    @error($name)
        <div class="invalid-feedback mb-3">
            {{ $message }}
        </div>
    @enderror
</div>
