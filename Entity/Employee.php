<?php

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
        $this->setId($id);
        $this->setName($name);
        $this->setDepartment($department);
        if (!in_array($type, [$this::FULL_TIME, $this::PART_TIME])) {
            throw new Exception('All employees must be either full_time or part_time');
        }
        $this->setType($type);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDepartment(): Department
    {
        return $this->$department;
    }

    public function setDepartment(Department $department): void
    {
        $this->department = $department;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getHourlyRate(): int
    {
        return $this->hourly_rate;
    }

    public function setHourlyRate(int $hourly_rate): void
    {
        $this->hourly_rate = $hourly_rate;
    }

    public function getWeeklyBonus(): int
    {
        return $this->weekly_bonus;
    }

    public function setWeeklyBonus(int $weekly_bonus): void
    {
        $this->weekly_bonus = $weekly_bonus;
    }
}

class Intern extends Employee {
    public function __construct($id, $name, $department, $type) {
        parent::__construct($id, $name, $department, $type);
        $this->setHourlyRate(10);
        $this->setWeeklyBonus(0);
    }
}

class FloorWorker extends Employee {
    public function __construct($id, $name, $department, $type) {
        parent::__construct($id, $name, $department, $type);
        $this->setHourlyRate(20);
        $this->setWeeklyBonus(0);
    }
}

class Supervisor extends Employee {
    public function __construct($id, $name, $department, $type) {
        parent::__construct($id, $name, $department, $type);
        $this->setHourlyRate(25);
        $this->setWeeklyBonus(0);
    }
}

class Manager extends Employee {
    public function __construct($id, $name, $department, $type) {
        parent::__construct($id, $name, $department, $type);
        $this->setHourlyRate(35);
        $this->setWeeklyBonus(50);
    }
}

class Executive extends Employee {
    public function __construct($id, $name, $department, $type) {
        parent::__construct($id, $name, $department, $type);
        $this->setHourlyRate(50);
        $this->setWeeklyBonus(50);
    }
}
