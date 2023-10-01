<?php
return [
    '~^$~' => [\Controllers\MainController::class, 'main'],
    '~article/show/(\d*)~' => [\Controllers\ArticleController::class, 'show'],
    '~article/edit/(\d*)~' => [\Controllers\ArticleController::class, 'edit'],
    '~article/update/(\d*)~' => [\Controllers\ArticleController::class, 'update'],
    '~article/add~' => [\Controllers\ArticleController::class, 'add'],
    '~article/store~' => [\Controllers\ArticleController::class, 'store'],
    '~article/delete/(\d+)~' => [\Controllers\ArticleController::class, 'delete'],
    '~comments/delete/(\d+)~' => [\Controllers\CommentsController::class, 'delete'],
    '~comments/(\d+)~' => [Controllers\CommentsController::class, 'view'],
    '~comments/add/(\d+)~' => [Controllers\CommentsController::class, 'add'],
    '~comments/edit/(\d+)~' => [Controllers\CommentsController::class, 'edit'],
];