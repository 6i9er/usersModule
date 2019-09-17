<script type="text/javascript" src="{{ url('plugins/parsleyjs/parsley.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(event) {
        // validate add edit User
        $('#addEditGroupPermission_form').parsley();
        $('#addEditGroupPermission_form').on('submit' , function (e) {
            if ($('#addEditGroupPermission_form').parsley().validate()){
                addEditGroupPermission();
            }
            e.preventDefault();
        })

    });

    //function used to append the inputs to the inputs object
    function getAddEditGroupPermissionsInputs(){
        var formData = new FormData();
        formData.append("_token" , "{{ csrf_token() }}");
        formData.append("name_ar" , $("#addEditGroupPermission_name_ar").val());
        formData.append("name_en" , $("#addEditGroupPermission_name_en").val());
        formData.append("uuid" , $("#addEditGroupPermission_UUID").val());
        return formData;
    }

    // function used to send the add edit Inputs to the backend
    function addEditGroupPermission() {
        var inputs = getAddEditGroupPermissionsInputs();
        $.ajax({
            url:  "{{ route('adminAddEditGroupPermission') }}",
            method: 'POST',
            data: inputs,
            processData: false,
            contentType: false,
            success: function (data) {
                console.log(data);
                $("#addEditGroupPermission_errors").html(data['msg'])
                if(data['errors'] == "1"){

                }else{
                    // var site = window.location.href;
                    // window.location.href = site;
                    resetAddEditGroupPermissionData();
                    //    reset data
                    setTimeout(function(){
                        $("#closeAddEditGroupPermission_modal").trigger("click");
                        $("#addEditGroupPermission_errors").html('');
                        viewListGroupPermissionModal();
                    }, 3000)
                }
            }
        });
    }

    // function reset user data
    function resetAddEditGroupPermissionData() {
        $("#addEditGroupPermission_name_ar").val('');
        $("#addEditGroupPermission_name_en").val('');
        $("#addEditGroupPermission_UUID").val('');
    }

</script>