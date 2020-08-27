<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProfileCardAnnotation File
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
* ProfileCardAnnotation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProfileCardAnnotation extends Entity
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
    * @param string $val The value of the displayName
    *
    * @return ProfileCardAnnotation
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the localizations
    *
    * @return DisplayNameLocalization The localizations
    */
    public function getLocalizations()
    {
        if (array_key_exists("localizations", $this->_propDict)) {
            if (is_a($this->_propDict["localizations"], "Beta\Microsoft\Graph\Model\DisplayNameLocalization")) {
                return $this->_propDict["localizations"];
            } else {
                $this->_propDict["localizations"] = new DisplayNameLocalization($this->_propDict["localizations"]);
                return $this->_propDict["localizations"];
            }
        }
        return null;
    }

    /**
    * Sets the localizations
    *
    * @param DisplayNameLocalization $val The value to assign to the localizations
    *
    * @return ProfileCardAnnotation The ProfileCardAnnotation
    */
    public function setLocalizations($val)
    {
        $this->_propDict["localizations"] = $val;
         return $this;
    }
}
