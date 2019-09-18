<?php

namespace App;

class Student
{
    private $age;

    private $hasMedicalCertificate;

    public function __construct(int $age, bool $hasMedicalCertificate)
    {
        $this->age = $age;
        $this->hasMedicalCertificate = $hasMedicalCertificate;
    }

    /**
     * @return int
     * @codeCoverageIgnore
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return bool
     * @codeCoverageIgnore
     */
    public function hasMedicalCertificate(): bool
    {
        return $this->hasMedicalCertificate;
    }
}
