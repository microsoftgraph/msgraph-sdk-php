<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GovernanceNotificationPolicy File
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
* GovernanceNotificationPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class GovernanceNotificationPolicy extends Entity
{

    /**
    * Gets the notificationTemplates
    *
    * @return GovernanceNotificationTemplate The notificationTemplates
    */
    public function getNotificationTemplates()
    {
        if (array_key_exists("notificationTemplates", $this->_propDict)) {
            if (is_a($this->_propDict["notificationTemplates"], "Microsoft\Graph\Beta\Model\GovernanceNotificationTemplate")) {
                return $this->_propDict["notificationTemplates"];
            } else {
                $this->_propDict["notificationTemplates"] = new GovernanceNotificationTemplate($this->_propDict["notificationTemplates"]);
                return $this->_propDict["notificationTemplates"];
            }
        }
        return null;
    }

    /**
    * Sets the notificationTemplates
    *
    * @param GovernanceNotificationTemplate $val The value to assign to the notificationTemplates
    *
    * @return GovernanceNotificationPolicy The GovernanceNotificationPolicy
    */
    public function setNotificationTemplates($val)
    {
        $this->_propDict["notificationTemplates"] = $val;
         return $this;
    }
    /**
    * Gets the enabledTemplateTypes
    *
    * @return string The enabledTemplateTypes
    */
    public function getEnabledTemplateTypes()
    {
        if (array_key_exists("enabledTemplateTypes", $this->_propDict)) {
            return $this->_propDict["enabledTemplateTypes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enabledTemplateTypes
    *
    * @param string $val The value of the enabledTemplateTypes
    *
    * @return GovernanceNotificationPolicy
    */
    public function setEnabledTemplateTypes($val)
    {
        $this->_propDict["enabledTemplateTypes"] = $val;
        return $this;
    }
}
