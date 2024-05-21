<?php

class EmployeeService {
    function buildEmployees(array $departments): array
    {
        return [
            new Intern(1, 'claire', $departments[0], Employee::FULL_TIME),
        ];
    }
}