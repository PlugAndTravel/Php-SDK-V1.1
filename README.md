# PlugAndTravel
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v1.1
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/PlugAndTravel/Php-SDK-V1.1.git"
    }
  ],
  "require": {
    "PlugAndTravel/Php-SDK-V1.1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/PlugAndTravel/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: AccessToken
PlugAndTravel\Configuration::getDefaultConfiguration()->setApiKey('AccessToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// PlugAndTravel\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AccessToken', 'Bearer');

$api_instance = new PlugAndTravel\Api\AvailabilityApi();
$hotel_availability_rq = "hotel_availability_rq_example"; // string | HotelAvailabilityRQ json/xml encode
$user_name = "Demo"; // string | User Name
$access_token = "access_token_example"; // string | Access Token

try {
    $result = $api_instance->getHotelAvailability($hotel_availability_rq, $user_name, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->getHotelAvailability: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://demo-interface.plugandtravel.com/Booking/v1.1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AvailabilityApi* | [**getHotelAvailability**](docs/Api/AvailabilityApi.md#gethotelavailability) | **GET** /api/HotelAvailability | Method used to get hotel availability and prices
*CheckRatesApi* | [**checkHotelRates**](docs/Api/CheckRatesApi.md#checkhotelrates) | **POST** /api/CheckRates | Methods used to recheck prices and availability and get cancellation policies
*ReservationApi* | [**book**](docs/Api/ReservationApi.md#book) | **POST** /api/Reservation/Book | Method used to create a reservation
*ReservationApi* | [**cancel**](docs/Api/ReservationApi.md#cancel) | **POST** /api/Reservation/Cancel | Method used to cancel a reservation
*ReservationApi* | [**getReservation**](docs/Api/ReservationApi.md#getreservation) | **GET** /api/Reservation/{reservationId} | Method used to retrieve a reservation


## Documentation For Models

 - [BedType](docs/Model/BedType.md)
 - [CancelRQ](docs/Model/CancelRQ.md)
 - [CancellationPolicy](docs/Model/CancellationPolicy.md)
 - [ChargeType](docs/Model/ChargeType.md)
 - [CheckHotelRatesRQ](docs/Model/CheckHotelRatesRQ.md)
 - [CheckHotelRatesRS](docs/Model/CheckHotelRatesRS.md)
 - [Error](docs/Model/Error.md)
 - [GeoLocation](docs/Model/GeoLocation.md)
 - [Guest](docs/Model/Guest.md)
 - [Hotel](docs/Model/Hotel.md)
 - [HotelAvailabilityRQ](docs/Model/HotelAvailabilityRQ.md)
 - [HotelAvailabilityRS](docs/Model/HotelAvailabilityRS.md)
 - [HotelDetails](docs/Model/HotelDetails.md)
 - [Meal](docs/Model/Meal.md)
 - [Occupancy](docs/Model/Occupancy.md)
 - [OperationInfo](docs/Model/OperationInfo.md)
 - [OperationType](docs/Model/OperationType.md)
 - [PersonSupplement](docs/Model/PersonSupplement.md)
 - [Price](docs/Model/Price.md)
 - [Rating](docs/Model/Rating.md)
 - [Reservation](docs/Model/Reservation.md)
 - [ReservationPrice](docs/Model/ReservationPrice.md)
 - [ReservationRQ](docs/Model/ReservationRQ.md)
 - [ReservationRS](docs/Model/ReservationRS.md)
 - [ReservationRoom](docs/Model/ReservationRoom.md)
 - [ReservationRoomRQ](docs/Model/ReservationRoomRQ.md)
 - [ReservationStatus](docs/Model/ReservationStatus.md)
 - [ResevationRoomGroupRQ](docs/Model/ResevationRoomGroupRQ.md)
 - [Room](docs/Model/Room.md)
 - [RoomGroup](docs/Model/RoomGroup.md)
 - [RoomGroupRQ](docs/Model/RoomGroupRQ.md)
 - [RoomGroupRS](docs/Model/RoomGroupRS.md)
 - [RoomRQ](docs/Model/RoomRQ.md)
 - [RoomRS](docs/Model/RoomRS.md)
 - [RoomSupplement](docs/Model/RoomSupplement.md)
 - [RoomTax](docs/Model/RoomTax.md)
 - [SupplementAge](docs/Model/SupplementAge.md)
 - [Token](docs/Model/Token.md)


## Documentation For Authorization


## AccessToken

- **Type**: API key
- **API key parameter name**: AccessToken
- **Location**: HTTP header

## UserName

- **Type**: API key
- **API key parameter name**: UserName
- **Location**: HTTP header


## Author




