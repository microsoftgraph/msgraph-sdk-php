<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessPolicy File
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
* ConditionalAccessPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ConditionalAccessPolicy extends Entity
{
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
    * @return ConditionalAccessPolicy
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
    * @return ConditionalAccessPolicy
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }
    
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
    * @return ConditionalAccessPolicy
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
    * @return ConditionalAccessPolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    *
    * @return ConditionalAccessPolicyState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "Microsoft\Graph\Beta\Model\ConditionalAccessPolicyState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new ConditionalAccessPolicyState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    *
    * @param ConditionalAccessPolicyState $val The state
    *
    * @return ConditionalAccessPolicy
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the conditions
    *
    * @return ConditionalAccessConditionSet The conditions
    */
    public function getConditions()
    {
        if (array_key_exists("conditions", $this->_propDict)) {
            if (is_a($this->_propDict["conditions"], "Microsoft\Graph\Beta\Model\ConditionalAccessConditionSet")) {
                return $this->_propDict["conditions"];
            } else {
                $this->_propDict["conditions"] = new ConditionalAccessConditionSet($this->_propDict["conditions"]);
                return $this->_propDict["conditions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the conditions
    *
    * @param ConditionalAccessConditionSet $val The conditions
    *
    * @return ConditionalAccessPolicy
    */
    public function setConditions($val)
    {
        $this->_propDict["conditions"] = $val;
        return $this;
    }
    
    /**
    * Gets the grantControls
    *
    * @return ConditionalAccessGrantControls The grantControls
    */
    public function getGrantControls()
    {
        if (array_key_exists("grantControls", $this->_propDict)) {
            if (is_a($this->_propDict["grantControls"], "Microsoft\Graph\Beta\Model\ConditionalAccessGrantControls")) {
                return $this->_propDict["grantControls"];
            } else {
                $this->_propDict["grantControls"] = new ConditionalAccessGrantControls($this->_propDict["grantControls"]);
                return $this->_propDict["grantControls"];
            }
        }
        return null;
    }
    
    /**
    * Sets the grantControls
    *
    * @param ConditionalAccessGrantControls $val The grantControls
    *
    * @return ConditionalAccessPolicy
    */
    public function setGrantControls($val)
    {
        $this->_propDict["grantControls"] = $val;
        return $this;
    }
    
    /**
    * Gets the sessionControls
    *
    * @return ConditionalAccessSessionControls The sessionControls
    */
    public function getSessionControls()
    {
        if (array_key_exists("sessionControls", $this->_propDict)) {
            if (is_a($this->_propDict["sessionControls"], "Microsoft\Graph\Beta\Model\ConditionalAccessSessionControls")) {
                return $this->_propDict["sessionControls"];
            } else {
                $this->_propDict["sessionControls"] = new ConditionalAccessSessionControls($this->_propDict["sessionControls"]);
                return $this->_propDict["sessionControls"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sessionControls
    *
    * @param ConditionalAccessSessionControls $val The sessionControls
    *
    * @return ConditionalAccessPolicy
    */
    public function setSessionControls($val)
    {
        $this->_propDict["sessionControls"] = $val;
        return $this;
    }
    
}