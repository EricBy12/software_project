<button {{ $attributes->merge(['type' => 'button', 'class' => 'signupButtons']) }}>
    {{ $slot }}
</button>