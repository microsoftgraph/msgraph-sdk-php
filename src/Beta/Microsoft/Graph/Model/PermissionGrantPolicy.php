<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PermissionGrantPolicy File
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
* PermissionGrantPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PermissionGrantPolicy extends PolicyBase
{

     /** 
     * Gets the includes
     *
     * @return array The includes
     */
    public function getIncludes()
    {
        if (array_key_exists("includes", $this->_propDict)) {
           return $this->_propDict["includes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the includes
    *
    * @param PermissionGrantConditionSet $val The includes
    *
    * @return PermissionGrantPolicy
    */
    public function setIncludes($val)
    {
		$this->_propDict["includes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the excludes
     *
     * @return array The excludes
     */
    public function getExcludes()
    {
        if (array_key_exists("excludes", $this->_propDict)) {
           return $this->_propDict["excludes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the excludes
    *
    * @param PermissionGrantConditionSet $val The excludes
    *
    * @return PermissionGrantPolicy
    */
    public function setExcludes($val)
    {
		$this->_propDict["excludes"] = $val;
        return $this;
    }
    
}