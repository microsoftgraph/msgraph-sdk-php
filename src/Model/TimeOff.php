<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TimeOff File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* TimeOff class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TimeOff extends ChangeTrackedEntity
{
    /**
    * Gets the sharedTimeOff
    *
    * @return TimeOffItem The sharedTimeOff
    */
    public function getSharedTimeOff()
    {
        if (array_key_exists("sharedTimeOff", $this->_propDict)) {
            if (is_a($this->_propDict["sharedTimeOff"], "Microsoft\Graph\Model\TimeOffItem")) {
                return $this->_propDict["sharedTimeOff"];
            } else {
                $this->_propDict["sharedTimeOff"] = new TimeOffItem($this->_propDict["sharedTimeOff"]);
                return $this->_propDict["sharedTimeOff"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sharedTimeOff
    *
    * @param TimeOffItem $val The sharedTimeOff
    *
    * @return TimeOff
    */
    public function setSharedTimeOff($val)
    {
        $this->_propDict["sharedTimeOff"] = $val;
        return $this;
    }
    
    /**
    * Gets the draftTimeOff
    *
    * @return TimeOffItem The draftTimeOff
    */
    public function getDraftTimeOff()
    {
        if (array_key_exists("draftTimeOff", $this->_propDict)) {
            if (is_a($this->_propDict["draftTimeOff"], "Microsoft\Graph\Model\TimeOffItem")) {
                return $this->_propDict["draftTimeOff"];
            } else {
                $this->_propDict["draftTimeOff"] = new TimeOffItem($this->_propDict["draftTimeOff"]);
                return $this->_propDict["draftTimeOff"];
            }
        }
        return null;
    }
    
    /**
    * Sets the draftTimeOff
    *
    * @param TimeOffItem $val The draftTimeOff
    *
    * @return TimeOff
    */
    public function setDraftTimeOff($val)
    {
        $this->_propDict["draftTimeOff"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    *
    * @param string $val The userId
    *
    * @return TimeOff
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
}