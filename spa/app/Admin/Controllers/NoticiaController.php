<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Noticia;

class NoticiaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Noticia';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Noticia());

        $grid->column('id', __('Id'));
        $grid->column('titulo', __('Titulo'));
        $grid->column('resumen', __('Resumen'));
        $grid->column('contenido', __('Contenido'));
        $grid->column('imagen_url', __('Imagen url'));
        $grid->column('autor', __('Autor'));
        $grid->column('fecha_publicacion', __('Fecha publicacion'));
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
        $show = new Show(Noticia::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('titulo', __('Titulo'));
        $show->field('resumen', __('Resumen'));
        $show->field('contenido', __('Contenido'));
        $show->field('imagen_url', __('Imagen url'));
        $show->field('autor', __('Autor'));
        $show->field('fecha_publicacion', __('Fecha publicacion'));
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
        $form = new Form(new Noticia());

        $form->text('titulo', __('Titulo'));
        $form->textarea('resumen', __('Resumen'));
        $form->textarea('contenido', __('Contenido'));
        $form->text('imagen_url', __('Imagen url'));
        $form->text('autor', __('Autor'));
        $form->date('fecha_publicacion', __('Fecha publicacion'))->default(date('Y-m-d'));

        return $form;
    }
}
