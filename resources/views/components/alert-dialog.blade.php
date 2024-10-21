@props(["type", "title"])

<div x-data="{ show: false }"
     x-on:show-alert.window="show = true"
     x-init="$watch('show', value => {
        if (value) {
            Swal.fire({
                position: 'center',
                icon: '{{ $type ?? 'info' }}',  {{-- Default type is success --}}
                title: '{{ $title ?? 'Action Completed' }}', {{-- Default title --}}
                showConfirmButton: true,
                confirmButtonText: 'OK'
            }).then(() => {
                show = false;  // Reset 'show' after SweetAlert is dismissed
            });
        }
     })"
     x-show="false"
>
</div>
