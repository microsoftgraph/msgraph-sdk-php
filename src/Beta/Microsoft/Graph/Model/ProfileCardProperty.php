<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProfileCardProperty File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* ProfileCardProperty class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProfileCardProperty extends Entity
{

     /** 
     * Gets the annotations
     *
     * @return array The annotations
     */
    public function getAnnotations()
    {
        if (array_key_exists("annotations", $this->_propDict)) {
           return $this->_propDict["annotations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the annotations
    *
    * @param ProfileCardAnnotation $val The annotations
    *
    * @return ProfileCardProperty
    */
    public function setAnnotations($val)
    {
		$this->_propDict["annotations"] = $val;
        return $this;
    }
    
    /**
    * Gets the directoryPropertyName
    *
    * @return string The directoryPropertyName
    */
    public function getDirectoryPropertyName()
    {
        if (array_key_exists("directoryPropertyName", $this->_propDict)) {
            return $this->_propDict["directoryPropertyName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the directoryPropertyName
    *
    * @param string $val The directoryPropertyName
    *
    * @return ProfileCardProperty
    */
    public function setDirectoryPropertyName($val)
    {
        $this->_propDict["directoryPropertyName"] = $val;
        return $this;
    }
    
}