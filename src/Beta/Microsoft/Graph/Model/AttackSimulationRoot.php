<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttackSimulationRoot File
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
* AttackSimulationRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttackSimulationRoot extends Entity
{

     /** 
     * Gets the simulations
     *
     * @return array|null The simulations
     */
    public function getSimulations()
    {
        if (array_key_exists("simulations", $this->_propDict)) {
           return $this->_propDict["simulations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the simulations
    *
    * @param Simulation $val The simulations
    *
    * @return AttackSimulationRoot
    */
    public function setSimulations($val)
    {
        $this->_propDict["simulations"] = $val;
        return $this;
    }
    
}
