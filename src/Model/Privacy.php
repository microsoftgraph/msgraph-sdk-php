<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Privacy File
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
* Privacy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Privacy implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new Privacy
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
    * Gets the property dictionary of the Privacy
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }


     /**
     * Gets the subjectRightsRequests
     *
     * @return SubjectRightsRequest[]|null The subjectRightsRequests
     */
    public function getSubjectRightsRequests()
    {
        if (array_key_exists('subjectRightsRequests', $this->_propDict) && !is_null($this->_propDict['subjectRightsRequests'])) {
            $subjectRightsRequests = [];
            if (count($this->_propDict['subjectRightsRequests']) > 0 && is_a($this->_propDict['subjectRightsRequests'][0], 'SubjectRightsRequest')) {
                return $this->_propDict['subjectRightsRequests'];
            }
            foreach ($this->_propDict['subjectRightsRequests'] as $singleValue) {
                $subjectRightsRequests []= new SubjectRightsRequest($singleValue);
            }
            $this->_propDict['subjectRightsRequests'] = $subjectRightsRequests;
            return $this->_propDict['subjectRightsRequests'];
        }
        return null;
    }

    /**
    * Sets the subjectRightsRequests
    *
    * @param SubjectRightsRequest[] $val The subjectRightsRequests
    *
    * @return Privacy
    */
    public function setSubjectRightsRequests($val)
    {
        $this->_propDict["subjectRightsRequests"] = $val;
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
    * @return Privacy
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
