@if(!isset($is_edit) || $is_edit == "0")
    <tr id="user_{{$user->uuid}}">
@endif
    <td>
        {{ $user->id }}
    </td>

    <td >{{ $user->name }}</td>

    <td>
        {{ $user->email }}
    </td>
    <td>
        {{ $user->username }}
    </td>
    <td>
        <span class="label label-success">@if($user->user_status == "0"){{ trans('users.blocked') }}@else {{ trans('users.active') }} @endif</span>
    </td>
    <td class="text-center">
        <a  href="javascript:void(0)" onclick='viewEditUserModal("{{ $user->uuid }}")'  class="table-action-btn"><i class="md md-edit"></i></a>
        <a  href="javascript:void(0)" go-href="{{ route('userResetPasswordByAdmin' , $user->uuid) }}" id="resetPassword_{{$user->uuid}}" show-msg="{{ trans('users.are you sure you want to reset this user password ??') }}" onclick='confirmAction("resetPassword_{{$user->uuid}}")'  class="table-action-btn"><i class="md md-track-changes"></i></a>
        @if($user->user_status == "1")
            <a  href="javascript:void(0)" go-href="{{ route('userBlock' , $user->uuid) }}"  id="blockPassword_{{$user->uuid}}" show-msg="{{ trans('users.are you sure you want to block this user  ??') }}" onclick='confirmAction("blockPassword_{{$user->uuid}}")'  class="table-action-btn"><i class="md   md-lock"></i></a>
        @elseif($user->user_status == "0")
            <a  href="javascript:void(0)" go-href="{{ route('userUnBlock' , $user->uuid) }}"  id="blockPassword_{{$user->uuid}}" show-msg="{{ trans('users.are you sure you want to un block this user  ??') }}" onclick='confirmAction("blockPassword_{{$user->uuid}}")'  class="table-action-btn"><i class="md  md-lock-open"></i></a>
        @else
            <a  href="javascript:void(0)" go-href="{{ route('userBlock' , $user->uuid) }}"  id="blockPassword_{{$user->uuid}}" show-msg="{{ trans('users.are you sure you want to block this user  ??') }}" onclick='confirmAction("blockPassword_{{$user->uuid}}")'  class="table-action-btn"><i class="md   md-lock"></i></a>

        @endif
    </td>
@if(!isset($is_edit) || $is_edit == "0")
    </tr>
@endif