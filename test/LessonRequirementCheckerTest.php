<?php

namespace App;

use PHPUnit\Framework\MockObject\MockObject;
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
        /** @var Student|MockObject $studentStub */
        $studentStub = $this->createMock(Student::class);
        $studentStub
            ->method('getAge')
            ->willReturn($age);
        $studentStub
            ->method('hasMedicalCertificate')
            ->willReturn($certificated);

        $class = new DrivingLessonRequirementChecker();
        $this->assertEquals($expectedResult, $class->canTakeDrivingLessons($studentStub));
    }

    public function dataProviderCanTakeDrivingLessons(): array
    {
        return [
            [
                16,
                false,
                false,
            ],
        ];
    }
}
