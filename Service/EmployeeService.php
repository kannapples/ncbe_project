<?php

class EmployeeService {
    function buildEmployees(array $departments): array
    {
        return [
            new Intern(1, 'claire', $departments[0], Employee::FULL_TIME),
            new FloorWorker(2, 'molly', $departments[1], Employee::PART_TIME),
            new Supervisor(3, 'jamie', $departments[1], Employee::PART_TIME),
            new Manager(4, 'sam', $departments[0], Employee::FULL_TIME),
            new Executive(5, 'phoebe', $departments[0], Employee::FULL_TIME),
        ];
    }
}