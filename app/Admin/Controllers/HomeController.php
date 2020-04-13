<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Dashboard')
            ->description('Description...')
            // ->row(Dashboard::title())
            ->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            })
            ->row(function(Row $row){
                $row->column(12,function(Column $column){
                    $column->append(view('xitong/changelog'));
                });
            });
    }

    public function changelog(Content $content)
    {
        $content->title("系统日志");
        $content->description('本系统是laravle集成laravel-admin插件，可以快速开发网站后台系统');
        $content->row(function(Row $row){
            $row->column(12, function (Column $column) {
                $column->view('xitong/changelog');
            });
        });
        return $content;
    }

}
