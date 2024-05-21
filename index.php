<?php
include './Entity/Employee.php';

$department_interior = new Department(1, 'interior');
$new_intern = new Intern(1, 'claire', $department_interior, Employee::FULL_TIME);
var_dump($new_intern);
