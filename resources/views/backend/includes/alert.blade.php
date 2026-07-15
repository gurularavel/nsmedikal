@if(session()->has('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: '{{ session('error') }}',
        showConfirmButton: false,
        timer: 4000,
    });
</script>
@endif

@if(session()->has('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 4000,
    });
</script>
@endif

@if(session()->has('warning'))
<script>
    Swal.fire({
        icon: 'warning',
        title: '{{ session('warning') }}',
        showConfirmButton: false,
        timer: 4000,
    });
</script>
@endif
