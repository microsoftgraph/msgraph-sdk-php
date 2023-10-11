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
namespace Microsoft\Graph\Model;

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
     * Gets the endUserNotifications
     *
     * @return array|null The endUserNotifications
     */
    public function getEndUserNotifications()
    {
        if (array_key_exists("endUserNotifications", $this->_propDict)) {
           return $this->_propDict["endUserNotifications"];
        } else {
            return null;
        }
    }

    /**
    * Sets the endUserNotifications
    *
    * @param EndUserNotification[] $val The endUserNotifications
    *
    * @return AttackSimulationRoot
    */
    public function setEndUserNotifications($val)
    {
        $this->_propDict["endUserNotifications"] = $val;
        return $this;
    }


     /**
     * Gets the landingPages
     *
     * @return array|null The landingPages
     */
    public function getLandingPages()
    {
        if (array_key_exists("landingPages", $this->_propDict)) {
           return $this->_propDict["landingPages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the landingPages
    *
    * @param LandingPage[] $val The landingPages
    *
    * @return AttackSimulationRoot
    */
    public function setLandingPages($val)
    {
        $this->_propDict["landingPages"] = $val;
        return $this;
    }


     /**
     * Gets the loginPages
     *
     * @return array|null The loginPages
     */
    public function getLoginPages()
    {
        if (array_key_exists("loginPages", $this->_propDict)) {
           return $this->_propDict["loginPages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the loginPages
    *
    * @param LoginPage[] $val The loginPages
    *
    * @return AttackSimulationRoot
    */
    public function setLoginPages($val)
    {
        $this->_propDict["loginPages"] = $val;
        return $this;
    }


     /**
     * Gets the operations
     *
     * @return array|null The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operations
    *
    * @param AttackSimulationOperation[] $val The operations
    *
    * @return AttackSimulationRoot
    */
    public function setOperations($val)
    {
        $this->_propDict["operations"] = $val;
        return $this;
    }


     /**
     * Gets the payloads
     *
     * @return array|null The payloads
     */
    public function getPayloads()
    {
        if (array_key_exists("payloads", $this->_propDict)) {
           return $this->_propDict["payloads"];
        } else {
            return null;
        }
    }

    /**
    * Sets the payloads
    *
    * @param Payload[] $val The payloads
    *
    * @return AttackSimulationRoot
    */
    public function setPayloads($val)
    {
        $this->_propDict["payloads"] = $val;
        return $this;
    }


     /**
     * Gets the simulationAutomations
    * Represents simulation automation created to run on a tenant.
     *
     * @return array|null The simulationAutomations
     */
    public function getSimulationAutomations()
    {
        if (array_key_exists("simulationAutomations", $this->_propDict)) {
           return $this->_propDict["simulationAutomations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the simulationAutomations
    * Represents simulation automation created to run on a tenant.
    *
    * @param SimulationAutomation[] $val The simulationAutomations
    *
    * @return AttackSimulationRoot
    */
    public function setSimulationAutomations($val)
    {
        $this->_propDict["simulationAutomations"] = $val;
        return $this;
    }


     /**
     * Gets the simulations
    * Represents an attack simulation training campaign in a tenant.
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
    * Represents an attack simulation training campaign in a tenant.
    *
    * @param Simulation[] $val The simulations
    *
    * @return AttackSimulationRoot
    */
    public function setSimulations($val)
    {
        $this->_propDict["simulations"] = $val;
        return $this;
    }


     /**
     * Gets the trainings
     *
     * @return array|null The trainings
     */
    public function getTrainings()
    {
        if (array_key_exists("trainings", $this->_propDict)) {
           return $this->_propDict["trainings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the trainings
    *
    * @param Training[] $val The trainings
    *
    * @return AttackSimulationRoot
    */
    public function setTrainings($val)
    {
        $this->_propDict["trainings"] = $val;
        return $this;
    }

}
