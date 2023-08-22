<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatRestrictions File
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
* ChatRestrictions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatRestrictions extends Entity
{
    /**
    * Gets the allowTextOnly
    *
    * @return bool|null The allowTextOnly
    */
    public function getAllowTextOnly()
    {
        if (array_key_exists("allowTextOnly", $this->_propDict)) {
            return $this->_propDict["allowTextOnly"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowTextOnly
    *
    * @param bool $val The value of the allowTextOnly
    *
    * @return ChatRestrictions
    */
    public function setAllowTextOnly($val)
    {
        $this->_propDict["allowTextOnly"] = $val;
        return $this;
    }
}
