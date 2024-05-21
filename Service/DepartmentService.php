<?php

class DepartmentService {
    function buildDepartments(): array
    {
        return [
            1 => new Department(1, 'interior'),
            2 => new Department(2, 'transportation'),
        ];
    }

    function sortDepartmentsByTotalPay($departments, $employees, $pay): array
    {
        $departmentPay = [];
        foreach ($departments as $department) {
            //only look at employees within an individual department
            $deptEmployees = array_filter($employees, function($v, $k) use ($department) {
                return $v->department->id === $department->id;
            }, ARRAY_FILTER_USE_BOTH);
            $deptEmployeeIds = array_column($deptEmployees, 'id');
            //only look at pay for department employees
            $deptEmployeePay = array_intersect_key($pay, array_flip($deptEmployeeIds));

            $departmentPay[$department->id] = array_sum($deptEmployeePay);
        }
        //sort by pay descending
        arsort($departmentPay);

        return $departmentPay;
    }
}