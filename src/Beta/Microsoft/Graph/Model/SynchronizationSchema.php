<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationSchema File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* SynchronizationSchema class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SynchronizationSchema extends Entity
{

     /** 
     * Gets the synchronizationRules
     *
     * @return array The synchronizationRules
     */
    public function getSynchronizationRules()
    {
        if (array_key_exists("synchronizationRules", $this->_propDict)) {
           return $this->_propDict["synchronizationRules"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the synchronizationRules
    *
    * @param SynchronizationRule $val The synchronizationRules
    *
    * @return SynchronizationSchema
    */
    public function setSynchronizationRules($val)
    {
		$this->_propDict["synchronizationRules"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    *
    * @return string The version
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
    * @param string $val The version
    *
    * @return SynchronizationSchema
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
    

     /** 
     * Gets the directories
     *
     * @return array The directories
     */
    public function getDirectories()
    {
        if (array_key_exists("directories", $this->_propDict)) {
           return $this->_propDict["directories"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the directories
    *
    * @param DirectoryDefinition $val The directories
    *
    * @return SynchronizationSchema
    */
    public function setDirectories($val)
    {
		$this->_propDict["directories"] = $val;
        return $this;
    }
    
}