<button {{ $attributes->merge(['type' => 'submit', 'class' => 'signupButtons']) }}>
    {{ $slot }}
</button>