# RoomRS

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Unique code that identifies the room | 
**name** | **string** |  | 
**bed_types** | [**\PlugAndTravel\Client\Models\BedType[]**](BedType.md) | A list of bed types from you can choose when you will book this room. If more than one bedtype is returned, is mandatory to choose one when booking the room.               The chosen bed type is not guaranteed by supplier. | [optional] 
**hotel_code** | **string** |  | 
**provider_hotel_code** | **string** |  | 
**provider** | **string** |  | 
**tokens** | [**\PlugAndTravel\Client\Models\Token[]**](Token.md) | Tokens received from provider. Must be send back in Book method. | 
**occupancy** | [**\PlugAndTravel\Client\Models\Occupancy**](Occupancy.md) |  | 
**price_changed** | **bool** | Indicates if the room has the same price as requested one or price has changed | 
**price** | [**\PlugAndTravel\Client\Models\Price**](Price.md) | New price, if price has changed or old room price if price remains the same. | 
**currency** | **string** |  | 
**is_non_refundable** | **bool** | Indicates explicitly if the reservation can be refunded or not after booking.              In case that room is nonrefundable, meaning after booking you will pay full amount in case of cancellation, you will receive no cancellation policies. | 
**cancellation_policies** | [**\PlugAndTravel\Client\Models\CancellationPolicy[]**](CancellationPolicy.md) |  | 
**room_supplements** | [**\PlugAndTravel\Client\Models\RoomSupplement[]**](RoomSupplement.md) | Is an extra service per room such as:  Disney tickets, airport transfer an so on. | [optional] 
**person_supplements** | [**\PlugAndTravel\Client\Models\PersonSupplement[]**](PersonSupplement.md) | Is an extra service per person such as:  Disney tickets, airport transfer an so on. | [optional] 
**room_taxes** | [**\PlugAndTravel\Client\Models\RoomTax[]**](RoomTax.md) |  | [optional] 
**essential_information** | **string[]** |  | [optional] 
**meal** | [**\PlugAndTravel\Client\Models\Meal**](Meal.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


