<?php

class DepartmentService {
    function buildDepartments(): array
    {
        return [
            new Department(1, 'interior'),
            new Department(2, 'transportation'),
        ];
    }
}