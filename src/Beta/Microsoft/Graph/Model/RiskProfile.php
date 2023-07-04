<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RiskProfile File
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
* RiskProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RiskProfile extends Entity
{
    /**
    * Gets the humanCount
    *
    * @return int|null The humanCount
    */
    public function getHumanCount()
    {
        if (array_key_exists("humanCount", $this->_propDict)) {
            return $this->_propDict["humanCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the humanCount
    *
    * @param int $val The value of the humanCount
    *
    * @return RiskProfile
    */
    public function setHumanCount($val)
    {
        $this->_propDict["humanCount"] = $val;
        return $this;
    }
    /**
    * Gets the nonHumanCount
    *
    * @return int|null The nonHumanCount
    */
    public function getNonHumanCount()
    {
        if (array_key_exists("nonHumanCount", $this->_propDict)) {
            return $this->_propDict["nonHumanCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the nonHumanCount
    *
    * @param int $val The value of the nonHumanCount
    *
    * @return RiskProfile
    */
    public function setNonHumanCount($val)
    {
        $this->_propDict["nonHumanCount"] = $val;
        return $this;
    }
}
