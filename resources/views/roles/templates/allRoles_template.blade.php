<tr >
    <td> {{ $role->id }} </td>
    <td>{{ $role->name_en }} </td>
    <td>{{ $role->name_ar }} </td>
    <td>
        @if((in_array(Auth::user()->user_type , \App\Enums\UsersEnums::$systemIds)) || (in_array("editRoles" , $userPermissions)))
            <a href="{{ route('adminGetRoleData' , $role->uuid) }}" target="_blank" class="table-action-btn "><i class="md md-edit"></i></a>
        @endif
        {{--<a href="javascript:void(0)" onclick="dublicatePermission()" class="table-action-btn "><i class="md md-plus-one"></i></a>--}}
    </td>
</tr>