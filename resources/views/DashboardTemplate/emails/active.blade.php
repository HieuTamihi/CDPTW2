<div class="active_acount">
    <h2>Xin chào {{$newUser->employer->name_company}}</h2>
    <a href="{{route('activeAcount',['newUser'=> $newUser->id, 'confirm'=>$newUser->confirm])}}">kích hoạt tài khoản</a>
</div>