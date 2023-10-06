<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthorizationSystemTypeService File
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
* AuthorizationSystemTypeService class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthorizationSystemTypeService extends Entity
{

     /**
     * Gets the actions
     *
     * @return array|null The actions
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
    * @param AuthorizationSystemTypeAction[] $val The actions
    *
    * @return AuthorizationSystemTypeService
    */
    public function setActions($val)
    {
        $this->_propDict["actions"] = $val;
        return $this;
    }

}
