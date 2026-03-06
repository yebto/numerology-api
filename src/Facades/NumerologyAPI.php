<?php

namespace Yebto\NumerologyAPI\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array numerologicalNumbers(string $full_name, string $birth_date, array $extra = [])
 * @method static array lifepathNumber(string $birth_date, array $extra = [])
 * @method static array personalityNumber(string $full_name, array $extra = [])
 * @method static array expressionNumber(string $full_name, array $extra = [])
 * @method static array soulUrgeNumber(string $full_name, array $extra = [])
 * @method static array challengeNumbers(string $birth_date, array $extra = [])
 * @method static array subconsciousSelfNumber(string $full_name, array $extra = [])
 * @method static array personalDayPrediction(string $birth_date, array $extra = [])
 * @method static array personalMonthPrediction(string $birth_date, array $extra = [])
 * @method static array personalYearPrediction(string $birth_date, array $extra = [])
 */
class NumerologyAPI extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'yebto-numerology';
    }
}
