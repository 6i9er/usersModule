<tr >
    <td> {{ $groupPermission->id }} </td>
    <td>{{ $groupPermission->name_en }}</td>
    <td>{{ $groupPermission->name_ar }}</td>
    <td>
        <a href="javascript:void(0)" onclick="editGroupPermission('{{ $groupPermission->uuid }}')" class="table-action-btn "><i class="md md-edit"></i></a>
        {{--<a href="javascript:void(0)" onclick="dublicateGroupPermission()" class="table-action-btn "><i class="md md-plus-one"></i></a>--}}
    </td>
</tr>