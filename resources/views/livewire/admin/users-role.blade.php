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
                    <h3>نقش ها</h3>
                </div>
            </div>
            <form wire:submit.prevent="newRole">
                <div class="row">
                    <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="نام نقش جدید" wire:model.lazy="role_name"
                               class="form-control">
                    </div>
                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">ثبت</button>
                    </div>
                </div>

                @error('role-name')
                <span style="color: red">
                    نقش را تکمیل کنید!
                </span>

                @enderror
            </form>
            <div class="table-responsive">
                <table class="table table-hover  text-nowrap">
                    <thead>
                    <tr>
                        <th>
                            شناسه
                        </th>
                        <th>
                            نام نقش
                        </th>
                        <th>

                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as  $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->title}}</td>
                            <td>
                                <livewire:admin.remove-users-role :roleid="$role->id" :key="$role->id"></livewire:admin.remove-users-role>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$roles->links()}}
        </div>
    </div>

</div>
