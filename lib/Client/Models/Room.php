<?php
/**
 * Room
 *
 * PHP version 5
 *
 * @category Class
 * @package  PlugAndTravel
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PlugAndTravel.BookingAPI
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace PlugAndTravel\Client\Models;

use \ArrayAccess;

/**
 * Room Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     PlugAndTravel
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Room implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Room';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'code' => 'string',
        'provider_hotel_code' => 'string',
        'provider' => 'string',
        'name' => 'string',
        'occupancy' => '\PlugAndTravel\Client\Models\Occupancy',
        'cancellation_policies' => '\PlugAndTravel\Client\Models\CancellationPolicy[]',
        'tokens' => '\PlugAndTravel\Client\Models\Token[]',
        'price' => '\PlugAndTravel\Client\Models\Price',
        'room_supplements' => '\PlugAndTravel\Client\Models\RoomSupplement[]',
        'person_supplements' => '\PlugAndTravel\Client\Models\PersonSupplement[]',
        'room_taxes' => '\PlugAndTravel\Client\Models\RoomTax[]',
        'essential_information' => 'string[]',
        'meal' => '\PlugAndTravel\Client\Models\Meal',
        'special_offer_name' => 'string',
        'is_non_refundable' => 'bool',
        'currency' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'code' => 'Code',
        'provider_hotel_code' => 'ProviderHotelCode',
        'provider' => 'Provider',
        'name' => 'Name',
        'occupancy' => 'Occupancy',
        'cancellation_policies' => 'CancellationPolicies',
        'tokens' => 'Tokens',
        'price' => 'Price',
        'room_supplements' => 'RoomSupplements',
        'person_supplements' => 'PersonSupplements',
        'room_taxes' => 'RoomTaxes',
        'essential_information' => 'EssentialInformation',
        'meal' => 'Meal',
        'special_offer_name' => 'SpecialOfferName',
        'is_non_refundable' => 'IsNonRefundable',
        'currency' => 'Currency'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'code' => 'setCode',
        'provider_hotel_code' => 'setProviderHotelCode',
        'provider' => 'setProvider',
        'name' => 'setName',
        'occupancy' => 'setOccupancy',
        'cancellation_policies' => 'setCancellationPolicies',
        'tokens' => 'setTokens',
        'price' => 'setPrice',
        'room_supplements' => 'setRoomSupplements',
        'person_supplements' => 'setPersonSupplements',
        'room_taxes' => 'setRoomTaxes',
        'essential_information' => 'setEssentialInformation',
        'meal' => 'setMeal',
        'special_offer_name' => 'setSpecialOfferName',
        'is_non_refundable' => 'setIsNonRefundable',
        'currency' => 'setCurrency'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'code' => 'getCode',
        'provider_hotel_code' => 'getProviderHotelCode',
        'provider' => 'getProvider',
        'name' => 'getName',
        'occupancy' => 'getOccupancy',
        'cancellation_policies' => 'getCancellationPolicies',
        'tokens' => 'getTokens',
        'price' => 'getPrice',
        'room_supplements' => 'getRoomSupplements',
        'person_supplements' => 'getPersonSupplements',
        'room_taxes' => 'getRoomTaxes',
        'essential_information' => 'getEssentialInformation',
        'meal' => 'getMeal',
        'special_offer_name' => 'getSpecialOfferName',
        'is_non_refundable' => 'getIsNonRefundable',
        'currency' => 'getCurrency'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['provider_hotel_code'] = isset($data['provider_hotel_code']) ? $data['provider_hotel_code'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['occupancy'] = isset($data['occupancy']) ? $data['occupancy'] : null;
        $this->container['cancellation_policies'] = isset($data['cancellation_policies']) ? $data['cancellation_policies'] : null;
        $this->container['tokens'] = isset($data['tokens']) ? $data['tokens'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['room_supplements'] = isset($data['room_supplements']) ? $data['room_supplements'] : null;
        $this->container['person_supplements'] = isset($data['person_supplements']) ? $data['person_supplements'] : null;
        $this->container['room_taxes'] = isset($data['room_taxes']) ? $data['room_taxes'] : null;
        $this->container['essential_information'] = isset($data['essential_information']) ? $data['essential_information'] : null;
        $this->container['meal'] = isset($data['meal']) ? $data['meal'] : null;
        $this->container['special_offer_name'] = isset($data['special_offer_name']) ? $data['special_offer_name'] : null;
        $this->container['is_non_refundable'] = isset($data['is_non_refundable']) ? $data['is_non_refundable'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['code'] === null) {
            $invalid_properties[] = "'code' can't be null";
        }
        if ($this->container['provider_hotel_code'] === null) {
            $invalid_properties[] = "'provider_hotel_code' can't be null";
        }
        if ($this->container['provider'] === null) {
            $invalid_properties[] = "'provider' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['occupancy'] === null) {
            $invalid_properties[] = "'occupancy' can't be null";
        }
        if ($this->container['tokens'] === null) {
            $invalid_properties[] = "'tokens' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalid_properties[] = "'price' can't be null";
        }
        if ($this->container['is_non_refundable'] === null) {
            $invalid_properties[] = "'is_non_refundable' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalid_properties[] = "'currency' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['code'] === null) {
            return false;
        }
        if ($this->container['provider_hotel_code'] === null) {
            return false;
        }
        if ($this->container['provider'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['occupancy'] === null) {
            return false;
        }
        if ($this->container['tokens'] === null) {
            return false;
        }
        if ($this->container['price'] === null) {
            return false;
        }
        if ($this->container['is_non_refundable'] === null) {
            return false;
        }
        if ($this->container['currency'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code Unique code that identifies the room. Just pass it in the next request.
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets provider_hotel_code
     * @return string
     */
    public function getProviderHotelCode()
    {
        return $this->container['provider_hotel_code'];
    }

    /**
     * Sets provider_hotel_code
     * @param string $provider_hotel_code
     * @return $this
     */
    public function setProviderHotelCode($provider_hotel_code)
    {
        $this->container['provider_hotel_code'] = $provider_hotel_code;

        return $this;
    }

    /**
     * Gets provider
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     * @param string $provider
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets occupancy
     * @return \PlugAndTravel\Client\Models\Occupancy
     */
    public function getOccupancy()
    {
        return $this->container['occupancy'];
    }

    /**
     * Sets occupancy
     * @param \PlugAndTravel\Client\Models\Occupancy $occupancy Searched occupancy that fits this room
     * @return $this
     */
    public function setOccupancy($occupancy)
    {
        $this->container['occupancy'] = $occupancy;

        return $this;
    }

    /**
     * Gets cancellation_policies
     * @return \PlugAndTravel\Client\Models\CancellationPolicy[]
     */
    public function getCancellationPolicies()
    {
        return $this->container['cancellation_policies'];
    }

    /**
     * Sets cancellation_policies
     * @param \PlugAndTravel\Client\Models\CancellationPolicy[] $cancellation_policies For feature use.               You can get cancellation policies using CheckRates method
     * @return $this
     */
    public function setCancellationPolicies($cancellation_policies)
    {
        $this->container['cancellation_policies'] = $cancellation_policies;

        return $this;
    }

    /**
     * Gets tokens
     * @return \PlugAndTravel\Client\Models\Token[]
     */
    public function getTokens()
    {
        return $this->container['tokens'];
    }

    /**
     * Sets tokens
     * @param \PlugAndTravel\Client\Models\Token[] $tokens Tokens sent by providers. Must be sent in your future requests in order to make a booking
     * @return $this
     */
    public function setTokens($tokens)
    {
        $this->container['tokens'] = $tokens;

        return $this;
    }

    /**
     * Gets price
     * @return \PlugAndTravel\Client\Models\Price
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param \PlugAndTravel\Client\Models\Price $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets room_supplements
     * @return \PlugAndTravel\Client\Models\RoomSupplement[]
     */
    public function getRoomSupplements()
    {
        return $this->container['room_supplements'];
    }

    /**
     * Sets room_supplements
     * @param \PlugAndTravel\Client\Models\RoomSupplement[] $room_supplements Is an extra service per room such as:  Disney tickets, airport transfer an so on.
     * @return $this
     */
    public function setRoomSupplements($room_supplements)
    {
        $this->container['room_supplements'] = $room_supplements;

        return $this;
    }

    /**
     * Gets person_supplements
     * @return \PlugAndTravel\Client\Models\PersonSupplement[]
     */
    public function getPersonSupplements()
    {
        return $this->container['person_supplements'];
    }

    /**
     * Sets person_supplements
     * @param \PlugAndTravel\Client\Models\PersonSupplement[] $person_supplements Is an extra service per person such as:  Disney tickets, airport transfer an so on.
     * @return $this
     */
    public function setPersonSupplements($person_supplements)
    {
        $this->container['person_supplements'] = $person_supplements;

        return $this;
    }

    /**
     * Gets room_taxes
     * @return \PlugAndTravel\Client\Models\RoomTax[]
     */
    public function getRoomTaxes()
    {
        return $this->container['room_taxes'];
    }

    /**
     * Sets room_taxes
     * @param \PlugAndTravel\Client\Models\RoomTax[] $room_taxes
     * @return $this
     */
    public function setRoomTaxes($room_taxes)
    {
        $this->container['room_taxes'] = $room_taxes;

        return $this;
    }

    /**
     * Gets essential_information
     * @return string[]
     */
    public function getEssentialInformation()
    {
        return $this->container['essential_information'];
    }

    /**
     * Sets essential_information
     * @param string[] $essential_information
     * @return $this
     */
    public function setEssentialInformation($essential_information)
    {
        $this->container['essential_information'] = $essential_information;

        return $this;
    }

    /**
     * Gets meal
     * @return \PlugAndTravel\Client\Models\Meal
     */
    public function getMeal()
    {
        return $this->container['meal'];
    }

    /**
     * Sets meal
     * @param \PlugAndTravel\Client\Models\Meal $meal
     * @return $this
     */
    public function setMeal($meal)
    {
        $this->container['meal'] = $meal;

        return $this;
    }

    /**
     * Gets special_offer_name
     * @return string
     */
    public function getSpecialOfferName()
    {
        return $this->container['special_offer_name'];
    }

    /**
     * Sets special_offer_name
     * @param string $special_offer_name
     * @return $this
     */
    public function setSpecialOfferName($special_offer_name)
    {
        $this->container['special_offer_name'] = $special_offer_name;

        return $this;
    }

    /**
     * Gets is_non_refundable
     * @return bool
     */
    public function getIsNonRefundable()
    {
        return $this->container['is_non_refundable'];
    }

    /**
     * Sets is_non_refundable
     * @param bool $is_non_refundable Indicates if cancellation policy is nonrefundable.              Please note that not all providers return this on search, so it's possible that a room that is not nonrefundable in search              to apper as nonrefundable in booking flow, as we get cancellation policies from providers that don't specify in search if room is nonrefundable.
     * @return $this
     */
    public function setIsNonRefundable($is_non_refundable)
    {
        $this->container['is_non_refundable'] = $is_non_refundable;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency Price currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\PlugAndTravel\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\PlugAndTravel\ObjectSerializer::sanitizeForSerialization($this));
    }
}


