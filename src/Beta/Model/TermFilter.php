<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TermFilter File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* TermFilter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TermFilter extends Entity
{

    /**
    * Gets the field
    *
    * @return TermField The field
    */
    public function getField()
    {
        if (array_key_exists("field", $this->_propDict)) {
            if (is_a($this->_propDict["field"], "Microsoft\Graph\Beta\Model\TermField")) {
                return $this->_propDict["field"];
            } else {
                $this->_propDict["field"] = new TermField($this->_propDict["field"]);
                return $this->_propDict["field"];
            }
        }
        return null;
    }

    /**
    * Sets the field
    *
    * @param TermField $val The value to assign to the field
    *
    * @return TermFilter The TermFilter
    */
    public function setField($val)
    {
        $this->_propDict["field"] = $val;
         return $this;
    }
    /**
    * Gets the value
    *
    * @return string The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    *
    * @param string $val The value of the value
    *
    * @return TermFilter
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
