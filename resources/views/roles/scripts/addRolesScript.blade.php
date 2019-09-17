<script type="text/javascript" src="{{ url('plugins/parsleyjs/parsley.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(event) {
        $(".selectSubPermissions").on('click' , function () {
            if ($(this).attr("clicked") == '1'){
                $(this).attr("clicked" , '0')
                $(this).children().html("{{ trans('permissions.unSelectAll') }}")
                var that = $(this);
                that.parent().parent().next().children().children().each(function(){
                    $(this).children().children().children().children().first().prop('checked' , true)
                })
            }else{
                $(this).attr("clicked" , '1')
                $(this).children().html("{{ trans('permissions.selectAll') }}")
                var that = $(this);
                that.parent().parent().next().children().children().each(function(){
                    $(this).children().children().children().children().first().prop('checked' , false)
                })
            }

            // var isChecked = 0;
            // console.log($(this).attr("clicked") + " : " +isChecked)
            // var that = $(this);
            // that.parent().parent().next().children().children().each(function(){
                // console.log($(this).children().children().children().children().first().prop('checked' , true))
                // $(this).children().children().children().children().children().prop('checked' , (isChecked == "1") ? true : false);
                // $(this).children().children().children().children().children().first().prop('checked' , (isChecked == "1") ? true : false);
                // $(this).children().children().children().children().first().prop('checked' , true)
            // })
        });
        $(".selectAllPermission").on('click' , function () {
            var isChecked = 0;
            if ($(this).is(":checked")){
                isChecked = 1;
            }
            $("#addEditRole_form input[type=checkbox]").each(function () {
                $(this).prop('checked' , (isChecked == "1") ? true : false);
            })

            $(".selectSubPermissions").each(function () {
                if(isChecked == "1"){
                    $(this).attr("clicked" , '1')
                    $(this).children().html("{{ trans('permissions.unSelectAll') }}")
                }else{
                    $(this).attr("clicked" , '0')
                    $(this).children().html("{{ trans('permissions.selectAll') }}")
                }
            })
        })
    });

    //function used to append the inputs to the inputs object
    function getAddEditRolesInputs(){
        var formData = new FormData();
        formData.append("_token" , "{{ csrf_token() }}");
        formData.append("name_en" , $("#addEditRole_name_en").val());
        formData.append("name_ar" , $("#addEditRole_name_ar").val());
        formData.append("uuid" , $("#addEditRole_UUID").val());
        var permissions = '';

        //get All Checked
        if($(".subPermissions:checked").length !="0" ){
            $(".subPermissions:checked").each(function () {
                permissions += $(this).attr('id') + ":::"
            })
        }
        formData.append("permissions" , permissions);
        return formData;
    }

    // function used to send the add edit Inputs to the backend
    function addEditRoles() {
        var inputs = getAddEditRolesInputs()
        // console.log(inputs);
        $.ajax({
            url:  "{{ route('adminAddEditRole') }}",
            method: 'POST',
            data: inputs,
            processData: false,
            contentType: false,
            success: function (data) {
                console.log(data);
                $("#addEditRole_errors").html(data['msg'])
                if(data['errors'] == "1"){

                }else{

                    if(data['is_edit'] == "1"){
                        var site ="{{ route('getAllRoles') }}" ;
                        window.location.href = site;
                    }else{
                        // //    reset data
                        resetAddEditRolePermissionData()
                        setTimeout(function(){

                            $("#addEditPermission_errors").html('');
                            var site = window.location.href;
                            window.location.href = site;
                        }, 3000)
                    }


                }
            }
        });
    }

    // function reset user data
    function resetAddEditRolePermissionData() {
        $("#addEditRole_UUID").val('');
        $("#addEditRole_name_en").val('');
        $("#addEditRole_name_ar").val('');
        $("input[type=checkbox]").removeAttr('checked');
    }

</script>