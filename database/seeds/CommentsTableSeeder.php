<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Comments')->insert(array(
            array(
                'comment_content'       => 'je suis une pomme et toi',
                'comment_note'          => 4,
                'comment_subject'       => 'je suis une chèvre',
                'comment_date'          => '2019-07-23 10-32-10',
                'Announces_idAnnounce'  => 1,
                'Users_idUser'          => 1
            ),
            array(
                'comment_content'       => 'je suis un geux',
                'comment_note'          => 2,
                'comment_subject'       => 'je suis une contrex',
                'comment_date'          => '2020-02-13 10-22-10',
                'Announces_idAnnounce'  => 2,
                'Users_idUser'          => 3
            ),
            array(
                'comment_content'       => 'BAD',
                'comment_note'          => 2,
                'comment_subject'       => 'note',
                'comment_date'          => '2020-01-23 10-22-10',
                'Announces_idAnnounce'  => 2,
                'Users_idUser'          => 3
            ),
            array(
                'comment_content'       => 'pfffff',
                'comment_note'          => 2,
                'comment_subject'       => 'note',
                'comment_date'          => '2019-11-23 10-22-10',
                'Announces_idAnnounce'  => 4,
                'Users_idUser'          => 1
            ),

            array(
                'comment_content'       => 'c\'est pas mal ton sujet',
                'comment_note'          => 4,
                'comment_subject'       => 'bon vendeur',
                'comment_date'          => '2019-11-23 10-22-10',
                'Announces_idAnnounce'  => 4,
                'Users_idUser'          => 1
            ),
            array(
                'comment_content'       => 'bien joué à toi',
                'comment_note'          => 4,
                'comment_subject'       => 'Pomme',
                'comment_date'          => '2020-01-23 10-22-10',
                'Announces_idAnnounce'  => 6,
                'Users_idUser'          => 1
            ),
            array(
                'comment_content'       => 'Bien joué à vous',
                'comment_note'          => 3,
                'comment_subject'       => 'Poire',
                'comment_date'          => date('Y-m-d h-i-s'),
                'Announces_idAnnounce'  => 7,
                'Users_idUser'          => 2
            ),
            array(
                'comment_content'       => 'test2222',
                'comment_note'          => 4,
                'comment_subject'       => 'Fenouil',
                'comment_date'          => date('Y-m-d h-i-s'),
                'Announces_idAnnounce'  => 8,
                'Users_idUser'          => 1
            ),
            array(
                'comment_content'       => 'Vous êtes là très chère?',
                'comment_note'          => 5,
                'comment_subject'       => 'c\'est un sujet',
                'comment_date'          => '2020-02-23 12-22-10',
                'Announces_idAnnounce'  => 9,
                'Users_idUser'          => 1
            ),
            ));
    }
}