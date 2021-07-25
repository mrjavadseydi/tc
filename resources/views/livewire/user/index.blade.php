<div>
    <div class="text-center">
        <div wire:loading>
            <div class="text-center" dir="rtl">
                <img src="{{asset('loading.gif')}}">
            </div>
        </div>
    </div>

    <div class="card message-box-wrap height-auto" wire:loading.remove>
        @if (session()->has('message'))

            <div class="alert alert-{{session('message')['type']}}">
                {{session('message')['message'] }}
            </div>
        @endif
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>کاربران</h3>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover  text-nowrap">
                    <thead>
                    <tr>
                        <th>
                            شناسه
                        </th>
                        <th>
                            نام کاربر
                        </th>
                        <th>
                            کدملی
                        </th>
                        <th>
                           شماره تلفن
                        </th>
                        <th>

                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as  $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>
                                {{$user->national_id}}
                            </td>
                            <td>
                                {{$user->mobile}}
                            </td>
                            <td >
                                <div class="row">

                                </div>


                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
{{--            @dd($users->links())--}}
            {{$users->links()}}
        </div>
    </div>

</div>
