<div>
  <div>


      @if (session()->has('message'))

          <div class="alert alert-{{session('message')['type']}}">
              {{session('message')['message'] }}
          </div>
      @endif
          <div class="alert alert-info">
              <p>تذکرات</p>
              <ol>
                  <li>فقط در صورتی که امکان حضور در همه روزهای آزمون برای شما مقدور است، اعلام آمادگی فرمائید.</li>
                  <li>تعیین نوع مسئولیت و روزهای همکاری در آزمون بر عهده مرکز آزمون می باشد.</li>
              </ol>
          </div>
      @foreach($exams as $exam)
          @livewire('panel.exam-enrol',['exam'=>$exam,'roles'=>$roles])
      @endforeach
  </div>
</div>
