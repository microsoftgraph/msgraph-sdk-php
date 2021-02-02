<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Fido2KeyRestrictions File
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
* Fido2KeyRestrictions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Fido2KeyRestrictions extends Entity
{
    /**
    * Gets the aaGuids
    *
    * @return string The aaGuids
    */
    public function getAaGuids()
    {
        if (array_key_exists("aaGuids", $this->_propDict)) {
            return $this->_propDict["aaGuids"];
        } else {
            return null;
        }
    }

    /**
    * Sets the aaGuids
    *
    * @param string $val The value of the aaGuids
    *
    * @return Fido2KeyRestrictions
    */
    public function setAaGuids($val)
    {
        $this->_propDict["aaGuids"] = $val;
        return $this;
    }

    /**
    * Gets the enforcementType
    *
    * @return Fido2RestrictionEnforcementType The enforcementType
    */
    public function getEnforcementType()
    {
        if (array_key_exists("enforcementType", $this->_propDict)) {
            if (is_a($this->_propDict["enforcementType"], "Beta\Microsoft\Graph\Model\Fido2RestrictionEnforcementType")) {
                return $this->_propDict["enforcementType"];
            } else {
                $this->_propDict["enforcementType"] = new Fido2RestrictionEnforcementType($this->_propDict["enforcementType"]);
                return $this->_propDict["enforcementType"];
            }
        }
        return null;
    }

    /**
    * Sets the enforcementType
    *
    * @param Fido2RestrictionEnforcementType $val The value to assign to the enforcementType
    *
    * @return Fido2KeyRestrictions The Fido2KeyRestrictions
    */
    public function setEnforcementType($val)
    {
        $this->_propDict["enforcementType"] = $val;
         return $this;
    }
    /**
    * Gets the isEnforced
    *
    * @return bool The isEnforced
    */
    public function getIsEnforced()
    {
        if (array_key_exists("isEnforced", $this->_propDict)) {
            return $this->_propDict["isEnforced"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnforced
    *
    * @param bool $val The value of the isEnforced
    *
    * @return Fido2KeyRestrictions
    */
    public function setIsEnforced($val)
    {
        $this->_propDict["isEnforced"] = $val;
        return $this;
    }
}
