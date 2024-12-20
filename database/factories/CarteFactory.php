<?php

namespace Database\Factories;

use App\Models\Carte;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Carte>
 */
class CarteFactory extends Factory
{
    /**
     * Le nom du modèle correspondant.
     *
     * @var string
     */
    protected $model = Carte::class;

    /**
     * Définition de l'état par défaut du modèle.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'nom-carte' => $this->faker->word(), // Nom de la carte aléatoire
            'image-carte' => $this->faker->imageUrl(640, 480, 'cards', true, 'Faker'), // Image aléatoire
            'description-carte' => $this->faker->sentence(), // Une phrase en guise de description
            'user_id' => User::factory(), // Associe la carte à un utilisateur généré
        ];
    }
}
