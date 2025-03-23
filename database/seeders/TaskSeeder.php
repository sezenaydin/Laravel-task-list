<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $tasks = [
            [
                'title' => 'Prepare weekly meeting presentation',
                'description' => 'Create a presentation for the team meeting.',
                'long_description' => 'Prepare a presentation summarizing project progress, challenges faced, and planned solutions to present in the weekly meeting.'
            ],
            [
                'title' => 'Review Laravel API documentation',
                'description' => 'Go through Laravel API docs.',
                'long_description' => 'Carefully review Laravel API documentation and identify areas of improvement or misusage. Share insights with the team.'
            ],
            [
                'title' => 'Plan database backup schedule',
                'description' => 'Set up automatic backups.',
                'long_description' => 'Create and configure a weekly automatic database backup system with cron job settings.'
            ],
            [
                'title' => 'Test user registration form',
                'description' => 'Validate form fields and errors.',
                'long_description' => 'Test the user registration form in multiple scenarios to ensure validations work correctly and report any issues found.'
            ],
            [
                'title' => 'Improve UI design',
                'description' => 'Enhance layouts using Tailwind CSS.',
                'long_description' => 'Make design improvements to the homepage and task list pages for a more intuitive user experience.'
            ],
            [
                'title' => 'Conduct project status review',
                'description' => 'Meet with the team for updates.',
                'long_description' => 'Schedule a status meeting with the team to discuss project progress, obstacles, and the next steps.'
            ],
            [
                'title' => 'Update GitHub README file',
                'description' => 'Improve project documentation.',
                'long_description' => 'Review and enhance the GitHub README with updated instructions, screenshots, and project goals.'
            ],
            [
                'title' => 'Check Google Analytics integration',
                'description' => 'Ensure analytics tracking works.',
                'long_description' => 'Verify that Google Analytics is tracking website visits and user behavior accurately across all pages.'
            ],
            [
                'title' => 'Test email notification system',
                'description' => 'Validate email alerts.',
                'long_description' => 'Check email notifications for different actions and ensure they are triggered and displayed as expected.'
            ],
            [
                'title' => 'Create wireframe for new feature',
                'description' => 'Design wireframes for upcoming updates.',
                'long_description' => 'Sketch out wireframes for new features to share with the design and development teams for approval.'
            ],
            [
                'title' => 'Review code comments',
                'description' => 'Check for clarity and consistency.',
                'long_description' => 'Review all code comments to make sure they are clear, accurate, and helpful for future developers.'
            ],
            [
                'title' => 'Optimize modals using Alpine.js',
                'description' => 'Improve modal animations and responsiveness.',
                'long_description' => 'Enhance modal windows by optimizing their animations and ensuring they work smoothly on all devices.'
            ],
            [
                'title' => 'Check Laravel migrations',
                'description' => 'Validate database migration files.',
                'long_description' => 'Review all migration files for consistency and accuracy before running them in production.'
            ],
            [
                'title' => 'Clean and organize project files',
                'description' => 'Remove unused files.',
                'long_description' => 'Go through the project directories and delete unused or obsolete files to keep the project structure clean.'
            ],
            [
                'title' => 'Analyze bug reports',
                'description' => 'Review and prioritize bugs.',
                'long_description' => 'Go through recent bug reports, categorize them, and suggest priorities and solutions.'
            ],
            [
                'title' => 'Perform mobile compatibility tests',
                'description' => 'Ensure mobile responsiveness.',
                'long_description' => 'Test all pages on different mobile devices and screen sizes to ensure proper layout and functionality.'
            ],
            [
                'title' => 'Review user feedback',
                'description' => 'Analyze and document feedback.',
                'long_description' => 'Go through collected user feedback and identify key points for improvement in the next release.'
            ],
            [
                'title' => 'Optimize database queries',
                'description' => 'Improve database performance.',
                'long_description' => 'Analyze and optimize slow or inefficient queries for better overall performance.'
            ],
            [
                'title' => 'Measure page loading speed',
                'description' => 'Test site performance.',
                'long_description' => 'Use performance tools to measure load times on different pages and prepare a report with suggestions.'
            ],
            [
                'title' => 'Audit admin panel permissions',
                'description' => 'Check user access roles.',
                'long_description' => 'Review all admin panel user roles and permissions to ensure security and proper access control.'
            ],
        ];

        foreach ($tasks as $task) {
            DB::table('tasks')->insert([
                'title' => $task['title'],
                'description' => $task['description'],
                'long_description' => $task['long_description'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
