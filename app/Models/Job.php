<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => '1',
                'title' => 'Director',
                'salary' => '$50, 000'
            ],
            [
                'id' => '2',

                'title' => 'Teacher',
                'salary' => '$25, 000'
            ],
            [
                'id' => '3',

                'title' => 'supervisor',
                'salary' => '$10 000'
            ]
        ];
    }


    public static function find(int $id): array {
        $job = Arr::first(static::all(), fn($job) => (int)$job['id'] === $id);

        if(!$job) {
            abort(404);
        }
        
        return $job;
    }
}



