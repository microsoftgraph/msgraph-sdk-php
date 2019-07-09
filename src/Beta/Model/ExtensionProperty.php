<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExtensionProperty File
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
* ExtensionProperty class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ExtensionProperty extends DirectoryObject
{
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
    * @return ExtensionProperty
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    *
    * @param string $val The name
    *
    * @return ExtensionProperty
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the dataType
    *
    * @return string The dataType
    */
    public function getDataType()
    {
        if (array_key_exists("dataType", $this->_propDict)) {
            return $this->_propDict["dataType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dataType
    *
    * @param string $val The dataType
    *
    * @return ExtensionProperty
    */
    public function setDataType($val)
    {
        $this->_propDict["dataType"] = $val;
        return $this;
    }
    
    /**
    * Gets the isSyncedFromOnPremises
    *
    * @return bool The isSyncedFromOnPremises
    */
    public function getIsSyncedFromOnPremises()
    {
        if (array_key_exists("isSyncedFromOnPremises", $this->_propDict)) {
            return $this->_propDict["isSyncedFromOnPremises"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isSyncedFromOnPremises
    *
    * @param bool $val The isSyncedFromOnPremises
    *
    * @return ExtensionProperty
    */
    public function setIsSyncedFromOnPremises($val)
    {
        $this->_propDict["isSyncedFromOnPremises"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the targetObjects
    *
    * @return string The targetObjects
    */
    public function getTargetObjects()
    {
        if (array_key_exists("targetObjects", $this->_propDict)) {
            return $this->_propDict["targetObjects"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetObjects
    *
    * @param string $val The targetObjects
    *
    * @return ExtensionProperty
    */
    public function setTargetObjects($val)
    {
        $this->_propDict["targetObjects"] = $val;
        return $this;
    }
    
}