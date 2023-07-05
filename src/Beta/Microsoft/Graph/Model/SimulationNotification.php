<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SimulationNotification File
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
* SimulationNotification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SimulationNotification extends BaseEndUserNotification
{

    /**
    * Gets the targettedUserType
    *
    * @return TargettedUserType|null The targettedUserType
    */
    public function getTargettedUserType()
    {
        if (array_key_exists("targettedUserType", $this->_propDict)) {
            if (is_a($this->_propDict["targettedUserType"], "\Beta\Microsoft\Graph\Model\TargettedUserType") || is_null($this->_propDict["targettedUserType"])) {
                return $this->_propDict["targettedUserType"];
            } else {
                $this->_propDict["targettedUserType"] = new TargettedUserType($this->_propDict["targettedUserType"]);
                return $this->_propDict["targettedUserType"];
            }
        }
        return null;
    }

    /**
    * Sets the targettedUserType
    *
    * @param TargettedUserType $val The value to assign to the targettedUserType
    *
    * @return SimulationNotification The SimulationNotification
    */
    public function setTargettedUserType($val)
    {
        $this->_propDict["targettedUserType"] = $val;
         return $this;
    }
}
