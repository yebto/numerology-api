# YEB NumerologyAPI

PHP SDK for the YEB Numerology API. Life path, personality, expression numbers and predictions.

Works standalone (plain PHP) or with Laravel (Facade + auto-discovery).

## Requirements

- PHP 8.1+
- cURL extension
- [YEB API Key](https://yeb.to) (free tier available)

## Installation

```bash
composer require yebto/numerology-api
```

## Standalone Usage

```php
use Yebto\NumerologyAPI\NumerologyAPI;

$api = new NumerologyAPI(['key' => 'your-api-key']);
$result = $api->numerologicalNumbers('example', 'example');
```

## Laravel Usage

Add your API key to `.env`:

```
YEB_KEY_ID=your-api-key
```

Use via Facade:

```php
use NumerologyAPI;

$result = NumerologyAPI::numerologicalNumbers('example', 'example');
```

Or via dependency injection:

```php
use Yebto\NumerologyAPI\NumerologyAPI;

public function handle(NumerologyAPI $api)
{
    $result = $api->numerologicalNumbers('example', 'example');
}
```

### Publish Config

```bash
php artisan vendor:publish --tag=yebto-numerology-config
```

## Available Methods

| Method | Description |
|--------|-------------|
| `numerologicalNumbers($full_name, $birth_date)` | Get all numerological numbers at once |
| `lifepathNumber($birth_date)` | Calculate life path number |
| `personalityNumber($full_name)` | Calculate personality number |
| `expressionNumber($full_name)` | Calculate expression (destiny) number |
| `soulUrgeNumber($full_name)` | Calculate soul urge number |
| `challengeNumbers($birth_date)` | Calculate challenge numbers |
| `subconsciousSelfNumber($full_name)` | Calculate subconscious self number |
| `personalDayPrediction($birth_date)` | Get personal day prediction |
| `personalMonthPrediction($birth_date)` | Get personal month prediction |
| `personalYearPrediction($birth_date)` | Get personal year prediction |


All methods accept an optional `$extra` array parameter for additional API options.

## Error Handling

```php
use Yebto\ApiClient\Exceptions\ApiException;
use Yebto\ApiClient\Exceptions\AuthenticationException;
use Yebto\ApiClient\Exceptions\RateLimitException;

try {
    $result = $api->numerologicalNumbers('example', 'example');
} catch (AuthenticationException $e) {
    // Missing or invalid API key (401)
} catch (RateLimitException $e) {
    // Too many requests (429)
} catch (ApiException $e) {
    echo $e->getMessage();
    echo $e->getHttpCode();
}
```

## Free API Access

Register at [yeb.to](https://yeb.to) with Google OAuth to get a free API key.

## Support

- API Documentation: [https://yeb.to/api/numerology](https://yeb.to/api/numerology)
- Email: support@yeb.to
- Issues: [GitHub Issues](https://github.com/yebto/numerology-api/issues)

## License

MIT - NETOX Ltd.
