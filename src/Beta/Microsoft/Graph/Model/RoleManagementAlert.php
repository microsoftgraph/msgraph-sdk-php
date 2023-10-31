<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RoleManagementAlert File
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
* RoleManagementAlert class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RoleManagementAlert extends Entity
{

     /**
     * Gets the alertConfigurations
    * The various configurations of an alert for Microsoft Entra roles. The configurations are predefined and can't be created or deleted, but some of the configurations can be modified.
     *
     * @return array|null The alertConfigurations
     */
    public function getAlertConfigurations()
    {
        if (array_key_exists("alertConfigurations", $this->_propDict)) {
           return $this->_propDict["alertConfigurations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertConfigurations
    * The various configurations of an alert for Microsoft Entra roles. The configurations are predefined and can't be created or deleted, but some of the configurations can be modified.
    *
    * @param UnifiedRoleManagementAlertConfiguration[] $val The alertConfigurations
    *
    * @return RoleManagementAlert
    */
    public function setAlertConfigurations($val)
    {
        $this->_propDict["alertConfigurations"] = $val;
        return $this;
    }


     /**
     * Gets the alertDefinitions
    * Defines an alert, its impact, and measures to mitigate or prevent it.
     *
     * @return array|null The alertDefinitions
     */
    public function getAlertDefinitions()
    {
        if (array_key_exists("alertDefinitions", $this->_propDict)) {
           return $this->_propDict["alertDefinitions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertDefinitions
    * Defines an alert, its impact, and measures to mitigate or prevent it.
    *
    * @param UnifiedRoleManagementAlertDefinition[] $val The alertDefinitions
    *
    * @return RoleManagementAlert
    */
    public function setAlertDefinitions($val)
    {
        $this->_propDict["alertDefinitions"] = $val;
        return $this;
    }


     /**
     * Gets the alerts
    * Represents the alert entity.
     *
     * @return array|null The alerts
     */
    public function getAlerts()
    {
        if (array_key_exists("alerts", $this->_propDict)) {
           return $this->_propDict["alerts"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alerts
    * Represents the alert entity.
    *
    * @param UnifiedRoleManagementAlert[] $val The alerts
    *
    * @return RoleManagementAlert
    */
    public function setAlerts($val)
    {
        $this->_propDict["alerts"] = $val;
        return $this;
    }


     /**
     * Gets the operations
    * Represents operations on resources that take a long time to complete and can run in the background until completion.
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
    * Represents operations on resources that take a long time to complete and can run in the background until completion.
    *
    * @param LongRunningOperation[] $val The operations
    *
    * @return RoleManagementAlert
    */
    public function setOperations($val)
    {
        $this->_propDict["operations"] = $val;
        return $this;
    }

}
