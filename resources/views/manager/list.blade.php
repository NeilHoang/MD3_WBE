@extends('layout.layout')

<div class="container">
    <div class="row">
        <div class="col-12 col-12">
            <a class="btn btn-primary mt-5" href="{{route('manager.create')}}">Thêm mới</a>
            <div class="row mt-3">
                <div class="col-6">
                    <form class="navbar-form navbar-left" action="{{route('manager.search')}}">
                        @csrf
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <input type="text" name="keyword" class="form-control" placeholder="Search">
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-outline-primary">Tìm kiếm</button>
                            </div>
                        </div>
                    </form>
                </div>
            <table class="table table-bordered mt-2" style="text-align: center">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Avatar</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($managements as $key => $management)
                    <tr>
                        <th style="text-align: center;vertical-align: middle" scope="row">{{++$key}}</th>
                        <td style="text-align: center;vertical-align: middle">{{$management->firstName}}</td>
                        <td style="text-align: center;vertical-align: middle">{{$management->lastName}}</td>
                        <td style="text-align: center;vertical-align: middle">{{$management->phone}}</td>
                        <td style="text-align: center;vertical-align: middle">{{$management->email}}</td>
                        <td style="text-align: center;vertical-align: middle">{{$management->address}}</td>
                        <td style="text-align: center;vertical-align: middle"><img
                                src="{{asset('storage/'.$management->avatar)}}" class="image-size" alt="" width="100">
                        </td>
                        <td style="text-align: center;vertical-align: middle"><a
                                href="{{route('manager.edit',$management->id)}}" class="btn btn-secondary">sửa</a><a
                                href="{{ route('manager.destroy',$management->id) }}" class="btn btn-danger"
                                onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            {{$managements->links()}}
        </div>
    </div>
</div>
