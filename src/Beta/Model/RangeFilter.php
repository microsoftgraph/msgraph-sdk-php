<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RangeFilter File
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
* RangeFilter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RangeFilter extends Entity
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
    * @return RangeFilter The RangeFilter
    */
    public function setField($val)
    {
        $this->_propDict["field"] = $val;
         return $this;
    }
    /**
    * Gets the gt
    *
    * @return string The gt
    */
    public function getGt()
    {
        if (array_key_exists("gt", $this->_propDict)) {
            return $this->_propDict["gt"];
        } else {
            return null;
        }
    }

    /**
    * Sets the gt
    *
    * @param string $val The value of the gt
    *
    * @return RangeFilter
    */
    public function setGt($val)
    {
        $this->_propDict["gt"] = $val;
        return $this;
    }
    /**
    * Gets the gte
    *
    * @return string The gte
    */
    public function getGte()
    {
        if (array_key_exists("gte", $this->_propDict)) {
            return $this->_propDict["gte"];
        } else {
            return null;
        }
    }

    /**
    * Sets the gte
    *
    * @param string $val The value of the gte
    *
    * @return RangeFilter
    */
    public function setGte($val)
    {
        $this->_propDict["gte"] = $val;
        return $this;
    }
    /**
    * Gets the lt
    *
    * @return string The lt
    */
    public function getLt()
    {
        if (array_key_exists("lt", $this->_propDict)) {
            return $this->_propDict["lt"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lt
    *
    * @param string $val The value of the lt
    *
    * @return RangeFilter
    */
    public function setLt($val)
    {
        $this->_propDict["lt"] = $val;
        return $this;
    }
    /**
    * Gets the lte
    *
    * @return string The lte
    */
    public function getLte()
    {
        if (array_key_exists("lte", $this->_propDict)) {
            return $this->_propDict["lte"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lte
    *
    * @param string $val The value of the lte
    *
    * @return RangeFilter
    */
    public function setLte($val)
    {
        $this->_propDict["lte"] = $val;
        return $this;
    }
}
