
<script>
    $(document).ready(function(){

    });

    /**
     * reload all permissions
     */
    function reloadAllPermissions(){
        alert("reload all the permissions");
    }

    /**
     * reload all permissions
     */
    function reloadAllGroupPermissions(){
        viewListGroupPermissionModal()
    }



    function dublicatePermission(permissionUUID = 0){
        if (confirm( "{{ trans('permissions.areYouSureYouWantToDublicateThisRow !!') }}")) {
            dublicatePermissionRow(permissionUUID)
        }
    }

    function dublicateGroupPermission(groupPermissionUUID = 0){
        if (confirm( "{{ trans('permissions.areYouSureYouWantToDublicateThisRow !!') }}")) {
            dublicateGroupPermissionRow(groupPermissionUUID)
        }
    }


    function dublicateGroupPermissionRow(id) {
        alert("this Group Row Dublicated");
    }
    function dublicatePermissionRow(id) {
        alert("this Permission Row Dublicated");
    }

    function editPermission(permissionUUID = 0){
        //get Data By Ajax
        $.ajax({
            url:  "{{ route('adminGetPermissionData') }}/"+permissionUUID,
            method: 'GET',
            success: function (data) {
                console.log(data);
                $("#addEditUser_errors").html(data['msg'])
                if(data['errors'] == "1"){
                    alert(data['errors'])
                }else{
                    //fill data to addEdit Modal
                    viewAddPermissionModal()
                    setTimeout(function(){
                        // $("#closeAddEditPermission_modal").trigger("click");
                        // $("#addEditPermission_errors").html('');
                        // var site = window.location.href;
                        // window.location.href = site;
                        fillPermissionDataToAddEditModal(data['msg']);
                    }, 1000)

                }
            }
        });
    }

    function editGroupPermission(permissionUUID = 0){
        //get Data By Ajax
        $.ajax({
            url:  "{{ route('adminGetGroupPermissionData') }}/"+permissionUUID,
            method: 'GET',
            success: function (data) {
                console.log(data);
                $("#addEditUser_errors").html(data['msg'])
                if(data['errors'] == "1"){
                    alert(data['errors'])
                }else{
                    //fill data to addEdit Modal
                    fillGroupPermissionDataToAddEditModal(data['msg']);
                    viewModalAction("addGroupPermission_modal");
                }
            }
        });

    }

    function fillGroupPermissionDataToAddEditModal(data){
        $("#addEditGroupPermission_name_ar").val(data.name_ar);
        $("#addEditGroupPermission_name_en").val(data.name_en);
        $("#addEditGroupPermission_UUID").val(data.uuid);
    }

    function fillPermissionDataToAddEditModal(data){
        $("#addEditPermission_name_ar").val(data.name_ar);
        $("#addEditPermission_name_en").val(data.name_en);
        $("#addEditPermission_UUID").val(data.uuid);
        $("#addEditPermission_groupPermission").val(data.group_permission_id).trigger('select');
        $("#addEditPermission_permission_name").val(data.permission_name);
    }

    /**
     * View All Modals
     */
    function viewListGroupPermissionModal() {
        $.ajax({
            url:  "{{ route('adminListAllGroupPermission') }}",
            method: 'GET',
            success: function (data) {
                console.log(data)
                if(data['errors'] == "1"){
                    alert(data['msg'])
                }else{
                    $("#viewListAllGroupPermission_table").html(data['msg']);
                }
            }
        });
        viewModalAction("allGroups_modal");
    }

    function viewAddGroupPermissionModal() {
        viewModalAction("addGroupPermission_modal");
    }
    function viewAddPermissionModal() {

        //get All Group Permissions From Database
        $.ajax({
            url:  "{{ route('adminListAllGroupPermission') }}/1",
            method: 'GET',
            success: function (data) {
                console.log(data)
                if(data['errors'] == "1"){
                    alert(data['msg'])
                }else{
                    $("#selectGroupPermissionName").html(data['msg']);
                }
            }
        });
        viewModalAction("addPermission_modal");
    }
</script>