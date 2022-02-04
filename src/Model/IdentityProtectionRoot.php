<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityProtectionRoot File
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
* IdentityProtectionRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdentityProtectionRoot implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new IdentityProtectionRoot
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
    * Gets the property dictionary of the IdentityProtectionRoot
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }


     /**
     * Gets the riskDetections
    * Risk detection in Azure AD Identity Protection and the associated information about the detection.
     *
     * @return RiskDetection[]|null The riskDetections
     */
    public function getRiskDetections()
    {
        if (array_key_exists('riskDetections', $this->_propDict) && !is_null($this->_propDict['riskDetections'])) {
            $riskDetections = [];
            if (count($this->_propDict['riskDetections']) > 0 && is_a($this->_propDict['riskDetections'][0], 'RiskDetection')) {
                return $this->_propDict['riskDetections'];
            }
            foreach ($this->_propDict['riskDetections'] as $singleValue) {
                $riskDetections []= new RiskDetection($singleValue);
            }
            $this->_propDict['riskDetections'] = $riskDetections;
            return $this->_propDict['riskDetections'];
        }
        return null;
    }

    /**
    * Sets the riskDetections
    * Risk detection in Azure AD Identity Protection and the associated information about the detection.
    *
    * @param RiskDetection[] $val The riskDetections
    *
    * @return IdentityProtectionRoot
    */
    public function setRiskDetections($val)
    {
        $this->_propDict["riskDetections"] = $val;
        return $this;
    }


     /**
     * Gets the riskyUsers
    * Users that are flagged as at-risk by Azure AD Identity Protection.
     *
     * @return RiskyUser[]|null The riskyUsers
     */
    public function getRiskyUsers()
    {
        if (array_key_exists('riskyUsers', $this->_propDict) && !is_null($this->_propDict['riskyUsers'])) {
            $riskyUsers = [];
            if (count($this->_propDict['riskyUsers']) > 0 && is_a($this->_propDict['riskyUsers'][0], 'RiskyUser')) {
                return $this->_propDict['riskyUsers'];
            }
            foreach ($this->_propDict['riskyUsers'] as $singleValue) {
                $riskyUsers []= new RiskyUser($singleValue);
            }
            $this->_propDict['riskyUsers'] = $riskyUsers;
            return $this->_propDict['riskyUsers'];
        }
        return null;
    }

    /**
    * Sets the riskyUsers
    * Users that are flagged as at-risk by Azure AD Identity Protection.
    *
    * @param RiskyUser[] $val The riskyUsers
    *
    * @return IdentityProtectionRoot
    */
    public function setRiskyUsers($val)
    {
        $this->_propDict["riskyUsers"] = $val;
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
    * @return IdentityProtectionRoot
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
