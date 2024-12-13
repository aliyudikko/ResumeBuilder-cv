@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'rounded-sm focus:ring-1
             focus:ring-fuchsia-600 border
              border-fuchsia-500 px-12 mb-6']) }}>
