<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TermColumn File
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
* TermColumn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TermColumn extends Entity
{
    /**
    * Gets the allowMultipleValues
    *
    * @return bool The allowMultipleValues
    */
    public function getAllowMultipleValues()
    {
        if (array_key_exists("allowMultipleValues", $this->_propDict)) {
            return $this->_propDict["allowMultipleValues"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowMultipleValues
    *
    * @param bool $val The value of the allowMultipleValues
    *
    * @return TermColumn
    */
    public function setAllowMultipleValues($val)
    {
        $this->_propDict["allowMultipleValues"] = $val;
        return $this;
    }
    /**
    * Gets the showFullyQualifiedName
    *
    * @return bool The showFullyQualifiedName
    */
    public function getShowFullyQualifiedName()
    {
        if (array_key_exists("showFullyQualifiedName", $this->_propDict)) {
            return $this->_propDict["showFullyQualifiedName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showFullyQualifiedName
    *
    * @param bool $val The value of the showFullyQualifiedName
    *
    * @return TermColumn
    */
    public function setShowFullyQualifiedName($val)
    {
        $this->_propDict["showFullyQualifiedName"] = $val;
        return $this;
    }
}
