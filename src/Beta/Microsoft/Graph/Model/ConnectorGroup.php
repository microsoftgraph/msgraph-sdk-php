<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConnectorGroup File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* ConnectorGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConnectorGroup extends Entity
{
    /**
    * Gets the connectorGroupType
    *
    * @return ConnectorGroupType The connectorGroupType
    */
    public function getConnectorGroupType()
    {
        if (array_key_exists("connectorGroupType", $this->_propDict)) {
            if (is_a($this->_propDict["connectorGroupType"], "Beta\Microsoft\Graph\Model\ConnectorGroupType")) {
                return $this->_propDict["connectorGroupType"];
            } else {
                $this->_propDict["connectorGroupType"] = new ConnectorGroupType($this->_propDict["connectorGroupType"]);
                return $this->_propDict["connectorGroupType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the connectorGroupType
    *
    * @param ConnectorGroupType $val The connectorGroupType
    *
    * @return ConnectorGroup
    */
    public function setConnectorGroupType($val)
    {
        $this->_propDict["connectorGroupType"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDefault
    *
    * @return bool The isDefault
    */
    public function getIsDefault()
    {
        if (array_key_exists("isDefault", $this->_propDict)) {
            return $this->_propDict["isDefault"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDefault
    *
    * @param bool $val The isDefault
    *
    * @return ConnectorGroup
    */
    public function setIsDefault($val)
    {
        $this->_propDict["isDefault"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    *
    * @param string $val The name
    *
    * @return ConnectorGroup
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the region
    *
    * @return ConnectorGroupRegion The region
    */
    public function getRegion()
    {
        if (array_key_exists("region", $this->_propDict)) {
            if (is_a($this->_propDict["region"], "Beta\Microsoft\Graph\Model\ConnectorGroupRegion")) {
                return $this->_propDict["region"];
            } else {
                $this->_propDict["region"] = new ConnectorGroupRegion($this->_propDict["region"]);
                return $this->_propDict["region"];
            }
        }
        return null;
    }
    
    /**
    * Sets the region
    *
    * @param ConnectorGroupRegion $val The region
    *
    * @return ConnectorGroup
    */
    public function setRegion($val)
    {
        $this->_propDict["region"] = $val;
        return $this;
    }
    

     /** 
     * Gets the applications
     *
     * @return array The applications
     */
    public function getApplications()
    {
        if (array_key_exists("applications", $this->_propDict)) {
           return $this->_propDict["applications"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the applications
    *
    * @param Application $val The applications
    *
    * @return ConnectorGroup
    */
    public function setApplications($val)
    {
		$this->_propDict["applications"] = $val;
        return $this;
    }
    

     /** 
     * Gets the members
     *
     * @return array The members
     */
    public function getMembers()
    {
        if (array_key_exists("members", $this->_propDict)) {
           return $this->_propDict["members"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the members
    *
    * @param Connector $val The members
    *
    * @return ConnectorGroup
    */
    public function setMembers($val)
    {
		$this->_propDict["members"] = $val;
        return $this;
    }
    
}