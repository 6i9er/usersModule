{{--<script src="{{ asset(elixir('js/separate/main.js')) }}"></script>--}}
{{--<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>--}}
{{--<script src="{{ asset('js/app.js') }}"></script>--}}





<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/bootstrap-rtl.min.js') }}"></script>
<script src="{{ url('js/detect.js') }}"></script>
<script src="{{ url('js/fastclick.js') }}"></script>
<script src="{{ url('js/jquery.slimscroll.js') }}"></script>
<script src="{{ url('js/jquery.blockUI.js') }}"></script>
<script src="{{ url('js/waves.js') }}"></script>
<script src="{{ url('js/wow.min.js') }}"></script>
<script src="{{ url('js/jquery.nicescroll.js') }}"></script>
<script src="{{ url('js/jquery.scrollTo.min.js') }}"></script>


@yield('scripts')
<script src="{{ url('js/jquery.core.js') }}"></script>
<script src="{{ url('js/jquery.app.js') }}"></script>


<script>
    $('#flash-overlay-modal').modal();
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);

    $(document).ajaxStart(function(){
        $("#loader").css("display", "block");
    });
    $(document).ajaxComplete(function(){
        $("#loader").css("display", "none");
    });
    $("button").click(function(){
        $("#txt").load("demo_ajax_load.asp");
    });


    function confirmAction(uuid){
        var id = $('#'+uuid);
        var msg = id.attr('show-msg');
        if (msg) {
            if (confirm( msg )) {
                window.location.replace(id.attr('go-href'));
            }
        } else {
            if (confirm('Are You Sure?')) {
                window.location.replace(id.attr('go-href'));
            }
        }
    }

    /**
     * this method used to recive url and the div id and
     * get by the data by ajax for this pagination
     * @param url
     * @param id
     */
    function getDataByAjaxForPaginationAndFillIt(url , id) {
        $.ajax({
            url: url ,
            type: "GET",
            processData: false,
            contentType: false,
            success: function (data) {
                $("#"+id).html(data)
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr);
                console.log(thrownError);
            }
        });
    }
</script>

