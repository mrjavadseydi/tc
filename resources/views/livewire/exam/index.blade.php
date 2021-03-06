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
                    <h3>آزمون ها</h3>
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
                            نام آزمون
                        </th>
                        <th>
                            تعداد داوطلبان
                        </th>
                        <th>
                            وضعیت
                        </th>
                        <th>

                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($exams as  $exam)
                        <tr>
                            <td>{{$exam->id}}</td>
                            <td>{{$exam->title}}</td>
                            <td>
                                {{$exam->enrol_count}}
                            </td>
                            <td>
                                @if($exam->active==0)
                                    غیرفعال
                                @else
                                    تایید شده
                                @endif

                            </td>
                            <td >
                                <div class="row">
                                    <a href="{{route('edit.exam',$exam->id)}}" class="btn btn-primary m-1">
                                        ویرایش
                                    </a>
                                    <a href="{{route('report.exam',$exam->id)}}" class="btn btn-info m-1">
                                        آمار آزمون
                                    </a>
                                    <a href="{{route('delete.exam',$exam->id)}}" class="btn btn-danger m-1 confirmed">
                                        حذف آزمون
                                    </a>

                                </div>


                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$exams->links()}}
        </div>
    </div>

</div>
