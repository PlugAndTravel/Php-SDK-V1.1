# Reservation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique id that identifies the reservation group in our system | [optional] 
**request_duration** | **int** | Number of milliseconds spent on server until request completion. | [optional] 
**time_stamp** | **string** | UTC time when request has completed. | [optional] 
**price_changed_after_booking** | **bool** | Indicates if reservation was made with the requested price or price changed during booking flow | [optional] 
**price_after_booking** | **double** | If price has changed during booking flow here you will find the new price | [optional] 
**reservation_rooms** | [**\PlugAndTravel\Client\Models\ReservationRoom[]**](ReservationRoom.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


