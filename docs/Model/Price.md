# Price

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**booking_price** | **double** | Total booking price (taxes and mandatory room/person supplements included) | 
**total_price_breakdown** | **double[]** | Breakdown for price without taxes.              The index of element indicates the day offset (example: TotalPriceBreakdown[0] represent the charges for the first day ) | 
**total_taxes_breakdown** | **double[]** | Breakdown for taxes              The index of element indicates the day offset              This taxes taxes are not included in price breakdown | [optional] 
**total_price_before_discount_break_down** | **double[]** | For future use. | [optional] 
**commission_included** | **bool** | Indicate if your commission is already included in price. If this is set to true, it means that the total price already contains your commision,              as negociated with providers that works that way. In this case you can&#39;t add any markup, because you will get gross rates.              If false you can add your markups because you will get net rates. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


