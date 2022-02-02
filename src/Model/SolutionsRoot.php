<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SolutionsRoot File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* SolutionsRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SolutionsRoot implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new SolutionsRoot
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
        if (!is_array($propDict)) {
           $propDict = array();
        }
        $this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the SolutionsRoot
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }


     /**
     * Gets the bookingBusinesses
     *
     * @return BookingBusiness[]|null The bookingBusinesses
     */
    public function getBookingBusinesses()
    {
        if (array_key_exists('bookingBusinesses', $this->_propDict) && !is_null($this->_propDict['bookingBusinesses'])) {
            $bookingBusinesses = [];
            if (count($this->_propDict['bookingBusinesses']) > 0 && is_a($this->_propDict['bookingBusinesses'][0], 'BookingBusiness')) {
                return $this->_propDict['bookingBusinesses'];
            }
            foreach ($this->_propDict['bookingBusinesses'] as $singleValue) {
                $bookingBusinesses []= new BookingBusiness($singleValue);
            }
            $this->_propDict['bookingBusinesses'] = $bookingBusinesses;
            return $this->_propDict['bookingBusinesses'];
        }
        return null;
    }

    /**
    * Sets the bookingBusinesses
    *
    * @param BookingBusiness[] $val The bookingBusinesses
    *
    * @return SolutionsRoot
    */
    public function setBookingBusinesses($val)
    {
        $this->_propDict["bookingBusinesses"] = $val;
        return $this;
    }


     /**
     * Gets the bookingCurrencies
     *
     * @return BookingCurrency[]|null The bookingCurrencies
     */
    public function getBookingCurrencies()
    {
        if (array_key_exists('bookingCurrencies', $this->_propDict) && !is_null($this->_propDict['bookingCurrencies'])) {
            $bookingCurrencies = [];
            if (count($this->_propDict['bookingCurrencies']) > 0 && is_a($this->_propDict['bookingCurrencies'][0], 'BookingCurrency')) {
                return $this->_propDict['bookingCurrencies'];
            }
            foreach ($this->_propDict['bookingCurrencies'] as $singleValue) {
                $bookingCurrencies []= new BookingCurrency($singleValue);
            }
            $this->_propDict['bookingCurrencies'] = $bookingCurrencies;
            return $this->_propDict['bookingCurrencies'];
        }
        return null;
    }

    /**
    * Sets the bookingCurrencies
    *
    * @param BookingCurrency[] $val The bookingCurrencies
    *
    * @return SolutionsRoot
    */
    public function setBookingCurrencies($val)
    {
        $this->_propDict["bookingCurrencies"] = $val;
        return $this;
    }

    /**
    * Gets the ODataType
    *
    * @return string|null The ODataType
    */
    public function getODataType()
    {
        if (array_key_exists('@odata.type', $this->_propDict)) {
            return $this->_propDict["@odata.type"];
        }
        return null;
    }

    /**
    * Sets the ODataType
    *
    * @param string $val The ODataType
    *
    * @return SolutionsRoot
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }

    /**
    * Serializes the object by property array
    * Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_array($val) && !empty($val)) {
                $serializableProperties[$property] = array_map(function ($element) {
                    return $this->serializeUniqueTypes($element);
                }, $val);
                continue;
            }
            $serializableProperties[$property] = $this->serializeUniqueTypes($val);
        }
        return $serializableProperties;
    }

    /**
    * Returns serialized value of \DateTime, \Microsoft\Graph\Core\Enum & \Microsoft\Graph\Entity types
    *
    * @return mixed
    **/
    private function serializeUniqueTypes($val)
    {
        if (is_a($val, '\DateTime')) {
            return $val->format(\DateTimeInterface::RFC3339);
        } else if (is_a($val, '\Microsoft\Graph\Core\Enum')) {
            return $val->value();
        } else if (is_a($val, "\Entity")) {
            return $val->jsonSerialize();
        } else {
            return $val;
        }
    }
}
