<?php
include './Entity/Employee.php';

$new_intern = new Intern(1, 'claire', 'interior', Employee::FULL_TIME);
var_dump($new_intern);
