<tr >
    <td> {{ $permission->id }} </td>
    <td>{{ $permission->name_en }} </td>
    <td>{{ $permission->name_ar }} </td>
    <td>{{ $permission->permission_name }} </td>
    <td>{{ $permission->groupPermission->name_en }} </td>
    <td>
        <a href="javascript:void(0)" cms-edit-uuid="2" onclick="editPermission('{{ $permission->uuid }}')" class="table-action-btn "><i class="md md-edit"></i></a>
        {{--<a href="javascript:void(0)" onclick="dublicatePermission()" class="table-action-btn "><i class="md md-plus-one"></i></a>--}}
    </td>
</tr>