<?php

use Illuminate\Database\Seeder;

class TableTeamTournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TeamTournament::class)->create([
            'team_id'=>1,
            'tournament_id'=>1,
            'active'=>1
        ]);

        factory(App\TeamTournament::class)->create([
            'team_id'=>2,
            'tournament_id'=>1,
            'active'=>1
        ]);

        factory(App\TeamTournament::class)->create([
            'team_id'=>3,
            'tournament_id'=>1,
            'active'=>1
        ]);

        factory(App\TeamTournament::class)->create([
            'team_id'=>4,
            'tournament_id'=>1,
            'active'=>1
        ]);

        factory(App\TeamTournament::class)->create([
            'team_id'=>5,
            'tournament_id'=>1,
            'active'=>1
        ]);

        factory(App\TeamTournament::class)->create([
            'team_id'=>6,
            'tournament_id'=>1,
            'active'=>1
        ]);

        factory(App\TeamTournament::class)->create([
            'team_id'=>7,
            'tournament_id'=>1,
            'active'=>1
        ]);

        factory(App\TeamTournament::class)->create([
            'team_id'=>8,
            'tournament_id'=>1,
            'active'=>1
        ]);

        factory(App\TeamTournament::class)->create([
            'team_id'=>9,
            'tournament_id'=>1,
            'active'=>1
        ]);

        factory(App\TeamTournament::class)->create([
            'team_id'=>10,
            'tournament_id'=>1,
            'active'=>1
        ]);

        factory(App\TeamTournament::class)->create([
            'team_id'=>11,
            'tournament_id'=>1,
            'active'=>1
        ]);

        factory(App\TeamTournament::class)->create([
            'team_id'=>12,
            'tournament_id'=>1,
            'active'=>1
        ]);

        factory(App\TeamTournament::class)->create([
            'team_id'=>13,
            'tournament_id'=>1,
            'active'=>1
        ]);

        factory(App\TeamTournament::class)->create([
            'team_id'=>14,
            'tournament_id'=>1,
            'active'=>1
        ]);

        factory(App\TeamTournament::class)->create([
            'team_id'=>15,
            'tournament_id'=>1,
            'active'=>1
        ]);

        factory(App\TeamTournament::class)->create([
            'team_id'=>16,
            'tournament_id'=>1,
            'active'=>1
        ]);

        factory(App\TeamTournament::class)->create([
            'team_id'=>17,
            'tournament_id'=>1,
            'active'=>1
        ]);

        factory(App\TeamTournament::class)->create([
            'team_id'=>18,
            'tournament_id'=>1,
            'active'=>1
        ]);
    }
}
