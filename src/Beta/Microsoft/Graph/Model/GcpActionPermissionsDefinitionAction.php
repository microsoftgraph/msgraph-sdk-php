<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GcpActionPermissionsDefinitionAction File
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
* GcpActionPermissionsDefinitionAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GcpActionPermissionsDefinitionAction extends GcpPermissionsDefinitionAction
{
    /**
    * Gets the actions
    *
    * @return string|null The actions
    */
    public function getActions()
    {
        if (array_key_exists("actions", $this->_propDict)) {
            return $this->_propDict["actions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the actions
    *
    * @param string $val The value of the actions
    *
    * @return GcpActionPermissionsDefinitionAction
    */
    public function setActions($val)
    {
        $this->_propDict["actions"] = $val;
        return $this;
    }
}
