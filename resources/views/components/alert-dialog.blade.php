

<div x-data="{ show: false }"
     x-init="$watch('show', value => {
        if (value) {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: true,
                timer: 3000,
                confirmButtonText: 'OK',
            }).then(() => {
                show = false; // Hide the alert after it's done
            });
        }
     })"
     x-on:show-alert.window="show = true"
     x-show="false" {{-- No need to use x-show since Swal manages visibility --}}
>
</div>
