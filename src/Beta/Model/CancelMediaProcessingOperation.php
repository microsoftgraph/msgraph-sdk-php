<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CancelMediaProcessingOperation File
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
* CancelMediaProcessingOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class CancelMediaProcessingOperation extends CommsOperation
{
    /**
    * Gets the all
    *
    * @return bool The all
    */
    public function getAll()
    {
        if (array_key_exists("all", $this->_propDict)) {
            return $this->_propDict["all"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the all
    *
    * @param bool $val The all
    *
    * @return CancelMediaProcessingOperation
    */
    public function setAll($val)
    {
        $this->_propDict["all"] = boolval($val);
        return $this;
    }
    
}