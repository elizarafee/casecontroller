<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = [
            'Matter Management',
            'Case',
            'Billing',
            'Documents',
            'Auth',
            'Time and Expense Recording',
            'Legal Calendaring',
            'Client Accounting',
            'Firm Dashboard',
            'Integrations',
            'Security',
            'Mobile App',
            'Support Team',
        ];

        $features = array();

        foreach ($modules as $feature) {
            $features[] = [
                'name' => ucfirst($feature),
                'created_at' =>  \Carbon\Carbon::now(),
            ];
        }
    
        DB::table('modules')->insert($features);
    }
}
