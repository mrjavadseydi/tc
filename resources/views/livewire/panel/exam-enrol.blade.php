<div>
    <div>
        <div class="card message-box-wrap height-auto" wire:loading.remove>
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>{{$exam->title}}</h3>
                    </div>
                </div>
                <div class="text-right">
                    <div class="item-content">
                        <p>
                            {{$exam->description}}
                        </p>
                        <form wire:submit.prevent="enrol">

                            <label>
                                نقش پیشنهادی:
                            </label>
                            <select class="select" wire:model="user_role">
                                <option>انتخاب کنید</option>
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">
                                        {{$role->title}}
                                    </option>
                                @endforeach
                            </select>

                            <input class="btn-fill-md text-light bg-dark-pastel-green" type="submit" value="ثبت!">


                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div wire:loading>
                <div class="text-center" dir="rtl">
                    <img src="{{asset('loading.gif')}}">
                </div>
            </div>
        </div>

    </div>
</div>
