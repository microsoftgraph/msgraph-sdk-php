<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RiskyUserHistoryItem File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* RiskyUserHistoryItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RiskyUserHistoryItem extends RiskyUser
{
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
    * @return RiskyUserHistoryItem
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the initiatedBy
    *
    * @return string The initiatedBy
    */
    public function getInitiatedBy()
    {
        if (array_key_exists("initiatedBy", $this->_propDict)) {
            return $this->_propDict["initiatedBy"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the initiatedBy
    *
    * @param string $val The initiatedBy
    *
    * @return RiskyUserHistoryItem
    */
    public function setInitiatedBy($val)
    {
        $this->_propDict["initiatedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the activity
    *
    * @return RiskUserActivity The activity
    */
    public function getActivity()
    {
        if (array_key_exists("activity", $this->_propDict)) {
            if (is_a($this->_propDict["activity"], "Microsoft\Graph\Beta\Model\RiskUserActivity")) {
                return $this->_propDict["activity"];
            } else {
                $this->_propDict["activity"] = new RiskUserActivity($this->_propDict["activity"]);
                return $this->_propDict["activity"];
            }
        }
        return null;
    }
    
    /**
    * Sets the activity
    *
    * @param RiskUserActivity $val The activity
    *
    * @return RiskyUserHistoryItem
    */
    public function setActivity($val)
    {
        $this->_propDict["activity"] = $val;
        return $this;
    }
    
}