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
namespace Beta\Microsoft\Graph\Model;

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
     * Gets the businessScenarios
     *
     * @return array|null The businessScenarios
     */
    public function getBusinessScenarios()
    {
        if (array_key_exists("businessScenarios", $this->_propDict)) {
           return $this->_propDict["businessScenarios"];
        } else {
            return null;
        }
    }

    /**
    * Sets the businessScenarios
    *
    * @param BusinessScenario[] $val The businessScenarios
    *
    * @return SolutionsRoot
    */
    public function setBusinessScenarios($val)
    {
        $this->_propDict["businessScenarios"] = $val;
        return $this;
    }

    /**
    * Gets the virtualEvents
    *
    * @return VirtualEventsRoot|null The virtualEvents
    */
    public function getVirtualEvents()
    {
        if (array_key_exists("virtualEvents", $this->_propDict)) {
            if (is_a($this->_propDict["virtualEvents"], "\Beta\Microsoft\Graph\Model\VirtualEventsRoot") || is_null($this->_propDict["virtualEvents"])) {
                return $this->_propDict["virtualEvents"];
            } else {
                $this->_propDict["virtualEvents"] = new VirtualEventsRoot($this->_propDict["virtualEvents"]);
                return $this->_propDict["virtualEvents"];
            }
        }
        return null;
    }

    /**
    * Sets the virtualEvents
    *
    * @param VirtualEventsRoot $val The virtualEvents
    *
    * @return SolutionsRoot
    */
    public function setVirtualEvents($val)
    {
        $this->_propDict["virtualEvents"] = $val;
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
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, "\DateTime")) {
                $serializableProperties[$property] = $val->format(\DateTime::RFC3339);
            } else if (is_a($val, "\Microsoft\Graph\Core\Enum")) {
                $serializableProperties[$property] = $val->value();
            } else if (is_a($val, "\Entity")) {
                $serializableProperties[$property] = $val->jsonSerialize();
            } else if (is_a($val, "\GuzzleHttp\Psr7\Stream")) {
                $serializableProperties[$property] = (string) $val;
            }
        }
        return $serializableProperties;
    }
}
