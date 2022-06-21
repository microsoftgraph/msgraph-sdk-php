<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomExtensionCallbackConfiguration File
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
* CustomExtensionCallbackConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomExtensionCallbackConfiguration extends Entity
{

    /**
    * Gets the timeoutDuration
    *
    * @return \DateInterval|null The timeoutDuration
    */
    public function getTimeoutDuration()
    {
        if (array_key_exists("timeoutDuration", $this->_propDict)) {
            if (is_a($this->_propDict["timeoutDuration"], "\DateInterval") || is_null($this->_propDict["timeoutDuration"])) {
                return $this->_propDict["timeoutDuration"];
            } else {
                $this->_propDict["timeoutDuration"] = new \DateInterval($this->_propDict["timeoutDuration"]);
                return $this->_propDict["timeoutDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the timeoutDuration
    *
    * @param \DateInterval $val The value to assign to the timeoutDuration
    *
    * @return CustomExtensionCallbackConfiguration The CustomExtensionCallbackConfiguration
    */
    public function setTimeoutDuration($val)
    {
        $this->_propDict["timeoutDuration"] = $val;
         return $this;
    }
}
