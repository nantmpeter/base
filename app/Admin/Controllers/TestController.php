<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Test;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class TestController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Test(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('content');
            $grid->column('extra');
            $grid->column('pic');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Test(), function (Show $show) {
            $show->field('id');
            $show->field('content');
            $show->field('extra');
            $show->field('pic');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Test(), function (Form $form) {
            $form->display('id');
            $form->ueditor('content');
            $form->text('extra');
            $form->text('pic');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
