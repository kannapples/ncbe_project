<?php
require_once './Entity/Employee.php';
require_once './Entity/Department.php';
require_once './Service/EmployeeService.php';
require_once './Service/DepartmentService.php';

$departmentService = new DepartmentService();
$employeeService = new EmployeeService();

$departments = $departmentService->buildDepartments();
$employees = $employeeService->buildEmployees($departments);

var_dump($employees);
