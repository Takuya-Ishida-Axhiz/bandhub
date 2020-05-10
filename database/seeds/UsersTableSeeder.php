<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User([

            'name'=>'User',
            'email'=>'user@gmail.com',
            'password' => Hash::make('secret'),
            'remember_token' => str_random(10),
            'age'=>'26',
            'gender'=>'Male',
            'genre' => 'Rock/Anime/Vocaloid/J-POP',
            'part'=>'Guitar',
            'instruments'=> 'J.W.Black SSH Stratcaster HelixLT',
            'comments'=> 'J-Rockアニソンをメインで弾いてます。HelixLTのいい音の出し方が未だわからず模索中。'
        ]);
        $user->save();
    }
}







// $user = new \App\User([
    //         'name'=>'Saito Kosuke','email'=>'kosuke@example.co.jp','part'=>'Guitar&Vocal','password'=>'usg1','age'=>34,'gender'=>'male'
    //     ]);
    //     $user->save();

    //     $user = new \App\User([
    //         'name'=>'Tabuchi Tomoya','email'=>'tabuchi@example.co.jp','part'=>'Bass','password'=>'usg2','age'=>35,'gender'=>'male'
    //     ]);
    //     $user->save();

    //     $user = new \App\User([
    //         'name'=>'Suzuki Takao','email'=>'takao@example.co.jp','part'=>'Drum','password'=>'usg3','age'=>34,'gender'=>'male'
    //     ]);
    //     $user->save();
