<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementTemplateStepVersion File
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
* ManagementTemplateStepVersion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementTemplateStepVersion extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the configurationAction
    *
    * @return TemplateAction|null The configurationAction
    */
    public function getConfigurationAction()
    {
        if (array_key_exists("configurationAction", $this->_propDict)) {
            if (is_a($this->_propDict["configurationAction"], "\Beta\Microsoft\Graph\ManagedTenants\Model\TemplateAction") || is_null($this->_propDict["configurationAction"])) {
                return $this->_propDict["configurationAction"];
            } else {
                $this->_propDict["configurationAction"] = new TemplateAction($this->_propDict["configurationAction"]);
                return $this->_propDict["configurationAction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the configurationAction
    *
    * @param TemplateAction $val The configurationAction
    *
    * @return ManagementTemplateStepVersion
    */
    public function setConfigurationAction($val)
    {
        $this->_propDict["configurationAction"] = $val;
        return $this;
    }
    
    /**
    * Gets the validationAction
    *
    * @return TemplateAction|null The validationAction
    */
    public function getValidationAction()
    {
        if (array_key_exists("validationAction", $this->_propDict)) {
            if (is_a($this->_propDict["validationAction"], "\Beta\Microsoft\Graph\ManagedTenants\Model\TemplateAction") || is_null($this->_propDict["validationAction"])) {
                return $this->_propDict["validationAction"];
            } else {
                $this->_propDict["validationAction"] = new TemplateAction($this->_propDict["validationAction"]);
                return $this->_propDict["validationAction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the validationAction
    *
    * @param TemplateAction $val The validationAction
    *
    * @return ManagementTemplateStepVersion
    */
    public function setValidationAction($val)
    {
        $this->_propDict["validationAction"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    *
    * @return int|null The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    *
    * @param int $val The version
    *
    * @return ManagementTemplateStepVersion
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the deployments
     *
     * @return array|null The deployments
     */
    public function getDeployments()
    {
        if (array_key_exists("deployments", $this->_propDict)) {
           return $this->_propDict["deployments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deployments
    *
    * @param ManagementTemplateStepDeployment $val The deployments
    *
    * @return ManagementTemplateStepVersion
    */
    public function setDeployments($val)
    {
        $this->_propDict["deployments"] = $val;
        return $this;
    }
    
    /**
    * Gets the templateStep
    *
    * @return ManagementTemplateStep|null The templateStep
    */
    public function getTemplateStep()
    {
        if (array_key_exists("templateStep", $this->_propDict)) {
            if (is_a($this->_propDict["templateStep"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagementTemplateStep") || is_null($this->_propDict["templateStep"])) {
                return $this->_propDict["templateStep"];
            } else {
                $this->_propDict["templateStep"] = new ManagementTemplateStep($this->_propDict["templateStep"]);
                return $this->_propDict["templateStep"];
            }
        }
        return null;
    }
    
    /**
    * Sets the templateStep
    *
    * @param ManagementTemplateStep $val The templateStep
    *
    * @return ManagementTemplateStepVersion
    */
    public function setTemplateStep($val)
    {
        $this->_propDict["templateStep"] = $val;
        return $this;
    }
    
}
