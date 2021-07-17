<div>
  <div>


    @if (session()->has('message'))

          <div class="alert alert-{{session('message')['type']}}">
              {{session('message')['message'] }}
          </div>
      @endif
      @foreach($exams as $exam)
          @livewire('panel.exam-enrol',['exam'=>$exam,'roles'=>$roles])
      @endforeach
  </div>
</div>
