<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcLoginResult File
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
* CloudPcLoginResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcLoginResult extends Entity
{

    /**
    * Gets the time
    *
    * @return \DateTime|null The time
    */
    public function getTime()
    {
        if (array_key_exists("time", $this->_propDict)) {
            if (is_a($this->_propDict["time"], "\DateTime") || is_null($this->_propDict["time"])) {
                return $this->_propDict["time"];
            } else {
                $this->_propDict["time"] = new \DateTime($this->_propDict["time"]);
                return $this->_propDict["time"];
            }
        }
        return null;
    }

    /**
    * Sets the time
    *
    * @param \DateTime $val The value to assign to the time
    *
    * @return CloudPcLoginResult The CloudPcLoginResult
    */
    public function setTime($val)
    {
        $this->_propDict["time"] = $val;
         return $this;
    }
}
