<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamMemberSettings File
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
* TeamMemberSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TeamMemberSettings extends Entity
{
    /**
    * Gets the allowCreateUpdateChannels
    *
    * @return bool The allowCreateUpdateChannels
    */
    public function getAllowCreateUpdateChannels()
    {
        if (array_key_exists("allowCreateUpdateChannels", $this->_propDict)) {
            return $this->_propDict["allowCreateUpdateChannels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowCreateUpdateChannels
    *
    * @param bool $val The value of the allowCreateUpdateChannels
    *
    * @return TeamMemberSettings
    */
    public function setAllowCreateUpdateChannels($val)
    {
        $this->_propDict["allowCreateUpdateChannels"] = $val;
        return $this;
    }
    /**
    * Gets the allowDeleteChannels
    *
    * @return bool The allowDeleteChannels
    */
    public function getAllowDeleteChannels()
    {
        if (array_key_exists("allowDeleteChannels", $this->_propDict)) {
            return $this->_propDict["allowDeleteChannels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowDeleteChannels
    *
    * @param bool $val The value of the allowDeleteChannels
    *
    * @return TeamMemberSettings
    */
    public function setAllowDeleteChannels($val)
    {
        $this->_propDict["allowDeleteChannels"] = $val;
        return $this;
    }
    /**
    * Gets the allowAddRemoveApps
    *
    * @return bool The allowAddRemoveApps
    */
    public function getAllowAddRemoveApps()
    {
        if (array_key_exists("allowAddRemoveApps", $this->_propDict)) {
            return $this->_propDict["allowAddRemoveApps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowAddRemoveApps
    *
    * @param bool $val The value of the allowAddRemoveApps
    *
    * @return TeamMemberSettings
    */
    public function setAllowAddRemoveApps($val)
    {
        $this->_propDict["allowAddRemoveApps"] = $val;
        return $this;
    }
    /**
    * Gets the allowCreateUpdateRemoveTabs
    *
    * @return bool The allowCreateUpdateRemoveTabs
    */
    public function getAllowCreateUpdateRemoveTabs()
    {
        if (array_key_exists("allowCreateUpdateRemoveTabs", $this->_propDict)) {
            return $this->_propDict["allowCreateUpdateRemoveTabs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowCreateUpdateRemoveTabs
    *
    * @param bool $val The value of the allowCreateUpdateRemoveTabs
    *
    * @return TeamMemberSettings
    */
    public function setAllowCreateUpdateRemoveTabs($val)
    {
        $this->_propDict["allowCreateUpdateRemoveTabs"] = $val;
        return $this;
    }
    /**
    * Gets the allowCreateUpdateRemoveConnectors
    *
    * @return bool The allowCreateUpdateRemoveConnectors
    */
    public function getAllowCreateUpdateRemoveConnectors()
    {
        if (array_key_exists("allowCreateUpdateRemoveConnectors", $this->_propDict)) {
            return $this->_propDict["allowCreateUpdateRemoveConnectors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowCreateUpdateRemoveConnectors
    *
    * @param bool $val The value of the allowCreateUpdateRemoveConnectors
    *
    * @return TeamMemberSettings
    */
    public function setAllowCreateUpdateRemoveConnectors($val)
    {
        $this->_propDict["allowCreateUpdateRemoveConnectors"] = $val;
        return $this;
    }
}
