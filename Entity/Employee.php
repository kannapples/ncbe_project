<?php
include './Entity/Department.php';

class Employee {
    const FULL_TIME = 'full_time';
    const PART_TIME = 'part_time';
    public int $id;
    public string $name;
    public Department $department;
    public string $type;
    public int $hourly_rate;
    public int $weekly_bonus;

    public function __construct($id, $name, $department, $type) {
        $this->id = $id;
        $this->name = $name;
        $this->department = $department;
        $this->type = $type; //TODO - validate this against full or part time consts
    }
}

class Intern extends Employee {
    public function __construct($id, $name, $department, $type) {
        parent::__construct($id, $name, $department, $type);
        $this->hourly_rate = 10;
        $this->weekly_bonus = 0;
    }
}

class FloorWorker extends Employee {
    public function __construct($id, $name, $department, $type) {
        parent::__construct($id, $name, $department, $type);
        $this->hourly_rate = 20;
        $this->weekly_bonus = 0;
    }
}

class Supervisor extends Employee {
    public function __construct($id, $name, $department, $type) {
        parent::__construct($id, $name, $department, $type);
        $this->hourly_rate = 25;
        $this->weekly_bonus = 0;
    }
}

class Manager extends Employee {
    public function __construct($id, $name, $department, $type) {
        parent::__construct($id, $name, $department, $type);
        $this->hourly_rate = 35;
        $this->weekly_bonus = 50;
    }
}

class Executive extends Employee {
    public function __construct($id, $name, $department, $type) {
        parent::__construct($id, $name, $department, $type);
        $this->hourly_rate = 50;
        $this->weekly_bonus = 50;
    }
}
