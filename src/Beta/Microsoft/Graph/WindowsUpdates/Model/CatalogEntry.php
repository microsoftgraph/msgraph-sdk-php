<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CatalogEntry File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;

/**
* CatalogEntry class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CatalogEntry extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the deployableUntilDateTime
    *
    * @return \DateTime The deployableUntilDateTime
    */
    public function getDeployableUntilDateTime()
    {
        if (array_key_exists("deployableUntilDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["deployableUntilDateTime"], "\DateTime")) {
                return $this->_propDict["deployableUntilDateTime"];
            } else {
                $this->_propDict["deployableUntilDateTime"] = new \DateTime($this->_propDict["deployableUntilDateTime"]);
                return $this->_propDict["deployableUntilDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deployableUntilDateTime
    *
    * @param \DateTime $val The deployableUntilDateTime
    *
    * @return CatalogEntry
    */
    public function setDeployableUntilDateTime($val)
    {
        $this->_propDict["deployableUntilDateTime"] = $val;
        return $this;
    }
    
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
    * @return CatalogEntry
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the releaseDateTime
    *
    * @return \DateTime The releaseDateTime
    */
    public function getReleaseDateTime()
    {
        if (array_key_exists("releaseDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["releaseDateTime"], "\DateTime")) {
                return $this->_propDict["releaseDateTime"];
            } else {
                $this->_propDict["releaseDateTime"] = new \DateTime($this->_propDict["releaseDateTime"]);
                return $this->_propDict["releaseDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the releaseDateTime
    *
    * @param \DateTime $val The releaseDateTime
    *
    * @return CatalogEntry
    */
    public function setReleaseDateTime($val)
    {
        $this->_propDict["releaseDateTime"] = $val;
        return $this;
    }
    
}
