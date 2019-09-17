{{--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}
<link href="{{ url('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">
<script src="{{ url('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $( ".datepicker" ).datepicker({
            todayHighlight: true,
            autoclose: true,
            format: "yyyy-mm-dd"
        })
    });
</script>