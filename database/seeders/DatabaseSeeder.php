<?php
namespace Database\Seeders;

use App\Models\Classe;
use App\Models\Department;
use App\Models\Ministry;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Classe::factory()
                ->count(5)
                ->state(new Sequence(
                    [
                        'name' => 'Boa fé',
                        'slug' => Str::slug('Boa fé')
                    ],
                    [
                        'name' => 'Jeremias',
                        'slug' => Str::slug('Jeremias')
                    ],
                    [
                        'name' => 'Neemias e Samuel',
                        'slug' => Str::slug('Neemia
                    s e Samuel')
                    ],
                    [
                        'name' => 'Emanuel',
                        'slug' => Str::slug('Emanuel')
                    ],
                    [
                        'name' => 'Moisés',
                        'slug' => Str::slug('Moisés')
                    ]
                ))
                ->create();

        Department::factory()
                    ->count(5)
                    ->state(new Sequence(
                        [
                            'name' => 'Juventude Adulta',
                            'slug' => Str::slug('Juventude Adulta')
                        ],
                        [
                            'name' => 'Juventude Regular',
                            'slug' => Str::slug('Juventude Regular')
                        ],
                        [
                            'name' => 'Sociedade de Homens',
                            'slug' => Str::slug('Sociedade de Homens')
                        ],
                        [
                            'name' => 'Sociedade de Mulheres',
                            'slug' => Str::slug('Sociedade de Mulheres')
                        ],
                        [
                            'name' => 'Rebentos da Promessa',
                            'slug' => Str::slug('Rebentos da Promessa')
                        ]
                    ))->create();

        Ministry::factory()->count(5)
                        ->state(new Sequence(
                            [
                                'name' => 'Evangelismo',
                                'slug' => Str::slug('Evangelismo'),
                                'founded_in' => date('Y')
                            ],
                            [
                                'name' => 'Louvor e Adoração',
                                'slug' => Str::slug('Louvor e Adoração'),
                                'founded_in' => date('Y')
                            ],
                            [
                                'name' => 'Coro Central',
                                'slug' => Str::slug('Coro Central'),
                                'founded_in' => date('Y')
                            ],
                            [
                                'name' => 'Protocolo',
                                'slug' => Str::slug('Protocolo'),
                                'founded_in' => date('Y')
                            ],
                            [
                                'name' => 'Património',
                                'slug' => Str::slug('Património'),
                                'founded_in' => date('Y')
                            ],
                        ))->create();
    }

    // Departments
}
