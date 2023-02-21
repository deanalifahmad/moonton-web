<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubscriptionPlan;

class SubscriptionPlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcriptionPlans = [
            [
                'name' => 'Basic',
                'price' => 200000,
                'active_period_in_months' => 3,
                'features' => json_encode([
                    'Unlock 10 basic movies',
                    'Up to 3 users',
                    'HD available',
                    'Cancel anytime'
                ])
            ],
            [
                'name' => 'Premium',
                'price' => 800000,
                'active_period_in_months' => 6,
                'features' => json_encode([
                    'Unlimited movies',
                    '180 subtitles available',
                    'IOS, Android, and TV apps',
                    'Offline viewing',
                    'Up to 20 users',
                    'HD available',
                    'Cancel anytime'
                ])
            ]
        ];

        SubscriptionPlan::insert($subcriptionPlans);
    }
}
