<?php

namespace App\Http\Livewire\Admin;

use App\Models\Enrol;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class StatisticsDatatable extends LivewireDatatable
{
    public $model = Enrol::class;
    public $exportable = true;
    public $searchable = "exam_id";
    public function builder()
    {
        return  Enrol::query()->where('exam_id',$this->params)->with(['user','exam']);
    }

}
