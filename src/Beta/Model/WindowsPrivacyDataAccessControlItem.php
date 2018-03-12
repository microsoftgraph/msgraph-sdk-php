<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsPrivacyDataAccessControlItem File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* WindowsPrivacyDataAccessControlItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsPrivacyDataAccessControlItem extends Entity
{
    /**
    * Gets the accessLevel
    *
    * @return WindowsPrivacyDataAccessLevel The accessLevel
    */
    public function getAccessLevel()
    {
        if (array_key_exists("accessLevel", $this->_propDict)) {
            if (is_a($this->_propDict["accessLevel"], "Microsoft\Graph\Model\WindowsPrivacyDataAccessLevel")) {
                return $this->_propDict["accessLevel"];
            } else {
                $this->_propDict["accessLevel"] = new WindowsPrivacyDataAccessLevel($this->_propDict["accessLevel"]);
                return $this->_propDict["accessLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accessLevel
    *
    * @param WindowsPrivacyDataAccessLevel $val The accessLevel
    *
    * @return WindowsPrivacyDataAccessControlItem
    */
    public function setAccessLevel($val)
    {
        $this->_propDict["accessLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the dataCategory
    *
    * @return WindowsPrivacyDataCategory The dataCategory
    */
    public function getDataCategory()
    {
        if (array_key_exists("dataCategory", $this->_propDict)) {
            if (is_a($this->_propDict["dataCategory"], "Microsoft\Graph\Model\WindowsPrivacyDataCategory")) {
                return $this->_propDict["dataCategory"];
            } else {
                $this->_propDict["dataCategory"] = new WindowsPrivacyDataCategory($this->_propDict["dataCategory"]);
                return $this->_propDict["dataCategory"];
            }
        }
        return null;
    }
    
    /**
    * Sets the dataCategory
    *
    * @param WindowsPrivacyDataCategory $val The dataCategory
    *
    * @return WindowsPrivacyDataAccessControlItem
    */
    public function setDataCategory($val)
    {
        $this->_propDict["dataCategory"] = $val;
        return $this;
    }
    
    /**
    * Gets the appPackageFamilyName
    *
    * @return string The appPackageFamilyName
    */
    public function getAppPackageFamilyName()
    {
        if (array_key_exists("appPackageFamilyName", $this->_propDict)) {
            return $this->_propDict["appPackageFamilyName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appPackageFamilyName
    *
    * @param string $val The appPackageFamilyName
    *
    * @return WindowsPrivacyDataAccessControlItem
    */
    public function setAppPackageFamilyName($val)
    {
        $this->_propDict["appPackageFamilyName"] = $val;
        return $this;
    }
    
    /**
    * Gets the appDisplayName
    *
    * @return string The appDisplayName
    */
    public function getAppDisplayName()
    {
        if (array_key_exists("appDisplayName", $this->_propDict)) {
            return $this->_propDict["appDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appDisplayName
    *
    * @param string $val The appDisplayName
    *
    * @return WindowsPrivacyDataAccessControlItem
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
        return $this;
    }
    
}