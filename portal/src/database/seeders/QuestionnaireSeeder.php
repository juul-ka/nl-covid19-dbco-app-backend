<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Jenssegers\Date\Date;
use Monolog\DateTimeImmutable;

class QuestionnaireSeeder extends Seeder
{
    private const ALL_CATEGORIES = '1,2a,2b,3';
    /**
     * Run the questionnaire seed.
     *
     * To be able to change the questionnaire from the seed without disturbing answers already given,
     * the questionnaire always gets a new uuid upon seed. If you change the seed, don't forget to up the
     * version number.
     *
     * @return void
     */
    public function run()
    {
        $now = Date::now();

        $questionnaireUuid = (string)Str::uuid();
        DB::table('questionnaire')->insert([
            'name' => 'Default questionnaire voor contacten',
            'uuid' => $questionnaireUuid,
            'task_type' => 'contact',
            'version' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ]);

        $questionUuid = (string)Str::uuid();
        DB::table('question')->insert([
            'uuid' => $questionUuid,
            'questionnaire_uuid' => $questionnaireUuid,
            'group' => 'classification',
            'question_type' => 'classificationdetails',
            'label' => 'Vragen over jullie ontmoeting',
            'description' => null,
            'relevant_for_categories' => QuestionnaireSeeder::ALL_CATEGORIES,
            'created_at' => $now,
            'updated_at' => $now
        ]);

        $questionUuid = (string)Str::uuid();
        DB::table('question')->insert([
            'uuid' => $questionUuid,
            'questionnaire_uuid' => $questionnaireUuid,
            'group' => 'contactdetails',
            'question_type' => 'contactdetails',
            'label' => 'Contactgegevens',
            'description' => null,
            'relevant_for_categories' => QuestionnaireSeeder::ALL_CATEGORIES,
            'created_at' => $now,
            'updated_at' => $now
        ]);

        $questionUuid = (string)Str::uuid();
        DB::table('question')->insert([
            'uuid' => $questionUuid,
            'questionnaire_uuid' => $questionnaireUuid,
            'group' => 'contactdetails',
            'question_type' => 'open',
            'label' => 'Beroep',
            'description' => null,
            'relevant_for_categories' => '1',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        $questionUuid = (string)Str::uuid();
        DB::table('question')->insert([
            'uuid' => $questionUuid,
            'questionnaire_uuid' => $questionnaireUuid,
            'group' => 'contactdetails',
            'question_type' => 'multiplechoice',
            'label' => 'Waar ken je deze persoon van?',
            'description' => null,
            'relevant_for_categories' => '2a,2b',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        DB::table('answer_option')->insert([[
            'uuid' => (string)Str::uuid(),
            'question_uuid' => $questionUuid,
            'label' => 'Ouder',
            'value' => 'Ouder',
            'created_at' => $now,
            'updated_at' => $now
        ],[
            'uuid' => (string)Str::uuid(),
            'question_uuid' => $questionUuid,
            'label' => 'Kind',
            'value' => 'Kind',
            'created_at' => $now,
            'updated_at' => $now
        ],[
            'uuid' => (string)Str::uuid(),
            'question_uuid' => $questionUuid,
            'label' => 'Broer of zus',
            'value' => 'Broer of zus',
            'created_at' => $now,
            'updated_at' => $now
        ],[
            'uuid' => (string)Str::uuid(),
            'question_uuid' => $questionUuid,
            'label' => 'Partner',
            'value' => 'Partner',
            'created_at' => $now,
            'updated_at' => $now
        ],[
            'uuid' => (string)Str::uuid(),
            'question_uuid' => $questionUuid,
            'label' => 'Familielid (overig)',
            'value' => 'Familielid (overig)',
            'created_at' => $now,
            'updated_at' => $now
        ],[
            'uuid' => (string)Str::uuid(),
            'question_uuid' => $questionUuid,
            'label' => 'Huisgenoot',
            'value' => 'Huisgenoot',
            'created_at' => $now,
            'updated_at' => $now
        ],[
            'uuid' => (string)Str::uuid(),
            'question_uuid' => $questionUuid,
            'label' => 'Vriend of kennis',
            'value' => 'Vriend of kennis',
            'created_at' => $now,
            'updated_at' => $now
        ],[
            'uuid' => (string)Str::uuid(),
            'question_uuid' => $questionUuid,
            'label' => 'Medestudent of leerling',
            'value' => 'Medestudent of leerling',
            'created_at' => $now,
            'updated_at' => $now
        ],[
            'uuid' => (string)Str::uuid(),
            'question_uuid' => $questionUuid,
            'label' => 'Collega',
            'value' => 'Collega',
            'created_at' => $now,
            'updated_at' => $now
        ],[
            'uuid' => (string)Str::uuid(),
            'question_uuid' => $questionUuid,
            'label' => 'Gezondheidszorg medewerker',
            'value' => 'Gezondheidszorg medewerker',
            'created_at' => $now,
            'updated_at' => $now
        ],[
            'uuid' => (string)Str::uuid(),
            'question_uuid' => $questionUuid,
            'label' => 'Ex-partner',
            'value' => 'Ex-partner',
            'created_at' => $now,
            'updated_at' => $now
        ],[
            'uuid' => (string)Str::uuid(),
            'question_uuid' => $questionUuid,
            'label' => 'Overig',
            'value' => 'Overig',
            'created_at' => $now,
            'updated_at' => $now
        ]]);

        $questionUuid = (string)Str::uuid();
        DB::table('question')->insert([
            'uuid' => $questionUuid,
            'questionnaire_uuid' => $questionnaireUuid,
            'group' => 'contactdetails',
            'question_type' => 'multiplechoice',
            'label' => 'Is een of meerdere onderstaande zaken van toepassing voor deze persoon?',
            'description' => "<ul><li>Student</li>".
                             "<li>70 jaar of ouder</li>".
                             "<li>Gezondheidsklachten of extra gezondheidsrisico's</li>".
                             "<li>Woont in een zorginstelling of asielzoekerscentrum (bijvoorbeeld bejaardentehuis)</li>".
                             "<li>Spreekt slecht of geen Nederlands</li>".
                             "<li>Werkt in de zorg, onderwijs of een contactberoep (bijvoorbeeld kapper)</li></ul>",
            'relevant_for_categories' => '1,2a,2b',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        DB::table('answer_option')->insert([[
            'uuid' => (string)Str::uuid(),
            'question_uuid' => $questionUuid,
            'label' => 'Ja, één of meerdere dingen',
            'value' => 'Ja',
            'trigger' => 'communication_staff',
            'created_at' => $now,
            'updated_at' => $now
        ],[
            'uuid' => (string)Str::uuid(),
            'question_uuid' => $questionUuid,
            'label' => 'Nee, ik denk het niet',
            'value' => 'Nee',
            'trigger' => 'communication_index',
            'created_at' => $now,
            'updated_at' => $now
        ]]);

    }
}
