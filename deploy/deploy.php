<?php




// タスク定義
task('my_task', function() {  
    write('<comment>executing my task!</comment>');
})->desc('タスクの説明');
task('my_task:before', function() {  
    write('<comment>my_taskが実行される前に実行するタスク</comment>');
});

task('my_task:done', function() {  
    write('<comment>my_taskが完了後に実行するタスク</comment>');
});

before('my_task', 'my_task:before');  
after('my_task', 'my_task:done');
