@extends('layout.layout')
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm mới</h1>
        </div>
        <div class="col-12">
            <form method="post" action="{{route('manager.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Họ</label>
                    <input type="text" class="form-control" name="firstName" placeholder="Enter firs Name" required>
                </div>
{{--                <div class="error-message">--}}
{{--                    @if($errors->has('firstname'))--}}
{{--                        <p class="alert-danger">{{$errors->first('firstName')}}</p>--}}
{{--                    @endif--}}
{{--                </div>--}}
                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" class="form-control" name="lastName" placeholder="Enter last Name " required>
                </div>
{{--                <div class="error-message">--}}
{{--                    @if($errors->has('lastname'))--}}
{{--                        <p class="alert-danger">{{$errors->first('lastName')}}</p>--}}
{{--                    @endif--}}
{{--                </div>--}}
                <div class="form-group">
                    <label>Số Điện Thoại</label>
                    <input type="number" class="form-control" name="phone" placeholder="Enter phone numbers" required>
                </div>
{{--                <div class="error-message">--}}
{{--                    @if($errors->has('phone'))--}}
{{--                        <p class="alert-danger">{{$errors->first('phone')}}</p>--}}
{{--                    @endif--}}
{{--                </div>--}}
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                </div>
{{--                <div class="error-message">--}}
{{--                    @if($errors->has('email'))--}}
{{--                        <p class="alert-danger">{{$errors->first('email')}}</p>--}}
{{--                    @endif--}}
{{--                </div>--}}
                <div class="form-group">
                    <label>Địa Chỉ</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter address" required>
                </div>
{{--                <div class="error-message">--}}
{{--                    @if($errors->has('address'))--}}
{{--                        <p class="alert-danger">{{$errors->first('address')}}</p>--}}
{{--                    @endif--}}
{{--                </div>--}}
                <div class="form-group">
                    <label>Ảnh</label>
                    <input type="file" class="form-control" name="image" required>
                </div>
{{--                <div class="error-message">--}}
{{--                    @if($errors->has('iamge'))--}}
{{--                        <p class="alert-danger">{{$errors->first('image')}}</p>--}}
{{--                    @endif--}}
{{--                </div>--}}
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>
