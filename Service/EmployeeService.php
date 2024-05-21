<?php

class EmployeeService {
    function buildEmployees(array $departments): array
    {
        return [
            1 => new Intern(1, 'claire', $departments[1], Employee::FULL_TIME),
            2 => new FloorWorker(2, 'molly', $departments[2], Employee::PART_TIME),
            3 => new Supervisor(3, 'jamie', $departments[2], Employee::PART_TIME),
            4 => new Manager(4, 'sam', $departments[1], Employee::FULL_TIME),
            5 => new Executive(5, 'phoebe', $departments[1], Employee::FULL_TIME),
        ];
    }

    function buildTimecards(): array
    {
        return [
            1 => 45, //claire worked 45 hours
            2 => 25, //molly worked 25 hours
            3 => 20, //jamie worked 20 hours
            4 => 35, //sam worked 35 hours
            5 => 40, //phoebe worked 40 hours
        ];
    }

    function calculatePay(array $employees, array $timecards): array
    {
        if (count($employees) !== count($timecards)) {
            throw new Exception('There must be a timecard for each employee');
        }

        $pay_list = [];
        foreach ($employees as $employee) {
            $hours_worked = $timecards[$employee->id];
            if ($employee->type === Employee::FULL_TIME && $hours_worked > 40) {
                $overtime_hours = $hours_worked - 40;
                $pay = 40*$employee->hourly_rate + $overtime_hours*$employee->hourly_rate*1.5 + $employee->weekly_bonus;
            } else {
                $pay = $hours_worked*$employee->hourly_rate + $employee->weekly_bonus;
            }
            $pay_list[$employee->id] = $pay;
        }

        return $pay_list;
    }

    function sortEmployeesByName(array $employees): array
    {
        usort($employees, function($a, $b) 
            { 
                return strcmp($a->name, $b->name);
            }
        );

        return $employees;
    }
}