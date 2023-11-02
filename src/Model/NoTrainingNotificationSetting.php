<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NoTrainingNotificationSetting File
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
* NoTrainingNotificationSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NoTrainingNotificationSetting extends EndUserNotificationSetting
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.noTrainingNotificationSetting");
    }


    /**
    * Gets the simulationNotification
    * The notification for the user who is part of the simulation.
    *
    * @return SimulationNotification|null The simulationNotification
    */
    public function getSimulationNotification()
    {
        if (array_key_exists("simulationNotification", $this->_propDict)) {
            if (is_a($this->_propDict["simulationNotification"], "\Microsoft\Graph\Model\SimulationNotification") || is_null($this->_propDict["simulationNotification"])) {
                return $this->_propDict["simulationNotification"];
            } else {
                $this->_propDict["simulationNotification"] = new SimulationNotification($this->_propDict["simulationNotification"]);
                return $this->_propDict["simulationNotification"];
            }
        }
        return null;
    }

    /**
    * Sets the simulationNotification
    * The notification for the user who is part of the simulation.
    *
    * @param SimulationNotification $val The value to assign to the simulationNotification
    *
    * @return NoTrainingNotificationSetting The NoTrainingNotificationSetting
    */
    public function setSimulationNotification($val)
    {
        $this->_propDict["simulationNotification"] = $val;
         return $this;
    }
}
