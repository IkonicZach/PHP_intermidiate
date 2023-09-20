<?php
class Student
{
    public $id, $name, $age, $course, $status;

    public function setId(int $id)
    {
        $this->id = $id;
    }
    public function getId(): int
    {
        return $this->id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }
    public function getAge(): int
    {
        return $this->age;
    }

    public function setCourse(array $course)
    {
        $this->course = $course;
    }
    public function getCourse(): array
    {
        return $this->course;
    }

    public function setStatus(bool $status)
    {
        $this->status = $status;
    }
    public function getStatus(): bool
    {
        return $this->status;
    }
}
class Teacher
{
    public $id, $name, $subject, $salary, $status;

    public function __construct(int $id, string $name, string $subject, float $salary, bool $status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->subject = $subject;
        $this->salary = $salary;
        $this->status = $status;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }
    public function getId(): int
    {
        return $this->id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function setSubject(string $subject)
    {
        $this->subject = $subject;
    }
    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSalary(float $salary)
    {
        $this->salary = $salary;
    }
    public function getSalary(): float
    {
        return $this->salary;
    }

    public function setStatus(bool $status)
    {
        $this->status = $status;
    }
    public function getStatus(): bool
    {
        return $this->status;
    }
}
class Timetable
{
    public $stu, $tr;
    public function __construct(Student $stu, Teacher $tr)
    {
        $this->stu = $stu;
        $this->tr = $tr;
    }
    public function getStu(): Student
    {
        return $this->stu;
    }
    public function getTr() : Teacher
    {
        return $this->tr;
    }
}
$akokan = new Student();
$akokan->setId(001);
$akokan->setName("Kan");
$akokan->setAge(12);
$akokan->setCourse(["Maths" => "Class 1", "Science" => "Class 5", "History" => "Chapter 9"]);
$akokan->setStatus(false);

$akomhan = new Student();
$akomhan->setId(002);
$akomhan->setName("Mhan");
$akomhan->setAge(10);
$akomhan->setCourse(["Maths" => "Class 7", "Science" => "Class 2", "History" => "Chapter 69"]);
$akomhan->setStatus(true);

$dawpu = new Teacher(2001, "Daw Pu", "Maths", 200, true);
$dawcho = new Teacher(2002, "Daw Cho", "History", 230, false);
$time = new Timetable($akokan, $dawcho);
$time2 = new Timetable($akomhan, $dawpu);

$list = [$time, $time2];

// echo "There are " . count($list) . " pairs of teachers and students.";
echo $list[0]->getTr()->getSubject();