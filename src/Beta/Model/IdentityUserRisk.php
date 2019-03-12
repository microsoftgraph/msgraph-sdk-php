<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityUserRisk File
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
* IdentityUserRisk class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class IdentityUserRisk extends Entity
{

    /**
    * Gets the level
    *
    * @return UserRiskLevel The level
    */
    public function getLevel()
    {
        if (array_key_exists("level", $this->_propDict)) {
            if (is_a($this->_propDict["level"], "Microsoft\Graph\Beta\Model\UserRiskLevel")) {
                return $this->_propDict["level"];
            } else {
                $this->_propDict["level"] = new UserRiskLevel($this->_propDict["level"]);
                return $this->_propDict["level"];
            }
        }
        return null;
    }

    /**
    * Sets the level
    *
    * @param UserRiskLevel $val The value to assign to the level
    *
    * @return IdentityUserRisk The IdentityUserRisk
    */
    public function setLevel($val)
    {
        $this->_propDict["level"] = $val;
         return $this;
    }

    /**
    * Gets the lastChangedDateTime
    *
    * @return \DateTime The lastChangedDateTime
    */
    public function getLastChangedDateTime()
    {
        if (array_key_exists("lastChangedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastChangedDateTime"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["lastChangedDateTime"];
            } else {
                $this->_propDict["lastChangedDateTime"] = new \DateTime($this->_propDict["lastChangedDateTime"]);
                return $this->_propDict["lastChangedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastChangedDateTime
    *
    * @param \DateTime $val The value to assign to the lastChangedDateTime
    *
    * @return IdentityUserRisk The IdentityUserRisk
    */
    public function setLastChangedDateTime($val)
    {
        $this->_propDict["lastChangedDateTime"] = $val;
         return $this;
    }
}
