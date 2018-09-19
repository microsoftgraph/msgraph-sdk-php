<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookIcon File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* WorkbookIcon class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WorkbookIcon extends Entity
{
    /**
    * Gets the index
    *
    * @return int The index
    */
    public function getIndex()
    {
        if (array_key_exists("index", $this->_propDict)) {
            return $this->_propDict["index"];
        } else {
            return null;
        }
    }

    /**
    * Sets the index
    *
    * @param int $val The value of the index
    *
    * @return WorkbookIcon
    */
    public function setIndex($val)
    {
        $this->_propDict["index"] = $val;
        return $this;
    }
    /**
    * Gets the set
    *
    * @return string The set
    */
    public function getSet()
    {
        if (array_key_exists("set", $this->_propDict)) {
            return $this->_propDict["set"];
        } else {
            return null;
        }
    }

    /**
    * Sets the set
    *
    * @param string $val The value of the set
    *
    * @return WorkbookIcon
    */
    public function setSet($val)
    {
        $this->_propDict["set"] = $val;
        return $this;
    }
}
