<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Settings File
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
* Settings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Settings extends Entity
{
    /**
    * Gets the hasGraphMailbox
    *
    * @return bool The hasGraphMailbox
    */
    public function getHasGraphMailbox()
    {
        if (array_key_exists("hasGraphMailbox", $this->_propDict)) {
            return $this->_propDict["hasGraphMailbox"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hasGraphMailbox
    *
    * @param bool $val The value of the hasGraphMailbox
    *
    * @return Settings
    */
    public function setHasGraphMailbox($val)
    {
        $this->_propDict["hasGraphMailbox"] = $val;
        return $this;
    }
    /**
    * Gets the hasLicense
    *
    * @return bool The hasLicense
    */
    public function getHasLicense()
    {
        if (array_key_exists("hasLicense", $this->_propDict)) {
            return $this->_propDict["hasLicense"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hasLicense
    *
    * @param bool $val The value of the hasLicense
    *
    * @return Settings
    */
    public function setHasLicense($val)
    {
        $this->_propDict["hasLicense"] = $val;
        return $this;
    }
    /**
    * Gets the hasOptedOut
    *
    * @return bool The hasOptedOut
    */
    public function getHasOptedOut()
    {
        if (array_key_exists("hasOptedOut", $this->_propDict)) {
            return $this->_propDict["hasOptedOut"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hasOptedOut
    *
    * @param bool $val The value of the hasOptedOut
    *
    * @return Settings
    */
    public function setHasOptedOut($val)
    {
        $this->_propDict["hasOptedOut"] = $val;
        return $this;
    }
}
