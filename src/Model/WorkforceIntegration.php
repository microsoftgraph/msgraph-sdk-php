<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkforceIntegration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* WorkforceIntegration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WorkforceIntegration extends ChangeTrackedEntity
{
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return WorkforceIntegration
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the apiVersion
    *
    * @return int The apiVersion
    */
    public function getApiVersion()
    {
        if (array_key_exists("apiVersion", $this->_propDict)) {
            return $this->_propDict["apiVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the apiVersion
    *
    * @param int $val The apiVersion
    *
    * @return WorkforceIntegration
    */
    public function setApiVersion($val)
    {
        $this->_propDict["apiVersion"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the encryption
    *
    * @return WorkforceIntegrationEncryption The encryption
    */
    public function getEncryption()
    {
        if (array_key_exists("encryption", $this->_propDict)) {
            if (is_a($this->_propDict["encryption"], "Microsoft\Graph\Model\WorkforceIntegrationEncryption")) {
                return $this->_propDict["encryption"];
            } else {
                $this->_propDict["encryption"] = new WorkforceIntegrationEncryption($this->_propDict["encryption"]);
                return $this->_propDict["encryption"];
            }
        }
        return null;
    }
    
    /**
    * Sets the encryption
    *
    * @param WorkforceIntegrationEncryption $val The encryption
    *
    * @return WorkforceIntegration
    */
    public function setEncryption($val)
    {
        $this->_propDict["encryption"] = $val;
        return $this;
    }
    
    /**
    * Gets the isActive
    *
    * @return bool The isActive
    */
    public function getIsActive()
    {
        if (array_key_exists("isActive", $this->_propDict)) {
            return $this->_propDict["isActive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isActive
    *
    * @param bool $val The isActive
    *
    * @return WorkforceIntegration
    */
    public function setIsActive($val)
    {
        $this->_propDict["isActive"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the url
    *
    * @return string The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the url
    *
    * @param string $val The url
    *
    * @return WorkforceIntegration
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
    
    /**
    * Gets the supportedEntities
    *
    * @return WorkforceIntegrationSupportedEntities The supportedEntities
    */
    public function getSupportedEntities()
    {
        if (array_key_exists("supportedEntities", $this->_propDict)) {
            if (is_a($this->_propDict["supportedEntities"], "Microsoft\Graph\Model\WorkforceIntegrationSupportedEntities")) {
                return $this->_propDict["supportedEntities"];
            } else {
                $this->_propDict["supportedEntities"] = new WorkforceIntegrationSupportedEntities($this->_propDict["supportedEntities"]);
                return $this->_propDict["supportedEntities"];
            }
        }
        return null;
    }
    
    /**
    * Sets the supportedEntities
    *
    * @param WorkforceIntegrationSupportedEntities $val The supportedEntities
    *
    * @return WorkforceIntegration
    */
    public function setSupportedEntities($val)
    {
        $this->_propDict["supportedEntities"] = $val;
        return $this;
    }
    
}