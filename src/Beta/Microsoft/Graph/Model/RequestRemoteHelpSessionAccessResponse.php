<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RequestRemoteHelpSessionAccessResponse File
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
* RequestRemoteHelpSessionAccessResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RequestRemoteHelpSessionAccessResponse extends Entity
{
    /**
    * Gets the pubSubEncryption
    * AES encryption Initialization Vector for encrypting client messages sent to PubSub
    *
    * @return string|null The pubSubEncryption
    */
    public function getPubSubEncryption()
    {
        if (array_key_exists("pubSubEncryption", $this->_propDict)) {
            return $this->_propDict["pubSubEncryption"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pubSubEncryption
    * AES encryption Initialization Vector for encrypting client messages sent to PubSub
    *
    * @param string $val The value of the pubSubEncryption
    *
    * @return RequestRemoteHelpSessionAccessResponse
    */
    public function setPubSubEncryption($val)
    {
        $this->_propDict["pubSubEncryption"] = $val;
        return $this;
    }
    /**
    * Gets the pubSubEncryptionKey
    * The unique identifier for encrypting client messages sent to PubSub
    *
    * @return string|null The pubSubEncryptionKey
    */
    public function getPubSubEncryptionKey()
    {
        if (array_key_exists("pubSubEncryptionKey", $this->_propDict)) {
            return $this->_propDict["pubSubEncryptionKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pubSubEncryptionKey
    * The unique identifier for encrypting client messages sent to PubSub
    *
    * @param string $val The value of the pubSubEncryptionKey
    *
    * @return RequestRemoteHelpSessionAccessResponse
    */
    public function setPubSubEncryptionKey($val)
    {
        $this->_propDict["pubSubEncryptionKey"] = $val;
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
    * @return RequestRemoteHelpSessionAccessResponse
    */
    public function setSessionKey($val)
    {
        $this->_propDict["sessionKey"] = $val;
        return $this;
    }
}
