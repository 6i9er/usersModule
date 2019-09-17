<script type="text/javascript" src="{{ url('plugins/parsleyjs/parsley.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#addNewUser_form').parsley();
        $('#addNewUser_form').on('submit' , function (e) {
            if ($('#addNewUser_form').parsley().validate()){
                addEditUser();
            }
            e.preventDefault();
        })
    });

    /**
     * View All Modals
     */
    function viewAddUserModal() {
        viewModalAction("addUser_modal");
        emptySaveUserDataInputs();
    }
    function addEditUser(){
        //get data from  inputs and set them in variable
        var inputs = getSaveUserInputs();
        // send data to ajax
        $.ajax({
            url: "{{route('saveUserData')}}",
            type: "POST",
            data:inputs,
            processData: false,
            contentType: false,
            success: function (data) {
                console.log(data);
                $("#addEditUser_errors").html(data['msg'])
                setInterval(function () {
                    $("#addEditUser_errors").html('')
                } , 5000)
                if(data['errors'] == "0"){
                    if($("#addUser_uuid").val() == ''){
                        $("#viewUsersDiv").append(data['viewHtml'])
                        emptySaveUserDataInputs();
                        $("#addUser_modal").modal('hide');
                    }
                    if(data['is_edit'] == "1"){
                        var aa = "#user_" + data['userUUID'];
                        // alert(aa)
                        window.location.href = window.location.href;
                    }
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr);
                console.log(thrownError);
            }
        });
    }

    function getSaveUserInputs() {
        var formData = new FormData();
        formData.append("_token" , "{{csrf_token()}}");
        formData.append("name" , $("#addUser_name").val());
        formData.append("password" , $("#addUser_password").val());
        formData.append("email" , $("#addUser_email").val());
        formData.append("username" , $("#addUser_username").val());
        formData.append("user_type" , $("#addUser_userType").val());
        formData.append("user_id" , $("#addUser_uuid").val());
        formData.append("roles" , $("#addUser_roles").val());
        return formData;
    }
    
    function emptySaveUserDataInputs() {
        $("#addUser_name,#addUser_password,#addUser_email,#addUser_username , #addUser_uuid").val('');
        $("#addUser_roles , #addUser_userType").val(0).selectpicker('refresh')

    }

    function viewEditUserModal(uuid = '') {
        $.ajax({
            url: "{{url('get-user-data')}}/"+uuid,
            type: "GET",
            processData: false,
            contentType: false,
            success: function (data) {
                console.log(data);
                if(data['errors'] == "1"){
                    alert(data['msg']);
                }else{
                    fillAddEditInputsData(data)
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr);
                console.log(thrownError);
            }
        });
        viewModalAction("addUser_modal");
    }

    function fillAddEditInputsData(inputs = []) {
        $("#addUser_roles ").val(inputs['msg']['rolesUUID']).selectpicker('refresh')
        $("#addUser_userType ").val(inputs['msg']['user_type']).selectpicker('refresh')
        $('#addUser_username').val(inputs['msg']['username'])
        $('#addUser_name').val(inputs['msg']['name'])
        $('#addUser_email').val(inputs['msg']['email'])
        $('#addUser_uuid').val(inputs['msg']['uuid'])
    }

</script>