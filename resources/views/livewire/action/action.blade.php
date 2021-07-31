<div class="flex space-x-1 justify-around">
    <h6 style="font-size: 14px" class="badge badge-{{$accept==0?"danger":"success"}}">
        {{$accept==0?"نیازمند تایید":"تایید شده"}}
    </h6>
    <button style="font-size: 14px" class="btn btn-primary" wire:click="getUser({{$id}},{{$accept}})">
        اطلاعات کاربر
    </button>
</div>
