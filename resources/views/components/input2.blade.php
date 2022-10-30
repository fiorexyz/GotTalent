@props(['type', 'label', 'name', 'placeholder', 'value' => '', 'required' => false, 'disabled' => false, 'retrieveOld' => true])

<div class="col-12 offset-0 col-sm-10 offset-sm-1 pt-2 mb-4">
    <div class="input-group px-2">
        <span class="input-group-text col-12 col-md-auto" id="basic-addon{{ $placeholder }}">{{ $label }}</span>
        <input type="{{ $type }}" name="{{ $name }}" class="form-control" placeholder="{{ $placeholder }}"
            aria-label="{{ $placeholder }}" aria-describedby="basic-addon{{ $placeholder }}"
            @if ($value != '') value="{{ $value }}" @endif {!! $disabled == true ? 'disabled' : '' !!}
            {!! $required == true ? 'required' : '' !!}>
    </div>
</div>
