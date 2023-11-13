<?php

use framework\App;

$tasks = App::get('database')->selectAll('tasks');

$gretting = 'Hello World!';

require '../resources/views/index.blade.php';