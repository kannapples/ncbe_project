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
error_log('-------------------------------');
error_log('Departments sorted by Total Pay');
error_log('-------------------------------');
$departmentPay = $departmentService->sortDepartmentsByTotalPay($departments, $employees, $pay);
foreach ($departmentPay as $id => $pay) {
    error_log($departments[$id]->name . ': $' . $pay);
}
error_log('-------------------------------');
error_log('Employees sorted by Name');
error_log('-------------------------------');
$sortedEmployees = $employeeService->sortEmployeesByName($employees);
foreach ($sortedEmployees as $employee) {
    error_log($employee->name . ':');
    error_log(' - Hourly rate: ' . $employee->hourly_rate);
}
