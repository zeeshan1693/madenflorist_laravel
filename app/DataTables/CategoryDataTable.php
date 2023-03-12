<?php

namespace App\DataTables;

use App\Models\MadenFlorist\Category;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CategoryDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->setRowClass(function ($query) {
                return 'text-center';
            })->editColumn('status', function ($query) {
                $name = $query->allowed_banned->name_en;

                if($query->allowed_banned->id == 1){
                    return '<div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="status_'.$query->id.'" checked >
                                <label class="custom-control-label" for="status_'.$query->id.'">'.$name.'</label>
                            </div>';
                }else{
                    return '<div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="status_'.$query->id.'" >
                                <label class="custom-control-label" for="status_'.$query->id.'">'.$name.'</label>
                            </div>';
                }
            })->addColumn('action', function($query) {
                return '<div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                            <a href="'.route('categories.edit', $query->id).'">
                                <svg id="Component_50_1" data-name="Component 50 – 1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path id="u_edit-alt" d="M5,18H9.24a1,1,0,0,0,.71-.29l6.92-6.93L19.71,8a1,1,0,0,0,0-1.42L15.47,2.29a1,1,0,0,0-1.42,0L11.23,5.12,4.29,12.05a1,1,0,0,0-.29.71V17a1,1,0,0,0,1,1ZM14.76,4.41l2.83,2.83L16.17,8.66,13.34,5.83ZM6,13.17l5.93-5.93,2.83,2.83L8.83,16H6ZM21,20H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z" transform="translate(0 0.006)" fill="#224442"/>
                                    <rect id="Rectangle_529" data-name="Rectangle 529" width="24" height="24" fill="none"/>
                                </svg>
                            </a>&nbsp;&nbsp;&nbsp;
                            <a href="#">
                                <svg id="Component_51_1" data-name="Component 51 – 1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path id="u_trash-alt" d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6a1,1,0,0,0,1,1ZM20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,1,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Zm-3-1a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6a1,1,0,0,0,1,1Z" fill="#ce2828"/>
                                    <rect id="Rectangle_530" data-name="Rectangle 530" width="24" height="24" fill="none"/>
                                </svg>
                            </a>
                        </div>';
            })->rawColumns(['action','status']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Category $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Category $model)
    {
        return $model->select('*')->with(['yes_no','allowed_banned']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('category-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->parameters(['stateSave' => true])
            ->orderBy(0);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            'id' => ['title' => 'Id', 'class'=>'text-center'],
            'name_en' => ['title' => 'English Name', 'class'=>'text-center'],
            'name_ar' => ['title' => 'Arabic Name', 'class'=>'text-center'],
            'consider_as_separate' => new \Yajra\DataTables\Html\Column(['title' => 'Separate', 'class'=>'text-center', 'data' => 'yes_no.name_en', 'name' => 'yes_no.name_en','orderable' => false]),
            'status' => ['title' => 'Status', 'class'=>'text-center'],
            'action' => ['title' => 'Action', 'class'=>'text-center', 'orderable' => false, 'searchable' => false],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Category_' . date('YmdHis');
    }
}
