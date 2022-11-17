@extends('header')
@section('footer')
<div class="personal__info">
    <div class="container">
        <div class="title__personal">
            <h5>Personal information</h5>
        </div>
        @if(Session::has('message'))
        <div class="alert alert-success">{{Session::get('message')}}</div>
        @endif
        <form action="{{url('editUser/'.$customer->id)}}" class="form__info" method="POST">
            @csrf
            @method('PUT')
            @if (isset($customer))
            <div class="input__name1">
                <div class="lb__fullname">
                    <label for="name">Full name</label><span>*</span>
                </div>
                <input type="text" value="{{$customer->fullname}}" name="fullname" required>
            </div>
            <div class="input__date1">
                <div class="lb__date">
                    <label for="date">Date of birth</label>
                </div>
                <input type="date" value="{{$customer->date}}" name="date" required>
            </div>
            <div class="input__phone1">
                <div class="lb__phone">
                    <label for="phone">Phone</label><span>*</span>
                </div>
                <input type="number" value="{{$customer->phone_number}}" name="phone_number" required>
            </div>
            <div class="input__email1">
                <div class="lb__email">
                    <label for="email">Email</label><span>*</span>
                </div>
                <input type="text" value="{{$customer->email}}" name="email" required>
            </div>
            <div class="input__address1">
                <div class="lb__address">
                    <label for="address">Address</label>
                </div>
                <input type="text" value="{{$customer->address}}" name="address">
            </div>
            <div class="select__gender1">
                <div class="lb__gender">
                    <label for="gender">Gender</label>
                </div>
                <select name="gender" required>
                    <option value="0" <?php if ($customer->is_featured == 0) {
                                            echo 'selected';
                                        } ?>>Male</option>
                    <option value="1" <?php if ($customer->is_featured == 1) {
                                            echo 'selected';
                                        } ?>>Female</option>
                    <option value="2" <?php if ($customer->is_featured == 2) {
                                            echo 'selected';
                                        } ?>>Other</option>
                </select>
            </div>
            <div class="area__favorite1">
                <div class="lb_favorite">
                    <label for="favorite">Favorite technology</label>
                </div>
                <textarea name="favorite" name="favorite">{{$customer->favorite}}</textarea>
            </div>
            <input type="submit" value="Save" class="btn btn-primary save__btn1">
            <a href="{{asset('change_pass_log')}}"><input type="button" value="Change password" class="btn btn-primary change__btn1"></a>
            @endif
        </form>
    </div>
</div>
@endsection