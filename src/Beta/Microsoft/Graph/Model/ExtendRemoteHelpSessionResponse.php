<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExtendRemoteHelpSessionResponse File
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
* ExtendRemoteHelpSessionResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExtendRemoteHelpSessionResponse extends Entity
{
    /**
    * Gets the acsHelperUserToken
    * Helper ACS User Token
    *
    * @return string|null The acsHelperUserToken
    */
    public function getAcsHelperUserToken()
    {
        if (array_key_exists("acsHelperUserToken", $this->_propDict)) {
            return $this->_propDict["acsHelperUserToken"];
        } else {
            return null;
        }
    }

    /**
    * Sets the acsHelperUserToken
    * Helper ACS User Token
    *
    * @param string $val The value of the acsHelperUserToken
    *
    * @return ExtendRemoteHelpSessionResponse
    */
    public function setAcsHelperUserToken($val)
    {
        $this->_propDict["acsHelperUserToken"] = $val;
        return $this;
    }
    /**
    * Gets the pubSubHelperAccessUri
    * Azure Pubsub Group Id
    *
    * @return string|null The pubSubHelperAccessUri
    */
    public function getPubSubHelperAccessUri()
    {
        if (array_key_exists("pubSubHelperAccessUri", $this->_propDict)) {
            return $this->_propDict["pubSubHelperAccessUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pubSubHelperAccessUri
    * Azure Pubsub Group Id
    *
    * @param string $val The value of the pubSubHelperAccessUri
    *
    * @return ExtendRemoteHelpSessionResponse
    */
    public function setPubSubHelperAccessUri($val)
    {
        $this->_propDict["pubSubHelperAccessUri"] = $val;
        return $this;
    }

    /**
    * Gets the sessionExpirationDateTime
    * Azure Pubsub Session Expiration Date Time.
    *
    * @return \DateTime|null The sessionExpirationDateTime
    */
    public function getSessionExpirationDateTime()
    {
        if (array_key_exists("sessionExpirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["sessionExpirationDateTime"], "\DateTime") || is_null($this->_propDict["sessionExpirationDateTime"])) {
                return $this->_propDict["sessionExpirationDateTime"];
            } else {
                $this->_propDict["sessionExpirationDateTime"] = new \DateTime($this->_propDict["sessionExpirationDateTime"]);
                return $this->_propDict["sessionExpirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the sessionExpirationDateTime
    * Azure Pubsub Session Expiration Date Time.
    *
    * @param \DateTime $val The value to assign to the sessionExpirationDateTime
    *
    * @return ExtendRemoteHelpSessionResponse The ExtendRemoteHelpSessionResponse
    */
    public function setSessionExpirationDateTime($val)
    {
        $this->_propDict["sessionExpirationDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the sessionKey
    * The unique identifier for a session
    *
    * @return string|null The sessionKey
    */
    public function getSessionKey()
    {
        if (array_key_exists("sessionKey", $this->_propDict)) {
            return $this->_propDict["sessionKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sessionKey
    * The unique identifier for a session
    *
    * @param string $val The value of the sessionKey
    *
    * @return ExtendRemoteHelpSessionResponse
    */
    public function setSessionKey($val)
    {
        $this->_propDict["sessionKey"] = $val;
        return $this;
    }
}
