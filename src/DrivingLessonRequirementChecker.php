<?php

namespace App;

class DrivingLessonRequirementChecker
{
    public function canTakeDrivingLessons(Student $person): bool
    {
        return $this->isPersonOldEnough($person) && $this->hasMedicalCertificate($person);
    }

    public function isPersonOldEnough(Student $person): bool
    {
        return $person->getAge() > 17;
    }

    protected function hasMedicalCertificate(Student $person): bool
    {
        return $person->hasMedicalCertificate();
    }
}
