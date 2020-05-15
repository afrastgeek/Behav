<?php

use Illuminate\Database\Seeder;

class BehaviorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $behaviors = [
            'Academic Dishonesty',
            'Aiding, Abetting, or Concealing Violations',
            'Alcoholic Beverages',
            'Classroom Disruption',
            'Conduct Inappropriate for an Academic Setting',
            'Destruction, Misuse, Damage, or Defacing of Property',
            'Disrespect for Authority',
            'Disturbance/Disruption Due to a Mental Disorder',
            'Failure to Respond to a Summons From a University Official',
            'False Reporting of Emergency',
            'Falsification, Forgery, and Dishonesty',
            'Gambling',
            'Group Offenses',
            'Hazing',
            'Illegal Selling of Books',
            'Illegal Visits to Other Campus',
            'Illegal Use of Telephones',
            'Interference with Emergency Evacuation Procedure',
            'Lewd, Indecent, or Obscene Behavior',
            'Obstruction or Disruption',
            'Physical Abuse',
            'Possession of Firearms and other Dangerous Weapons or Explosives',
            'Possession, Sale, or Consumption of Narcotics, Depressants, Stimulants, Hallucinogens, or Solvents',
            'Raiding University Facilities',
            'Reproduction of Materials',
            'Sexual Harassment',
            'Sexual Assault/Forcible or Non-Forcible Sex Offenses',
            'Smoking on Campus',
            'Starting Fires or Other Acts of Arson',
            'Unauthorized Appropriation of Property',
            'Unauthorized Demonstration and Mass Gatherings',
            'Unauthorized Entry',
            'Unauthorized Possession',
            'Unauthorized Soliciting, Advertising, Selling, and Distribution of Material',
            'Unauthorized Use or Alteration of Emergency or Safety Equipment',
            'Verbal Abuse',
            'Violation of the Code of Computer Ethics and Misuse of the Computer System',
            'Violation of Sanctions',
        ];

        foreach ($behaviors as $behavior) {
            factory(App\Behavior::class)->create([
                'activity' => $behavior,
            ]);
        }
    }
}
