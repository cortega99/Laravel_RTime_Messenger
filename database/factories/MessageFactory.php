<?php

namespace Database\Factories;

use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    protected $model = Message::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        do {
            $from = rand(1,15);
            $to = rand(1,15);
        } while ($from === $to);

        return [
            'from' => $from,
            'to' => $to,
            'text' => $this->faker->text(),
        ];
    }
}
