<script>
    @if ($errors->$errorBag->any())
        @foreach($errors->$errorBag->all() as $error)
            toastr["error"]('{{ $error }}');
        @endforeach
    @endif
</script>




