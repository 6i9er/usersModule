<script>


    $(document).ready(function(){
        $(".selectSubPermissions").on('click' , function () {
            var isChecked = 0;
            if ($(this).is(":checked")){
                isChecked = 1;
            }
            console.log($(this).parent().parent().parent().next().children().length);
            $(this).parent().parent().parent().next().children().each(function(){
                $(this).children().children().children().prop('checked' , (isChecked == "1") ? true : false);
            })
        });
        $(".selectAllPermission").on('click' , function () {
            var isChecked = 0;
            if ($(this).is(":checked")){
                isChecked = 1;
            }
            $("#permissionForm input[type=checkbox]").each(function () {
                $(this).prop('checked' , (isChecked == "1") ? true : false);
            })
        })


    });


</script>
