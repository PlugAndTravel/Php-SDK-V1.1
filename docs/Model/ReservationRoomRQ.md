# ReservationRoomRQ

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** |  | 
**name** | **string** |  | 
**bed_type** | [**\PlugAndTravel\Client\Models\BedType**](BedType.md) | If you got more than one bed types in check rates response, is mandatory to choose one bed type for the room you want to book. | [optional] 
**hotel_code** | **string** |  | 
**provider_hotel_code** | **string** |  | 
**provider** | **string** |  | 
**total_reservation_price** | **double** | Requested price for this reservation. In some cases if the provider price will change during booking flow we won&#39;t make the reservation. | 
**currency** | **string** |  | 
**meal** | [**\PlugAndTravel\Client\Models\Meal**](Meal.md) |  | [optional] 
**tokens** | [**\PlugAndTravel\Client\Models\Token[]**](Token.md) | Tokens received in HotelAvailability or Checkrates (should be the same) | 
**occupancy** | [**\PlugAndTravel\Client\Models\Occupancy**](Occupancy.md) | Occupancy for this room | 
**guest** | [**\PlugAndTravel\Client\Models\Guest**](Guest.md) | Main guest name for this room | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


