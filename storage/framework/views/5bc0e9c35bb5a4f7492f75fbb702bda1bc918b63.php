<script type="text/javascript">
$(document).ready(function () {

    $(document).on('show.bs.modal', '.modal', function (event) {
        var zIndex = 1040 + (10 * $('.modal:visible').length);
        $(this).css('z-index', zIndex);
        setTimeout(function() {
            $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
        }, 0);
    });


});

function viewModalAction(modalName = ''){
    // $("#"+modalName).modal('show');
    $("#"+modalName).modal({
        backdrop: 'static',
        keyboard: false
    });
}
</script>
