<?php

namespace App\Http\Livewire\Admin;

use App\Models\Enrol;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class StatisticsDatatable extends LivewireDatatable
{
    public $model = Enrol::class;

//    public function __construct()
//    {
//        dd($this->params);
//        $this->model = $this->params;
//    }
    public function builder()
    {
        return  Enrol::query()->where('exam_id',$this->params)->with(['user','exam']);
    }

}
