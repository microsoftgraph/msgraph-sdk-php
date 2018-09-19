<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppContent File
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
* MobileAppContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MobileAppContent extends Entity
{

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
    * @param MobileAppContentFile $val The files
    *
    * @return MobileAppContent
    */
    public function setFiles($val)
    {
		$this->_propDict["files"] = $val;
        return $this;
    }
    

     /** 
     * Gets the containedApps
     *
     * @return array The containedApps
     */
    public function getContainedApps()
    {
        if (array_key_exists("containedApps", $this->_propDict)) {
           return $this->_propDict["containedApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the containedApps
    *
    * @param MobileContainedApp $val The containedApps
    *
    * @return MobileAppContent
    */
    public function setContainedApps($val)
    {
		$this->_propDict["containedApps"] = $val;
        return $this;
    }
    
}