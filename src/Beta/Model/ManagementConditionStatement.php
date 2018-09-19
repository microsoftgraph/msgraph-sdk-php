<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementConditionStatement File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* ManagementConditionStatement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ManagementConditionStatement extends Entity
{
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return ManagementConditionStatement
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return ManagementConditionStatement
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ManagementConditionStatement
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the modifiedDateTime
    *
    * @return \DateTime The modifiedDateTime
    */
    public function getModifiedDateTime()
    {
        if (array_key_exists("modifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["modifiedDateTime"], "\DateTime")) {
                return $this->_propDict["modifiedDateTime"];
            } else {
                $this->_propDict["modifiedDateTime"] = new \DateTime($this->_propDict["modifiedDateTime"]);
                return $this->_propDict["modifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the modifiedDateTime
    *
    * @param \DateTime $val The modifiedDateTime
    *
    * @return ManagementConditionStatement
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the expression
    *
    * @return ManagementConditionExpression The expression
    */
    public function getExpression()
    {
        if (array_key_exists("expression", $this->_propDict)) {
            if (is_a($this->_propDict["expression"], "Microsoft\Graph\Beta\Model\ManagementConditionExpression")) {
                return $this->_propDict["expression"];
            } else {
                $this->_propDict["expression"] = new ManagementConditionExpression($this->_propDict["expression"]);
                return $this->_propDict["expression"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expression
    *
    * @param ManagementConditionExpression $val The expression
    *
    * @return ManagementConditionStatement
    */
    public function setExpression($val)
    {
        $this->_propDict["expression"] = $val;
        return $this;
    }
    
    /**
    * Gets the eTag
    *
    * @return string The eTag
    */
    public function getETag()
    {
        if (array_key_exists("eTag", $this->_propDict)) {
            return $this->_propDict["eTag"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the eTag
    *
    * @param string $val The eTag
    *
    * @return ManagementConditionStatement
    */
    public function setETag($val)
    {
        $this->_propDict["eTag"] = $val;
        return $this;
    }
    

     /** 
     * Gets the applicablePlatforms
    * This is calculated from looking the management conditions associated to the management condition statement and finding the intersection of applicable platforms.
     *
     * @return array The applicablePlatforms
     */
    public function getApplicablePlatforms()
    {
        if (array_key_exists("applicablePlatforms", $this->_propDict)) {
           return $this->_propDict["applicablePlatforms"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the applicablePlatforms
    * This is calculated from looking the management conditions associated to the management condition statement and finding the intersection of applicable platforms.
    *
    * @param DevicePlatformType $val The applicablePlatforms
    *
    * @return ManagementConditionStatement
    */
    public function setApplicablePlatforms($val)
    {
		$this->_propDict["applicablePlatforms"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managementConditions
     *
     * @return array The managementConditions
     */
    public function getManagementConditions()
    {
        if (array_key_exists("managementConditions", $this->_propDict)) {
           return $this->_propDict["managementConditions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managementConditions
    *
    * @param ManagementCondition $val The managementConditions
    *
    * @return ManagementConditionStatement
    */
    public function setManagementConditions($val)
    {
		$this->_propDict["managementConditions"] = $val;
        return $this;
    }
    
}