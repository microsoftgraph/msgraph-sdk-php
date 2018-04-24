<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MoveAction File
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
* MoveAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MoveAction extends Entity
{
    /**
    * Gets the class
    * The type of data source, such as Person.
    *
    * @return string The from
    */
    public function getFrom()
    {
        if (array_key_exists("from", $this->_propDict)) {
            return $this->_propDict["from"];
        } else {
            return null;
        }
    }

    /**
    * Sets the class
    * The type of data source, such as Person.
    *
    * @param string $val The value of the from
    *
    * @return MoveAction
    */
    public function setFrom($val)
    {
        $this->_propDict["from"] = $val;
        return $this;
    }
    /**
    * Gets the subclass
    * The secondary type of data source, such as OrganizationUser.
    *
    * @return string The to
    */
    public function getTo()
    {
        if (array_key_exists("to", $this->_propDict)) {
            return $this->_propDict["to"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subclass
    * The secondary type of data source, such as OrganizationUser.
    *
    * @param string $val The value of the to
    *
    * @return MoveAction
    */
    public function setTo($val)
    {
        $this->_propDict["to"] = $val;
        return $this;
    }
}
