<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationEventsFlow File
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
* AuthenticationEventsFlow class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationEventsFlow extends Entity
{
    /**
    * Gets the conditions
    * The conditions representing the context of the authentication request which will be used to decide whether the events policy will be invoked.
    *
    * @return AuthenticationConditions|null The conditions
    */
    public function getConditions()
    {
        if (array_key_exists("conditions", $this->_propDict)) {
            if (is_a($this->_propDict["conditions"], "\Beta\Microsoft\Graph\Model\AuthenticationConditions") || is_null($this->_propDict["conditions"])) {
                return $this->_propDict["conditions"];
            } else {
                $this->_propDict["conditions"] = new AuthenticationConditions($this->_propDict["conditions"]);
                return $this->_propDict["conditions"];
            }
        }
        return null;
    }

    /**
    * Sets the conditions
    * The conditions representing the context of the authentication request which will be used to decide whether the events policy will be invoked.
    *
    * @param AuthenticationConditions $val The conditions
    *
    * @return AuthenticationEventsFlow
    */
    public function setConditions($val)
    {
        $this->_propDict["conditions"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * The description of the events policy.
    *
    * @return string|null The description
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
    * The description of the events policy.
    *
    * @param string $val The description
    *
    * @return AuthenticationEventsFlow
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Required. The display name for the events policy.
    *
    * @return string|null The displayName
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
    * Required. The display name for the events policy.
    *
    * @param string $val The displayName
    *
    * @return AuthenticationEventsFlow
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the priority
    * The priority to use for each individual event of the events policy. If multiple competing listeners for an event have the same priority, one is chosen and an error is silently logged. Defaults to 500.
    *
    * @return int|null The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the priority
    * The priority to use for each individual event of the events policy. If multiple competing listeners for an event have the same priority, one is chosen and an error is silently logged. Defaults to 500.
    *
    * @param int $val The priority
    *
    * @return AuthenticationEventsFlow
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = intval($val);
        return $this;
    }

}
