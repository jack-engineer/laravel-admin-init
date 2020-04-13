<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>系统记录</title>
</head>
<style>
    .changelog{
        font-size: 18px;
    }
</style>
<body>
    <div class="changelog">
        <h4>文档集合</h4>
        <ul class="list-unstyled">
            <li>laravel7中文文档：<a href="https://learnku.com/docs/laravel/7.x">https://learnku.com/docs/laravel/7.x</a></li>
            <li>laravel-admin文档：<a href="https://laravel-admin.org/docs/zh">https://laravel-admin.org/docs/zh</a></li>
        </ul>
        <h4>本系统插件集合</h4>
        <ul class="list-styled">
            <li>laravel-admin: <a href="https://github.com/z-song/laravel-admin">https://github.com/z-song/laravel-admin</a></li>
            <code>
                composer require encore/laravel-admin <br>
                php artisan vendor:publish --provider="Encore\Admin\AdminServiceProvider"<br>
                php artisan admin:install<br>
            </code>
            <li>laravel-admin-extensions/log-viewer: <a href="https://github.com/laravel-admin-extensions/log-viewer">https://github.com/laravel-admin-extensions/log-viewer</a></li>
            <code>
                $ composer require laravel-admin-ext/log-viewer -vvv<br>

                $ php artisan admin:import log-viewer<br>
            </code>
            <li>laravel-admin-extensions/helpers: <a href="https://github.com/laravel-admin-extensions/helpers">https://github.com/laravel-admin-extensions/helpers</a></li>
            <code>
                $ composer require laravel-admin-ext/helpers<br>

                $ php artisan admin:import helpers<br>
            </code>
            <li>定时任务类： <a href="https://laravel-admin.org/docs/zh/extension-scheduling">https://laravel-admin.org/docs/zh/extension-scheduling</a></li>
            <code>
                $ composer require laravel-admin-ext/scheduling -vvv<br>

                $ php artisan admin:import scheduling<br>
            </code>
        </ul>
    </div>
</body>
</html>