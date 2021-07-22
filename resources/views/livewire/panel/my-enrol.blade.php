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
                    <h3>ثبت نام های من </h3>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table data-table table-hover table-active text-nowrap">
                    <thead>
                    <tr>
                        <th>
                            شناسه
                        </th>
                        <th>
                            نام آزمون
                        </th>
                        <th>
                            مقام
                        </th>
                        <th>
                            وضعیت
                        </th>
                        <th>

                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($enrols as  $enrol)
                        <tr>
                            <td>{{$enrol->id}}</td>
                            <td>{{$enrol->exam->title}}</td>
                            <td>{{$enrol->role->title}}</td>
                            <td>
                                @if($enrol->accept==0)
                                    غیرفعال
                                @else
                                    تایید شده
                                @endif

                            </td>
                            <td>
                                @if($enrol->accept==1)
                                    <a class="btn btn-primary" href="#">
                                        دریافت ابلاغیه
                                    </a>
                                @else
                                    @livewire('panel.remove-exam-enrol',['enrol_id'=>$enrol->id])
                                @endif
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
