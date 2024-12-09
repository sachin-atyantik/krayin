<?php

namespace Webkul\Category\DataGrids;

use Illuminate\Support\Facades\DB;
use Webkul\Admin\Traits\ProvideDropdownOptions;
use Webkul\DataGrid\DataGrid;

class CategoryDataGrid extends DataGrid
{
    use ProvideDropdownOptions;

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('categories')
            ->addSelect(
                'categories.id',
                'categories.title',
                'categories.description',
                'categories.status',
            );

        $this->addFilter('id', 'categories.id');

        $this->setQueryBuilder($queryBuilder);
    }

    public function prepareColumns()
    {
        $this->addColumn([
            'index'    => 'id',
            'label'    => trans('Id'),
            'type'     => 'string',
            'sortable' => true,
        ]);

        $this->addColumn([
            'index'    => 'title',
            'label'    => trans('Title'),
            'type'     => 'string',
            'sortable' => true,
        ]);

        $this->addColumn([
            'index'    => 'description',
            'label'    => trans('Description'),
            'type'     => 'string',
            'sortable' => true,
        ]);

        $this->addColumn([
            'index'    => 'status',
            'label'    => trans('Status'),
            'type'     => 'string',
            'sortable' => true,
        ]);
    }

    public function prepareActions()
    {
        $this->addAction([
            'title'  => trans('ui::app.datagrid.edit'),
            'method' => 'GET',
            'route'  => 'admin.categories.edit',
            'icon'   => 'pencil-icon',
        ]);

        $this->addAction([
            'title'        => trans('ui::app.datagrid.delete'),
            'method'       => 'DELETE',
            'route'        => 'admin.categories.delete',
            'confirm_text' => trans('ui::app.datagrid.massaction.delete', ['resource' => 'user']),
            'icon'         => 'trash-icon',
        ]);
    }
}
