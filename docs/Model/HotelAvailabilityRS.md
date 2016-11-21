# HotelAvailabilityRS

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**booking_flow_id** | **string** | Unique id (GUID) used to identify all requests starting from HotelAvailability. This will be generated for every HotelAvailability request and you must use it later in CheckRates and  Book requests. | 
**request_duration** | **int** | Number of milliseconds spent on server until request completion. | [optional] 
**time_stamp** | **string** | UTC time when request has completed. | [optional] 
**hotels** | [**\PlugAndTravel\Client\Models\Hotel[]**](Hotel.md) | Available hotels | [optional] 
**error** | [**\PlugAndTravel\Client\Models\Error**](Error.md) | Details with any error arised | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


