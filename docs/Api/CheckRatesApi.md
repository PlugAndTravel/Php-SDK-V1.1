# PlugAndTravel\CheckRatesApi

All URIs are relative to *http://demo-interface.plugandtravel.com/Booking/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkHotelRates**](CheckRatesApi.md#checkHotelRates) | **POST** /api/CheckRates | Methods used to recheck prices and availability and get cancellation policies


# **checkHotelRates**
> \PlugAndTravel\Client\Models\CheckHotelRatesRS checkHotelRates($check_hotel_rates_rq, $user_name, $access_token)

Methods used to recheck prices and availability and get cancellation policies

Use this method to recheck availability and prices for a RoomGroup obtained with HotelAvailability method that you want to book. Also using this method you can get Cancellation policies               for every room incapsulated in this RoomGroup.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: AccessToken
PlugAndTravel\Configuration::getDefaultConfiguration()->setApiKey('AccessToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// PlugAndTravel\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AccessToken', 'Bearer');

$api_instance = new PlugAndTravel\Api\CheckRatesApi();
$check_hotel_rates_rq = new \PlugAndTravel\Client\Models\CheckHotelRatesRQ(); // \PlugAndTravel\Client\Models\CheckHotelRatesRQ | 
$user_name = "Demo"; // string | User Name
$access_token = "access_token_example"; // string | Access Token

try {
    $result = $api_instance->checkHotelRates($check_hotel_rates_rq, $user_name, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckRatesApi->checkHotelRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **check_hotel_rates_rq** | [**\PlugAndTravel\Client\Models\CheckHotelRatesRQ**](../Model/\PlugAndTravel\Client\Models\CheckHotelRatesRQ.md)|  |
 **user_name** | **string**| User Name | [default to Demo]
 **access_token** | **string**| Access Token |

### Return type

[**\PlugAndTravel\Client\Models\CheckHotelRatesRS**](../Model/CheckHotelRatesRS.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

