<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
     * Seed the application's database.
     *
     * @return void
     */
  public function run()
  {
    // $this->call(UsersTableSeeder::class);

    //sports
    DB::table('sports')->insert([
      ['name' => "basketball"],
      ['name' => "football"] // or soccer according to the yankees.
    ]);
    //positions
    DB::table('positions')->insert([
      //basketball
      ['sport_id' => 1, 'name' => 'PG'],
      ['sport_id' => 1, 'name' => 'SG'],
      ['sport_id' => 1, 'name' => 'SF'],
      ['sport_id' => 1, 'name' => 'PF'],
      ['sport_id' => 1, 'name' => 'C'],
      //football
      ['sport_id' => 2, 'name' => 'GK'],
      ['sport_id' => 2, 'name' => 'CB'],
      ['sport_id' => 2, 'name' => 'LB'],
      ['sport_id' => 2, 'name' => 'RB'],
      ['sport_id' => 2, 'name' => 'CDM'],
      ['sport_id' => 2, 'name' => 'CM'],
      ['sport_id' => 2, 'name' => 'CAM'],
      ['sport_id' => 2, 'name' => 'LW'],
      ['sport_id' => 2, 'name' => 'RW'],
      ['sport_id' => 2, 'name' => 'CF'],
    ]);
    //teams
    DB::table('teams')->insert([
      ['sport_id' => 1, 'name' => 'L.A. Lakers'],
      ['sport_id' => 1, 'name' => 'Chicago Bulls'],
      ['sport_id' => 2, 'name' => 'Real Madrid C.F.'],
      ['sport_id' => 2, 'name' => 'FC Barcelona'],
    ]);
    //players
    DB::table('players')->insert([
      ['team_id' => 1, 'position_id' => 3, 'name' => 'LeBron James'],
      ['team_id' => 1, 'position_id' => 1, 'name' => 'Lonzo Ball'],
      ['team_id' => 2, 'position_id' => 3, 'name' => 'Otto Porter'],
      ['team_id' => 2, 'position_id' => 1, 'name' => 'Zack LaVine'],
      ['team_id' => 3, 'position_id' => 6, 'name' => 'Keylor Navas'],
      ['team_id' => 3, 'position_id' => 14, 'name' => 'Gareth Bale'],
      ['team_id' => 3, 'position_id' => 15, 'name' => 'Karim Benzema'],
      ['team_id' => 3, 'position_id' => 10, 'name' => 'Casemiro'],
      ['team_id' => 4, 'position_id' => 6, 'name' => 'Marc-André ter Stegen'],
      ['team_id' => 4, 'position_id' => 14, 'name' => 'Lionel Messi'],
      ['team_id' => 4, 'position_id' => 15, 'name' => 'Luis Suárez'],
      ['team_id' => 4, 'position_id' => 10, 'name' => 'Sergio Busquets'],
    ]);
  }
}
