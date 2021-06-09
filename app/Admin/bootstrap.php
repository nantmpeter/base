<?php

use Dcat\Admin\Admin;
use Dcat\Admin\Grid;
use Dcat\Admin\Form;
use Dcat\Admin\Grid\Filter;
use Dcat\Admin\Show;

/**
 * Dcat-admin - admin builder based on Laravel.
 * @author jqh <https://github.com/jqhph>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 *
 * extend custom field:
 * Dcat\Admin\Form::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Column::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Filter::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

// 注册前端组件别名
Admin::asset()->alias('@ueditor', [
    'js' => [
        '/vendor/ueditor/ueditor.config.js',
        '/vendor/ueditor/ueditor.all.js',
        '/vendor/ueditor/ueditor.parse.js',
        '/vendor/ueditor/ueditor.parse.js',
        '/vendor/ueditor/lang/zh-cn/zh-cn.js'
    ],
    'css' => ['/vendor/ueditor/themes/default/css/ueditor.css'],
]);

Form::extend('ueditor', \App\Admin\Extensions\Form\UEditor::class);