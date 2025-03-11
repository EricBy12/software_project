@props(['value'])

<label {{ $attributes->merge(['class' => 'inputFields1_text']) }}>
    {{ $value ?? $slot }}
</label>
