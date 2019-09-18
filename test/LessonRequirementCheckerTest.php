<?php

namespace App;

use PHPUnit\Framework\TestCase;

class LessonRequirementCheckerTest extends TestCase
{
    /**
     * @param int $age
     * @param bool $certificated
     * @param bool $expectedResult
     * @dataProvider dataProviderCanTakeDrivingLessons
     */
    public function testCanTakeDrivingLessons(int $age, bool $certificated, bool $expectedResult): void
    {
        $studentStub = new Student($age, $certificated);

        $class = new DrivingLessonRequirementChecker();
        $this->assertEquals($expectedResult, $class->canTakeDrivingLessons($studentStub));
    }

    public function dataProviderCanTakeDrivingLessons(): array
    {
        return [
            'Student is not old enough, and has no medical certificate, then false' => [
                16,
                false,
                false,
            ],
        ];
    }
}
