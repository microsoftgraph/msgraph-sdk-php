<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RolePermission File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* RolePermission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RolePermission extends Entity
{

    /**
    * Gets the resourceActions
    * Resource Actions each containing a set of allowed and not allowed permissions.
    *
    * @return ResourceAction[]|null The resourceActions
    */
    public function getResourceActions()
    {
        if (array_key_exists("resourceActions", $this->_propDict) && !is_null($this->_propDict["resourceActions"])) {
       
            if (count($this->_propDict['resourceActions']) > 0 && is_a($this->_propDict['resourceActions'][0], 'ResourceAction')) {
               return $this->_propDict['resourceActions'];
            }
            $resourceActions = [];
            foreach ($this->_propDict['resourceActions'] as $singleValue) {
               $resourceActions []= new ResourceAction($singleValue);
            }
            $this->_propDict['resourceActions'] = $resourceActions;
            return $this->_propDict['resourceActions'];
            }
        return null;
    }

    /**
    * Sets the resourceActions
    * Resource Actions each containing a set of allowed and not allowed permissions.
    *
    * @param ResourceAction[] $val The value to assign to the resourceActions
    *
    * @return RolePermission The RolePermission
    */
    public function setResourceActions($val)
    {
        $this->_propDict["resourceActions"] = $val;
         return $this;
    }
}
