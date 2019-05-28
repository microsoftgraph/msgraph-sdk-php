<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Agreement File
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
* Agreement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Agreement extends Entity
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
    * @return Agreement
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isViewingBeforeAcceptanceRequired
    *
    * @return bool The isViewingBeforeAcceptanceRequired
    */
    public function getIsViewingBeforeAcceptanceRequired()
    {
        if (array_key_exists("isViewingBeforeAcceptanceRequired", $this->_propDict)) {
            return $this->_propDict["isViewingBeforeAcceptanceRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isViewingBeforeAcceptanceRequired
    *
    * @param bool $val The isViewingBeforeAcceptanceRequired
    *
    * @return Agreement
    */
    public function setIsViewingBeforeAcceptanceRequired($val)
    {
        $this->_propDict["isViewingBeforeAcceptanceRequired"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the files
     *
     * @return array The files
     */
    public function getFiles()
    {
        if (array_key_exists("files", $this->_propDict)) {
           return $this->_propDict["files"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the files
    *
    * @param AgreementFile $val The files
    *
    * @return Agreement
    */
    public function setFiles($val)
    {
		$this->_propDict["files"] = $val;
        return $this;
    }
    
}