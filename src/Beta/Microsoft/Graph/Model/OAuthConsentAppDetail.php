<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OAuthConsentAppDetail File
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
* OAuthConsentAppDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OAuthConsentAppDetail extends Entity
{

    /**
    * Gets the appScope
    *
    * @return OAuthAppScope|null The appScope
    */
    public function getAppScope()
    {
        if (array_key_exists("appScope", $this->_propDict)) {
            if (is_a($this->_propDict["appScope"], "\Beta\Microsoft\Graph\Model\OAuthAppScope") || is_null($this->_propDict["appScope"])) {
                return $this->_propDict["appScope"];
            } else {
                $this->_propDict["appScope"] = new OAuthAppScope($this->_propDict["appScope"]);
                return $this->_propDict["appScope"];
            }
        }
        return null;
    }

    /**
    * Sets the appScope
    *
    * @param OAuthAppScope $val The value to assign to the appScope
    *
    * @return OAuthConsentAppDetail The OAuthConsentAppDetail
    */
    public function setAppScope($val)
    {
        $this->_propDict["appScope"] = $val;
         return $this;
    }
    /**
    * Gets the displayLogo
    *
    * @return string|null The displayLogo
    */
    public function getDisplayLogo()
    {
        if (array_key_exists("displayLogo", $this->_propDict)) {
            return $this->_propDict["displayLogo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayLogo
    *
    * @param string $val The value of the displayLogo
    *
    * @return OAuthConsentAppDetail
    */
    public function setDisplayLogo($val)
    {
        $this->_propDict["displayLogo"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
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
    *
    * @param string $val The value of the displayName
    *
    * @return OAuthConsentAppDetail
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
}
