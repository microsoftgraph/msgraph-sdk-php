<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmployeeOrgData File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* EmployeeOrgData class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EmployeeOrgData extends Entity
{
    /**
    * Gets the costCenter
    *
    * @return string The costCenter
    */
    public function getCostCenter()
    {
        if (array_key_exists("costCenter", $this->_propDict)) {
            return $this->_propDict["costCenter"];
        } else {
            return null;
        }
    }

    /**
    * Sets the costCenter
    *
    * @param string $val The value of the costCenter
    *
    * @return EmployeeOrgData
    */
    public function setCostCenter($val)
    {
        $this->_propDict["costCenter"] = $val;
        return $this;
    }
    /**
    * Gets the division
    *
    * @return string The division
    */
    public function getDivision()
    {
        if (array_key_exists("division", $this->_propDict)) {
            return $this->_propDict["division"];
        } else {
            return null;
        }
    }

    /**
    * Sets the division
    *
    * @param string $val The value of the division
    *
    * @return EmployeeOrgData
    */
    public function setDivision($val)
    {
        $this->_propDict["division"] = $val;
        return $this;
    }
}
