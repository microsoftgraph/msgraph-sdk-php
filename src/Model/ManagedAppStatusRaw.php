<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedAppStatusRaw File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* ManagedAppStatusRaw class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ManagedAppStatusRaw extends ManagedAppStatus
{
    /**
    * Gets the content
    * Status report content.
    *
    * @return string The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            return $this->_propDict["content"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the content
    * Status report content.
    *
    * @param string $val The content
    *
    * @return ManagedAppStatusRaw
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }
    
}