<?php

namespace Database\Seeders;

use App\Models\Division;
use App\Models\Section;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class AssignStudentClassroom extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = Student::doesntHave('studentClassrooms')->get();
        $sections = Section::all()->pluck('id')->toArray();
        $divisions = Division::all()->pluck('id')->toArray();

        $studentRows = [];
        foreach($students as $student) {
            $row = [
                'student_id' => $student->id,
                'roll_no' =>  $student->id,
                'term_id' => 2,
                'section_id' => Arr::random($sections),
                'division_id' => Arr::random($divisions)
            ];
            array_push($studentRows, $row);
        }

        DB::table('student_classrooms')->insertOrIgnore($studentRows);
    }
}
