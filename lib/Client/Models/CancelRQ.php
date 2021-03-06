<?php
/**
 * CancelRQ
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
 * CancelRQ Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     PlugAndTravel
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CancelRQ implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CancelRQ';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'customer_ip_address' => 'string',
        'customer_user_agent' => 'string',
        'reservation_id' => 'int'
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
        'customer_ip_address' => 'CustomerIpAddress',
        'customer_user_agent' => 'CustomerUserAgent',
        'reservation_id' => 'ReservationId'
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
        'customer_ip_address' => 'setCustomerIpAddress',
        'customer_user_agent' => 'setCustomerUserAgent',
        'reservation_id' => 'setReservationId'
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
        'customer_ip_address' => 'getCustomerIpAddress',
        'customer_user_agent' => 'getCustomerUserAgent',
        'reservation_id' => 'getReservationId'
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
        $this->container['customer_ip_address'] = isset($data['customer_ip_address']) ? $data['customer_ip_address'] : null;
        $this->container['customer_user_agent'] = isset($data['customer_user_agent']) ? $data['customer_user_agent'] : null;
        $this->container['reservation_id'] = isset($data['reservation_id']) ? $data['reservation_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['customer_ip_address'] === null) {
            $invalid_properties[] = "'customer_ip_address' can't be null";
        }
        if ($this->container['customer_user_agent'] === null) {
            $invalid_properties[] = "'customer_user_agent' can't be null";
        }
        if ($this->container['reservation_id'] === null) {
            $invalid_properties[] = "'reservation_id' can't be null";
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
        if ($this->container['customer_ip_address'] === null) {
            return false;
        }
        if ($this->container['customer_user_agent'] === null) {
            return false;
        }
        if ($this->container['reservation_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets customer_ip_address
     * @return string
     */
    public function getCustomerIpAddress()
    {
        return $this->container['customer_ip_address'];
    }

    /**
     * Sets customer_ip_address
     * @param string $customer_ip_address IPV4 address of the final customer
     * @return $this
     */
    public function setCustomerIpAddress($customer_ip_address)
    {
        $this->container['customer_ip_address'] = $customer_ip_address;

        return $this;
    }

    /**
     * Gets customer_user_agent
     * @return string
     */
    public function getCustomerUserAgent()
    {
        return $this->container['customer_user_agent'];
    }

    /**
     * Sets customer_user_agent
     * @param string $customer_user_agent 
     * @return $this
     */
    public function setCustomerUserAgent($customer_user_agent)
    {
        $this->container['customer_user_agent'] = $customer_user_agent;

        return $this;
    }

    /**
     * Gets reservation_id
     * @return int
     */
    public function getReservationId()
    {
        return $this->container['reservation_id'];
    }

    /**
     * Sets reservation_id
     * @param int $reservation_id
     * @return $this
     */
    public function setReservationId($reservation_id)
    {
        $this->container['reservation_id'] = $reservation_id;

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


