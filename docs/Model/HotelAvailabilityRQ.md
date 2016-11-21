# HotelAvailabilityRQ

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_ip_address** | **string** | IPV4 address of the final customer | 
**customer_user_agent** | **string** | Customer useragent used for this request. | 
**destination_code** | **int** | The unique code value for a destination. | 
**check_in** | **string** | Include today&#39;s date to request same-day availability | 
**check_out** | **string** | Total length of stay cannot be greater than 30 nights and even less for some providers. | 
**passenger_country** | **string** | Passenger country of residence. | 
**occupancies** | [**\PlugAndTravel\Client\Models\Occupancy[]**](Occupancy.md) | Allow up to 5 occupancies per booking. | 
**provider** | **string** | If supplied, search only on requested contracted provider, otherwise search on all contracted providers. | [optional] 
**currency** | **string** | For feature use (not available yet).               If supplied, all prices will be in requested currency using our currency exchange, otherwise prices will be in provider currencies. | [optional] 
**hotel_codes** | **string[]** | For feature use              If supplied, &#39;HotelAvailabilityRS &#39; will contain only requested hotels, otherwise will return all hotels | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


