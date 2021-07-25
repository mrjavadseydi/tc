<?php

namespace App\Http\Livewire\Admin;

use App\Models\Enrol;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\TimeColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;


class StatisticsDatatable extends LivewireDatatable
{
    public $model = Enrol::class;
    public $exportable = true;
    public $sort = 0;
    public $searchable = "exam_id";
    public function builder()
    {
        return  Enrol::query()->where('exam_id',$this->params);
    }

    public function columns()
    {
        return [
          NumberColumn::name('id')->label('شناسه'),
          Column::name('exam.title')->label('نام آزمون')->filterable(),
          Column::name('user.name')->label('نام کاربر')->filterable(),
          Column::name('user.national_id')->label('کدملی کاربر')->filterable()
        ];
    }
}
