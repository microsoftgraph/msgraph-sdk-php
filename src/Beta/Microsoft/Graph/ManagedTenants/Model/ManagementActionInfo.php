<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementActionInfo File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;
/**
* ManagementActionInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementActionInfo extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the managementActionId
    *
    * @return string|null The managementActionId
    */
    public function getManagementActionId()
    {
        if (array_key_exists("managementActionId", $this->_propDict)) {
            return $this->_propDict["managementActionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementActionId
    *
    * @param string $val The value of the managementActionId
    *
    * @return ManagementActionInfo
    */
    public function setManagementActionId($val)
    {
        $this->_propDict["managementActionId"] = $val;
        return $this;
    }
    /**
    * Gets the managementTemplateId
    *
    * @return string|null The managementTemplateId
    */
    public function getManagementTemplateId()
    {
        if (array_key_exists("managementTemplateId", $this->_propDict)) {
            return $this->_propDict["managementTemplateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementTemplateId
    *
    * @param string $val The value of the managementTemplateId
    *
    * @return ManagementActionInfo
    */
    public function setManagementTemplateId($val)
    {
        $this->_propDict["managementTemplateId"] = $val;
        return $this;
    }
}
