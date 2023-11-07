<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AgentReference File
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
* AgentReference class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AgentReference extends Entity
{
    /**
    * Gets the path
    *
    * @return string|null The path
    */
    public function getPath()
    {
        if (array_key_exists("path", $this->_propDict)) {
            return $this->_propDict["path"];
        } else {
            return null;
        }
    }

    /**
    * Sets the path
    *
    * @param string $val The value of the path
    *
    * @return AgentReference
    */
    public function setPath($val)
    {
        $this->_propDict["path"] = $val;
        return $this;
    }
}
