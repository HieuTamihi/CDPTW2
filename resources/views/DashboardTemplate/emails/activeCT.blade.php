<div class="active_acount">
    <h2>Xin chào {{$newUserCT->email}}</h2>
    <a href="{{route('activeAcount',['newUser'=> $newUserCT->id, 'confirm'=>$newUserCT->confirm])}}">kích hoạt tài khoản</a>
</div>