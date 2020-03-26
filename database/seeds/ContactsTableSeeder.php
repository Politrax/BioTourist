<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Contacts')->insert(array(
            array(
                'contact_subject'       => 'Je n\'arrive plus à accéder à mes contacts',
                'contact_content'       => 'ceci est du contenu',
                'contact_email'         => 'tourist@tourist.fr',
                'contact_date'          => '2019-07-23 10-32-10',
                'Users_idUser'          => 1
            ),
            array(
                'contact_subject'       => 'Je n\'arrive plus à accéder à mes contacts encore une fois',
                'contact_content'       => 'ceci est du contenu',
                'contact_email'         => 'tourist@tourist.fr',
                'contact_date'          => '2019-07-23 10-32-10',
                'Users_idUser'          => 1
            ),
            array(
                'contact_subject'       => 'J\'aimerais tester vos projets',
                'contact_content'       => 'ceci est du contenu',
                'contact_email'         => 'test@test.fr',
                'contact_date'          => '2019-07-23 10-32-10',
                'Users_idUser'          => null
            ),
        ));
    }
}