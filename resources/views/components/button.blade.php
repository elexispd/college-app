<button {{ $attributes->merge(['class' => 'btn btn-primary', 'type' => 'submit']) }} wire:loading.attr="disabled">
    <!-- Default button content -->
    <span wire:loading.remove>{{ $slot }}</span>

    <!-- Loading state with spinner -->
    <span wire:loading>
        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        {{ $loadingText ?? '' }}
    </span>
</button>
