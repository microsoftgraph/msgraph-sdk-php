<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RetrieveRemoteHelpSessionResponse File
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
* RetrieveRemoteHelpSessionResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RetrieveRemoteHelpSessionResponse extends Entity
{
    /**
    * Gets the acsGroupId
    * ACS Group Id
    *
    * @return string|null The acsGroupId
    */
    public function getAcsGroupId()
    {
        if (array_key_exists("acsGroupId", $this->_propDict)) {
            return $this->_propDict["acsGroupId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the acsGroupId
    * ACS Group Id
    *
    * @param string $val The value of the acsGroupId
    *
    * @return RetrieveRemoteHelpSessionResponse
    */
    public function setAcsGroupId($val)
    {
        $this->_propDict["acsGroupId"] = $val;
        return $this;
    }
    /**
    * Gets the acsHelperUserId
    * Helper ACS User Id
    *
    * @return string|null The acsHelperUserId
    */
    public function getAcsHelperUserId()
    {
        if (array_key_exists("acsHelperUserId", $this->_propDict)) {
            return $this->_propDict["acsHelperUserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the acsHelperUserId
    * Helper ACS User Id
    *
    * @param string $val The value of the acsHelperUserId
    *
    * @return RetrieveRemoteHelpSessionResponse
    */
    public function setAcsHelperUserId($val)
    {
        $this->_propDict["acsHelperUserId"] = $val;
        return $this;
    }
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
    * @return RetrieveRemoteHelpSessionResponse
    */
    public function setAcsHelperUserToken($val)
    {
        $this->_propDict["acsHelperUserToken"] = $val;
        return $this;
    }
    /**
    * Gets the acsSharerUserId
    * Sharer ACS User Id
    *
    * @return string|null The acsSharerUserId
    */
    public function getAcsSharerUserId()
    {
        if (array_key_exists("acsSharerUserId", $this->_propDict)) {
            return $this->_propDict["acsSharerUserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the acsSharerUserId
    * Sharer ACS User Id
    *
    * @param string $val The value of the acsSharerUserId
    *
    * @return RetrieveRemoteHelpSessionResponse
    */
    public function setAcsSharerUserId($val)
    {
        $this->_propDict["acsSharerUserId"] = $val;
        return $this;
    }
    /**
    * Gets the deviceName
    * Android Device Name
    *
    * @return string|null The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceName
    * Android Device Name
    *
    * @param string $val The value of the deviceName
    *
    * @return RetrieveRemoteHelpSessionResponse
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    /**
    * Gets the pubSubGroupId
    * Azure Pubsub Group Id
    *
    * @return string|null The pubSubGroupId
    */
    public function getPubSubGroupId()
    {
        if (array_key_exists("pubSubGroupId", $this->_propDict)) {
            return $this->_propDict["pubSubGroupId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pubSubGroupId
    * Azure Pubsub Group Id
    *
    * @param string $val The value of the pubSubGroupId
    *
    * @return RetrieveRemoteHelpSessionResponse
    */
    public function setPubSubGroupId($val)
    {
        $this->_propDict["pubSubGroupId"] = $val;
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
    * @return RetrieveRemoteHelpSessionResponse
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
    * @return RetrieveRemoteHelpSessionResponse The RetrieveRemoteHelpSessionResponse
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
    * @return RetrieveRemoteHelpSessionResponse
    */
    public function setSessionKey($val)
    {
        $this->_propDict["sessionKey"] = $val;
        return $this;
    }
}
