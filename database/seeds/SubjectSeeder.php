<?php

use Illuminate\Database\Seeder;
use App\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::truncate();

        $subjects = [
            'Български език и литература',
            'Математика',
            'Английски език',
            'Немски език',
            'Руски език',
            'Музика',
            'Химия',
            'Биология',
            'Физика',
            'Физическо възпитание и спорт',
            'Психология и логика',
            'Етика и право',
            'Свят и личност',
            'География',
            'История и цивилизация',
            'Френски език',
            'Философия',
            'Информационни технологии',
            'Информатика',
            'Изобразително изкуство',
            'Функционални приложни програми',
            'Икономическа информатика',
            'Право',
            'Компютърно счетоводство',
            'Предприемачество',
            'Икономика на предприятието',
            'Финанси',
            'История',
            'Домашен бит и техника',
            'Час на класа',
            'Испански език',
            'Гражданско образование',
            'Статистика'
        ];

        foreach ($subjects as $subject) {
            Subject::create([
                'title' => $subject
            ]);
        }
    }
}