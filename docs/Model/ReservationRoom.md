# ReservationRoom

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique id that identifies the reservation in our system | 
**confirmation_code** | **string** | Unique code that identifies the confirmed reservation in provider system | [optional] 
**provider_reservation_group_code** | **string** | Unique code that identifies the reservation group in provider system.               Possible means of the field per provider:              - for Expedia: ItineraryId              - for Jumbo: ServiceLocator | [optional] 
**name** | **string** | Room name | 
**bed_type** | [**\PlugAndTravel\Client\Models\BedType**](BedType.md) | Chosen bed type (if any) | [optional] 
**status** | [**\PlugAndTravel\Client\Models\ReservationStatus**](ReservationStatus.md) | Booking status | 
**check_in** | **string** | Check-in date of the booked room | 
**check_out** | **string** | Check-out date of the booked room | 
**hotel_details** | [**\PlugAndTravel\Client\Models\HotelDetails**](HotelDetails.md) | Hotel details of the booked room | [optional] 
**operation_info** | [**\PlugAndTravel\Client\Models\OperationInfo[]**](OperationInfo.md) | Indicates dates for operations that was made or can be performed on the reservation (Example: CreationDate, CancellationDate) | [optional] 
**cancellation_deadline** | **string** | The last date when you can cancel without charges | [optional] 
**meal** | [**\PlugAndTravel\Client\Models\Meal**](Meal.md) | Meal plan associated with the room booked | 
**occupancy** | [**\PlugAndTravel\Client\Models\Occupancy**](Occupancy.md) | Occupancy accomodated in this room | 
**guest** | [**\PlugAndTravel\Client\Models\Guest**](Guest.md) | Main guest name | 
**provider** | **string** |  | 
**reservation_price** | [**\PlugAndTravel\Client\Models\ReservationPrice**](ReservationPrice.md) |  | 
**currency** | **string** | Booking currency code | [optional] 
**is_non_refundable** | **bool** | Indicates explicitly if the reservation can be refunded or not | 
**cancellation_policies** | [**\PlugAndTravel\Client\Models\CancellationPolicy[]**](CancellationPolicy.md) |  | 
**essential_informations** | **string[]** | Informations sent by supplier as: Bar closed, Lobby closed, Pool in renovation etc | [optional] 
**remarks** | **string[]** | Useful information about the reservation, like cancellation e-mail for Jumbo provider | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


