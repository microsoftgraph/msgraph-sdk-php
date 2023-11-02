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
namespace Microsoft\Graph\Model;
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
    * App scope. Possible values are: unknown, readCalendar, readContact, readMail, readAllChat, readAllFile, readAndWriteMail, sendMail, unknownFutureValue.
    *
    * @return OAuthAppScope|null The appScope
    */
    public function getAppScope()
    {
        if (array_key_exists("appScope", $this->_propDict)) {
            if (is_a($this->_propDict["appScope"], "\Microsoft\Graph\Model\OAuthAppScope") || is_null($this->_propDict["appScope"])) {
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
    * App scope. Possible values are: unknown, readCalendar, readContact, readMail, readAllChat, readAllFile, readAndWriteMail, sendMail, unknownFutureValue.
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
    * App display logo.
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
    * App display logo.
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
    * App name.
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
    * App name.
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
