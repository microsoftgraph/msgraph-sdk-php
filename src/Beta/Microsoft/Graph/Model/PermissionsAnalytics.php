<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PermissionsAnalytics File
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
* PermissionsAnalytics class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PermissionsAnalytics extends Entity
{

     /**
     * Gets the findings
     *
     * @return array|null The findings
     */
    public function getFindings()
    {
        if (array_key_exists("findings", $this->_propDict)) {
           return $this->_propDict["findings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the findings
    *
    * @param Finding[] $val The findings
    *
    * @return PermissionsAnalytics
    */
    public function setFindings($val)
    {
        $this->_propDict["findings"] = $val;
        return $this;
    }


     /**
     * Gets the permissionsCreepIndexDistributions
     *
     * @return array|null The permissionsCreepIndexDistributions
     */
    public function getPermissionsCreepIndexDistributions()
    {
        if (array_key_exists("permissionsCreepIndexDistributions", $this->_propDict)) {
           return $this->_propDict["permissionsCreepIndexDistributions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the permissionsCreepIndexDistributions
    *
    * @param PermissionsCreepIndexDistribution[] $val The permissionsCreepIndexDistributions
    *
    * @return PermissionsAnalytics
    */
    public function setPermissionsCreepIndexDistributions($val)
    {
        $this->_propDict["permissionsCreepIndexDistributions"] = $val;
        return $this;
    }

}
