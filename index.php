<?php
require_once './Entity/Employee.php';
require_once './Entity/Department.php';
require_once './Service/EmployeeService.php';
require_once './Service/DepartmentService.php';

$departmentService = new DepartmentService();
$employeeService = new EmployeeService();

//build records
$departments = $departmentService->buildDepartments();
$employees = $employeeService->buildEmployees($departments);
$timecards = $employeeService->buildTimecards();

//perform calculations
$pay = $employeeService->calculatePay($employees, $timecards);

//print results
var_dump($pay);
