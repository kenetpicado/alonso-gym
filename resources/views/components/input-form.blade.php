@props(['label', 'class' => '', 'text' => $label, 'type' => 'text', 'val' => ''])

<div class="form-group {{ $class }}">
    <label>{{ ucfirst($text) }}</label>
    <input type={{ $type }} class="form-control @error($label) is-invalid @enderror"
        name="{{ $label }}" autocomplete="off" value="{{ old($label, $val) }}">

    @error($label)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
