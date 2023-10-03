<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomExtensionClientConfiguration File
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
* CustomExtensionClientConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomExtensionClientConfiguration extends Entity
{
    /**
    * Gets the maximumRetries
    * The max number of retries that Azure AD makes to the external API. Values of 0 or 1 are supported. If null, the default for the service applies.
    *
    * @return int|null The maximumRetries
    */
    public function getMaximumRetries()
    {
        if (array_key_exists("maximumRetries", $this->_propDict)) {
            return $this->_propDict["maximumRetries"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumRetries
    * The max number of retries that Azure AD makes to the external API. Values of 0 or 1 are supported. If null, the default for the service applies.
    *
    * @param int $val The value of the maximumRetries
    *
    * @return CustomExtensionClientConfiguration
    */
    public function setMaximumRetries($val)
    {
        $this->_propDict["maximumRetries"] = $val;
        return $this;
    }
    /**
    * Gets the timeoutInMilliseconds
    * The max duration in milliseconds that Azure AD waits for a response from the external app before it shuts down the connection. The valid range is between 200 and 2000 milliseconds. If null, the default for the service applies.
    *
    * @return int|null The timeoutInMilliseconds
    */
    public function getTimeoutInMilliseconds()
    {
        if (array_key_exists("timeoutInMilliseconds", $this->_propDict)) {
            return $this->_propDict["timeoutInMilliseconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the timeoutInMilliseconds
    * The max duration in milliseconds that Azure AD waits for a response from the external app before it shuts down the connection. The valid range is between 200 and 2000 milliseconds. If null, the default for the service applies.
    *
    * @param int $val The value of the timeoutInMilliseconds
    *
    * @return CustomExtensionClientConfiguration
    */
    public function setTimeoutInMilliseconds($val)
    {
        $this->_propDict["timeoutInMilliseconds"] = $val;
        return $this;
    }
}
