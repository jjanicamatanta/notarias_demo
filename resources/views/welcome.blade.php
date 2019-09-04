@extends('templates.index')
@section('content')
{!! $documentModel->html_template->html !!}
@stop
@section('script')
<script>
    $(document).ready(function(){
        $('.input_token').val('{{ csrf_token() }}');
    });
</script>
@stop
