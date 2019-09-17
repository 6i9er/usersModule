<script type="text/javascript" src="{{ url('plugins/parsleyjs/parsley.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(event) {
        // validate add edit User
        $('#addEditPermission_form').parsley();
        $('#addEditPermission_form').on('submit' , function (e) {
            if ($('#addEditPermission_form').parsley().validate()){
                addEditPermission();
            }
            e.preventDefault();
        })

    });

    //function used to append the inputs to the inputs object
    function getAddEditPermissionsInputs(){
        var formData = new FormData();
        formData.append("_token" , "{{ csrf_token() }}");
        formData.append("name_ar" , $("#addEditPermission_name_ar").val());
        formData.append("name_en" , $("#addEditPermission_name_en").val());
        formData.append("permission_name" , $("#addEditPermission_permission_name").val());
        formData.append("group_permission_id" , $("#addEditPermission_groupPermission").val());
        formData.append("uuid" , $("#addEditPermission_UUID").val());
        return formData;
    }

    // function used to send the add edit Inputs to the backend
    function addEditPermission() {
        var inputs = getAddEditPermissionsInputs();
        $.ajax({
            url:  "{{ route('adminAddEditPermission') }}",
            method: 'POST',
            data: inputs,
            processData: false,
            contentType: false,
            success: function (data) {
                console.log(data);
                $("#addEditPermission_errors").html(data['msg'])
                if(data['errors'] == "1"){

                }else{
                    // var site = window.location.href;
                    // window.location.href = site;
                    resetAddEditPermissionData();
                    //    reset data
                    setTimeout(function(){
                        $("#closeAddEditPermission_modal").trigger("click");
                        $("#addEditPermission_errors").html('');
                        var site = window.location.href;
                        window.location.href = site;
                    }, 3000)
                }
            }
        });
    }

    // function reset user data
    function resetAddEditPermissionData() {
        $("#addEditPermission_name_ar").val('');
        $("#addEditPermission_name_en").val('');
        $("#addEditPermission_permission_name").val('');
        $("#addEditPermission_groupPermission").val('');
        $("#addEditPermission_UUID").val('');
    }

</script>