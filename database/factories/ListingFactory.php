<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    private function getTitle() {

        $titles = [
            'Web Developer',
            'Software Engineer',
            'Software Developer',
            'Front End Developer',
            'Network Engineer',
            'Entry Level Software Developer',
            'Salesforce Developer',
            'Game Developer',
            'Programmer',
            'Data Engineer',
            'Developer',
            'Entry Level Developer',
            'Computer Programmer',
            'Full Stack Developer',
            'Junior Software Developer',
            'Unity Developer',
            'Machine Learning Engineer',
            'Junior Front End Developer'
        ];

        return $titles[array_rand($titles)];
    }
    private function getTags() {
        
        $frontend = [
            'React', 'AngularJS', 'JavaScript', 'Angular', 'Bootstrap', 'jQuery', 'HTML, CSS'
        ];

        $backend = [
            'Laravel', 'Python', 'PHP', 'JavaScript', 'Java', 'Django', 'Ruby on Rails', 'Ruby'
        ];

        $db = [
            'MongoDB', 'Oracle Database', 'MySQL', 'Microsoft SQL Server', 'PostgreSQL', 'IBM Db2', 'MariaDB', 'SQLite', 'Redis',
        ];

        $tags = [
            $frontend[array_rand($frontend)],
            $backend[array_rand($backend)],
            $db[array_rand($db)]
        ];

        return implode('=>', $tags);
    }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->getTitle(),
            'tags'  => $this->getTags(),
            'company' => fake()->company(),
            'location' => fake()->city(),
            'email' => fake()->companyEmail(),
            'website' => fake()->url(),
            'description' => fake()->paragraph(5)
        ];
    }
}
