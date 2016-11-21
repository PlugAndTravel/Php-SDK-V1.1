# CheckHotelRatesRQ

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**booking_flow_id** | **string** | Unique id (GUID) used to identify all requests starting from HotelAvailability. This should be generated for every HotelAvailability request and used later in every request that fallows (CheckRates, Book, GetReservation, Cancel) | 
**customer_ip_address** | **string** | IPV4 address of the final customer | 
**customer_user_agent** | **string** | Customer useragent used for this request. | 
**check_in** | **string** |  | 
**check_out** | **string** |  | 
**passenger_country** | **string** | Passenger country of residence. | 
**room_group** | [**\PlugAndTravel\Client\Models\RoomGroupRQ**](RoomGroupRQ.md) | RoomGroup obtained with HotelAvailability method. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


