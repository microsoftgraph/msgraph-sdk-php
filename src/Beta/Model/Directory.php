<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Directory File
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
* Directory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Directory extends Entity
{

     /** 
     * Gets the deletedItems
     *
     * @return array The deletedItems
     */
    public function getDeletedItems()
    {
        if (array_key_exists("deletedItems", $this->_propDict)) {
           return $this->_propDict["deletedItems"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deletedItems
    *
    * @param DirectoryObject $val The deletedItems
    *
    * @return Directory
    */
    public function setDeletedItems($val)
    {
		$this->_propDict["deletedItems"] = $val;
        return $this;
    }
    
}