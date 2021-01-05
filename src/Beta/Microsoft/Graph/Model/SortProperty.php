<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SortProperty File
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
* SortProperty class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SortProperty extends Entity
{
    /**
    * Gets the isDescending
    *
    * @return bool The isDescending
    */
    public function getIsDescending()
    {
        if (array_key_exists("isDescending", $this->_propDict)) {
            return $this->_propDict["isDescending"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDescending
    *
    * @param bool $val The value of the isDescending
    *
    * @return SortProperty
    */
    public function setIsDescending($val)
    {
        $this->_propDict["isDescending"] = $val;
        return $this;
    }
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The value of the name
    *
    * @return SortProperty
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
}
