<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementTemplateStepDeployment File
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
* ManagementTemplateStepDeployment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementTemplateStepDeployment extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the error
    *
    * @return GraphAPIErrorDetails|null The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            if (is_a($this->_propDict["error"], "\Beta\Microsoft\Graph\ManagedTenants\Model\GraphAPIErrorDetails") || is_null($this->_propDict["error"])) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new GraphAPIErrorDetails($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }

    /**
    * Sets the error
    *
    * @param GraphAPIErrorDetails $val The error
    *
    * @return ManagementTemplateStepDeployment
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
        return $this;
    }


     /**
     * Gets the settings
     *
     * @return array|null The settings
     */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
           return $this->_propDict["settings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the settings
    *
    * @param Setting[] $val The settings
    *
    * @return ManagementTemplateStepDeployment
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }

    /**
    * Gets the status
    *
    * @return ManagementTemplateDeploymentStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagementTemplateDeploymentStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new ManagementTemplateDeploymentStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param ManagementTemplateDeploymentStatus $val The status
    *
    * @return ManagementTemplateStepDeployment
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the tenantId
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantId
    *
    * @param string $val The tenantId
    *
    * @return ManagementTemplateStepDeployment
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the templateStepVersion
    *
    * @return ManagementTemplateStepVersion|null The templateStepVersion
    */
    public function getTemplateStepVersion()
    {
        if (array_key_exists("templateStepVersion", $this->_propDict)) {
            if (is_a($this->_propDict["templateStepVersion"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagementTemplateStepVersion") || is_null($this->_propDict["templateStepVersion"])) {
                return $this->_propDict["templateStepVersion"];
            } else {
                $this->_propDict["templateStepVersion"] = new ManagementTemplateStepVersion($this->_propDict["templateStepVersion"]);
                return $this->_propDict["templateStepVersion"];
            }
        }
        return null;
    }

    /**
    * Sets the templateStepVersion
    *
    * @param ManagementTemplateStepVersion $val The templateStepVersion
    *
    * @return ManagementTemplateStepDeployment
    */
    public function setTemplateStepVersion($val)
    {
        $this->_propDict["templateStepVersion"] = $val;
        return $this;
    }

}
