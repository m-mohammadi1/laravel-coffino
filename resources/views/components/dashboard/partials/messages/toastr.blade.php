<script>

    @if (session('toastr_success'))
        toastr["success"]('{{ session('toastr_success') }}');
    @elseif (session('toastr_error'))
        toastr["error"]('{{ session('toastr_error') }}');
    @elseif (session('toastr_warning'))
        toastr["warning"]('{{ session('toastr_warning') }}');
    @elseif (session('toastr_info'))
        oastr["info"]('{{ session('toastr_info') }}');
    @endif

</script>