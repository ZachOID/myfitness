<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'What is MyFitness?',
                'answer' => 'MyFitness is a comprehensive fitness platform designed to help you achieve your health and wellness goals.',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'question' => 'How do I get started?',
                'answer' => 'To get started, simply sign up for an account, choose a subscription plan that fits your needs, and begin exploring our wide range of fitness programs.',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'question' => 'What kinds of workouts are available?',
                'answer' => 'We offer a variety of workouts including strength training, cardio, yoga, pilates, and high-intensity interval training (HIIT).',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'question' => 'Can I cancel my subscription at any time?',
                'answer' => 'Yes, you can cancel your subscription at any time from your account settings. Your access will continue until the end of your current billing period.',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'question' => 'Do you offer personal training?',
                'answer' => 'Yes, we offer one-on-one personal training sessions with certified fitness professionals to help you reach your specific goals faster.',
                'sort_order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
