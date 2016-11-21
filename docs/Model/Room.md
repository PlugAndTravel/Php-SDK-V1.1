# Room

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Unique code that identifies the room. Just pass it in the next request. | 
**provider_hotel_code** | **string** |  | 
**provider** | **string** |  | 
**name** | **string** |  | 
**occupancy** | [**\PlugAndTravel\Client\Models\Occupancy**](Occupancy.md) | Searched occupancy that fits this room | 
**cancellation_policies** | [**\PlugAndTravel\Client\Models\CancellationPolicy[]**](CancellationPolicy.md) | For feature use.               You can get cancellation policies using CheckRates method | [optional] 
**tokens** | [**\PlugAndTravel\Client\Models\Token[]**](Token.md) | Tokens sent by providers. Must be sent in your future requests in order to make a booking | 
**price** | [**\PlugAndTravel\Client\Models\Price**](Price.md) |  | 
**room_supplements** | [**\PlugAndTravel\Client\Models\RoomSupplement[]**](RoomSupplement.md) | Is an extra service per room such as:  Disney tickets, airport transfer an so on. | [optional] 
**person_supplements** | [**\PlugAndTravel\Client\Models\PersonSupplement[]**](PersonSupplement.md) | Is an extra service per person such as:  Disney tickets, airport transfer an so on. | [optional] 
**room_taxes** | [**\PlugAndTravel\Client\Models\RoomTax[]**](RoomTax.md) |  | [optional] 
**essential_information** | **string[]** |  | [optional] 
**meal** | [**\PlugAndTravel\Client\Models\Meal**](Meal.md) |  | [optional] 
**special_offer_name** | **string** |  | [optional] 
**is_non_refundable** | **bool** | Indicates if cancellation policy is nonrefundable.              Please note that not all providers return this on search, so it&#39;s possible that a room that is not nonrefundable in search              to apper as nonrefundable in booking flow, as we get cancellation policies from providers that don&#39;t specify in search if room is nonrefundable. | 
**currency** | **string** | Price currency | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


