<?php

namespace Yebto\NumerologyAPI;

use Yebto\ApiClient\YebtoClient;

class NumerologyAPI extends YebtoClient
{
    protected function module(): string
    {
        return 'numerology';
    }

    protected function defaults(): array
    {
        return [
            'base_url' => 'https://api.yeb.to/v1',
            'key'      => null,
            'curl'     => [
                CURLOPT_TIMEOUT        => 30,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
                CURLOPT_USERAGENT      => 'yebto-numerology-api-php',
            ],
        ];
    }

    /**
     * Get all numerological numbers at once
     */
    public function numerologicalNumbers(string $full_name, string $birth_date, array $extra = []): array
    {
        return $this->post('numerological-numbers', array_merge(compact('full_name', 'birth_date'), $extra));
    }

    /**
     * Calculate life path number
     */
    public function lifepathNumber(string $birth_date, array $extra = []): array
    {
        return $this->post('lifepath-number', array_merge(compact('birth_date'), $extra));
    }

    /**
     * Calculate personality number
     */
    public function personalityNumber(string $full_name, array $extra = []): array
    {
        return $this->post('personality-number', array_merge(compact('full_name'), $extra));
    }

    /**
     * Calculate expression (destiny) number
     */
    public function expressionNumber(string $full_name, array $extra = []): array
    {
        return $this->post('expression-number', array_merge(compact('full_name'), $extra));
    }

    /**
     * Calculate soul urge number
     */
    public function soulUrgeNumber(string $full_name, array $extra = []): array
    {
        return $this->post('soul-urge-number', array_merge(compact('full_name'), $extra));
    }

    /**
     * Calculate challenge numbers
     */
    public function challengeNumbers(string $birth_date, array $extra = []): array
    {
        return $this->post('challenge-numbers', array_merge(compact('birth_date'), $extra));
    }

    /**
     * Calculate subconscious self number
     */
    public function subconsciousSelfNumber(string $full_name, array $extra = []): array
    {
        return $this->post('subconscious-self-number', array_merge(compact('full_name'), $extra));
    }

    /**
     * Get personal day prediction
     */
    public function personalDayPrediction(string $birth_date, array $extra = []): array
    {
        return $this->post('personal-day-prediction', array_merge(compact('birth_date'), $extra));
    }

    /**
     * Get personal month prediction
     */
    public function personalMonthPrediction(string $birth_date, array $extra = []): array
    {
        return $this->post('personal-month-prediction', array_merge(compact('birth_date'), $extra));
    }

    /**
     * Get personal year prediction
     */
    public function personalYearPrediction(string $birth_date, array $extra = []): array
    {
        return $this->post('personal-year-prediction', array_merge(compact('birth_date'), $extra));
    }
}
