<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\servicios;

class ServicioController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'servicios';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new servicios());

        $grid->column('id', __('Id'));
        $grid->column('nombre_servicio', __('Nombre servicio'));
        $grid->column('descripcion', __('Descripcion'));
        $grid->column('precio', __('Precio'));
        $grid->column('imagen')->image();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(servicios::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nombre_servicio', __('Nombre servicio'));
        $show->field('descripcion', __('Descripcion'));
        $show->field('precio', __('Precio'));
        $show->field('imagen', __('Image'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new servicios());

        $form->text('nombre_servicio', __('Nombre servicio'));
        $form->textarea('descripcion', __('Descripcion'));
        $form->decimal('precio', __('Precio'));
        $form->image('imagen', __('Imagen'));

        return $form;
    }
}
