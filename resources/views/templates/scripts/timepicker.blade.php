{{--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}
<link href="{{ url('plugins/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
<script src="{{ url('plugins/timepicker/bootstrap-timepicker.js') }}"></script>
<script>
    $(document).ready(function(){
        jQuery('.timepicker').timepicker({
            defaultTIme : false
        });
    });
</script>