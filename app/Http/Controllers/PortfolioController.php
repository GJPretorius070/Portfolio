<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = [
            'personal' => [
                'name' => 'GJ Pretorius',
                'title' => 'Full Stack Engineer & Automation Specialist',
                'email' => 'Geejay097@gmail.com',
                'phone' => '0832516968',
                'location' => '16 Villa Napoli, Langenhovenpark, Bloemfontein, 9301',
                'linkedin' => 'https://www.linkedin.com/in/gj-pretorius-243957275',
                'bio' => 'Innovative Full Stack Engineer and Automation Specialist with a deep expertise in MVC Architectures and Mobile-First Development. Proven track record of engineering scalable, high-performance web and mobile solutions using Laravel, ASP.NET, and modern JavaScript frameworks. Passionate about streamlining workflows through advanced Automation strategies and DevOps best practices. Dedicated to building robust, secure, and intuitive applications that bridge the gap between complex backend logic and seamless user experiences on any device.'
            ],
            'experience' => [
                [
                    'role' => 'Full Stack Developer',
                    'company' => 'Wirulink',
                    'period' => 'July 2024 – Current',
                    'details' => [
                        'Architected and developed robust, full-stack web applications using the Laravel (PHP) framework and ASP.NET Core, employing Eloquent ORM for database management and Blade for dynamic front-end templating.',
                        'Strictly adhered to MVC patterns to ensure code scalability, maintainability, and separation of concerns across all projects.',
                        'Designed, built, and maintained secure and efficient RESTful APIs to facilitate seamless data communication between the back-end, front-end (JavaScript/Vue.js/React), and external third-party services.',
                        'Implemented API authentication and authorization using Laravel Sanctum/Passport to protect sensitive endpoints and ensure secure data access for various client applications.',
                        'Developed custom automation scripts (Bash/Python) and Artisan commands to streamline repetitive administrative tasks, data migration, and system maintenance.',
                        'Engineered custom automation suites using Laravel APIs and complex N8N workflows, reducing manual administrative overhead by automating data migrations, system maintenance, and reporting tasks.',
                        'Collaborated within an Agile/Scrum environment, participating in sprint planning, daily stand-ups, and code reviews to ensure high-quality code and timely delivery of new features.',
                        'Managed database schemas and migrations using Laravel\'s migration system, ensuring version-controlled and consistent database structures across all development and production environments.',
                        'Integrated and managed front-end components using JavaScript, HTML5, CSS3, and React Native for mobile, creating interactive and responsive user interfaces that consume the back-end APIs.'
                    ]
                ],
                [
                    'role' => 'Web Developer & Digital Marketing',
                    'company' => 'Carcass and Cleaver',
                    'period' => 'January 2024 – June 2024',
                    'details' => [
                        'Acquired practical experience using WordPress and WooCommerce, contributing to website development and e-commerce functionalities for easier workload management on the user side.',
                        'Employed Xampp for local development environment setup, facilitating seamless project execution and testing as well as maintaining servers and databases locally.',
                        'Utilized Git for version control, ensuring systematic tracking and management of project changes within a team environment.',
                        'Maintaining projects and servers for latest updates and Bug fixes.',
                        'Utilized integrations of other online available integrate able application addons like Payfast and Google Analytics.',
                        'Designing and publishing Facebook and Instagram ads to bring attention to the company using Adobe Express and Adobe Photoshop.',
                        'Getting information from multiple sources to make a prediction using Azure ML to predict the future of what people are going to buy based on the month and season for better directed posts to enlighten people to make better informed decisions and have a better view on specific topics.',
                        'Making use of Meta\'s build in analytics tools to find what styles and demographics get better user feedback and user engagement'
                    ]
                ]
            ],
            'education' => [
                [
                    'institution' => 'CTU Training Solutions',
                    'date' => 'November 2024',
                    'qualification' => 'Software Development',
                    'subjects' => [
                        'C#', 'Advanced Java', 'Business Programming', 'DevOps Engineering', 'Software development', 'Microsoft AI-900 international certification', 'Microsoft AI-050 international certification'
                    ]
                ],
                [
                    'institution' => 'CTU Training Solutions',
                    'date' => 'November 2023',
                    'qualification' => 'Systems Development',
                    'subjects' => [
                        'Python developer HTML', 'CSS', 'JavaScript developer', 'Azure DP900', 'a+ skills Hardware management', 'Cyber ethics', 'Robotic development', 'JavaScript international certification', 'Html5 international certification', 'CSS international certification'
                    ]
                ],
                [
                    'institution' => 'Grey College',
                    'date' => 'December 2022',
                    'qualification' => 'NSC',
                    'subjects' => [
                        '12th Grade mathematics', '12th Grade Accounting', '12th Grade computer application technology', '12th Grade English', '12th Grade Afrikaans', '12th Grade Life Orientations', '12th Grade Physics'
                    ]
                ]
            ],
            'skills' => [
                'MVC & Backend' => ['Laravel (Expert)', 'ASP.NET Core', 'PHP 7+', 'C#', 'Node.js', 'Entity Framework', 'Eloquent ORM'],
                'Mobile & Frontend' => ['HTML5', 'CSS3', 'JavaScript (ES6+)', 'Vue.js', 'React', 'React Native', 'Blade', 'Mobile-First Design'],
                'Automation & DevOps' => ['N8N Workflows', 'Laravel APIs', 'Python Scripting', 'Bash/Shell', 'CI/CD', 'Docker', 'Git'],
                'Cloud & Tools' => ['Azure (AI-900, DP-900)', 'MySQL', 'MSSQL', 'XAMPP', 'VS Code', 'Adobe Creative Suite']
            ]
        ];

        return view('home', compact('portfolio'));
    }
}
