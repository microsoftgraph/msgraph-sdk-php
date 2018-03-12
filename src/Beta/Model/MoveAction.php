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
    * Gets the From
    *
    * @return string The From
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
    * Sets the From
    *
    * @param string $val The value of the From
    *
    * @return MoveAction
    */
    public function setFrom($val)
    {
        $this->_propDict["from"] = $val;
        return $this;
    }
    /**
    * Gets the to
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
    * Sets the to
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
