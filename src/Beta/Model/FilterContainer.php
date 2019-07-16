<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FilterContainer File
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
* FilterContainer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class FilterContainer extends Entity
{

    /**
    * Gets the bool
    *
    * @return FilterContainer The bool
    */
    public function getBool()
    {
        if (array_key_exists("bool", $this->_propDict)) {
            if (is_a($this->_propDict["bool"], "Microsoft\Graph\Beta\Model\FilterContainer")) {
                return $this->_propDict["bool"];
            } else {
                $this->_propDict["bool"] = new FilterContainer($this->_propDict["bool"]);
                return $this->_propDict["bool"];
            }
        }
        return null;
    }

    /**
    * Sets the bool
    *
    * @param FilterContainer $val The value to assign to the bool
    *
    * @return FilterContainer The FilterContainer
    */
    public function setBool($val)
    {
        $this->_propDict["bool"] = $val;
         return $this;
    }

    /**
    * Gets the should
    *
    * @return FilterContainer The should
    */
    public function getShould()
    {
        if (array_key_exists("should", $this->_propDict)) {
            if (is_a($this->_propDict["should"], "Microsoft\Graph\Beta\Model\FilterContainer")) {
                return $this->_propDict["should"];
            } else {
                $this->_propDict["should"] = new FilterContainer($this->_propDict["should"]);
                return $this->_propDict["should"];
            }
        }
        return null;
    }

    /**
    * Sets the should
    *
    * @param FilterContainer $val The value to assign to the should
    *
    * @return FilterContainer The FilterContainer
    */
    public function setShould($val)
    {
        $this->_propDict["should"] = $val;
         return $this;
    }

    /**
    * Gets the term
    *
    * @return TermFilter The term
    */
    public function getTerm()
    {
        if (array_key_exists("term", $this->_propDict)) {
            if (is_a($this->_propDict["term"], "Microsoft\Graph\Beta\Model\TermFilter")) {
                return $this->_propDict["term"];
            } else {
                $this->_propDict["term"] = new TermFilter($this->_propDict["term"]);
                return $this->_propDict["term"];
            }
        }
        return null;
    }

    /**
    * Sets the term
    *
    * @param TermFilter $val The value to assign to the term
    *
    * @return FilterContainer The FilterContainer
    */
    public function setTerm($val)
    {
        $this->_propDict["term"] = $val;
         return $this;
    }

    /**
    * Gets the range
    *
    * @return RangeFilter The range
    */
    public function getRange()
    {
        if (array_key_exists("range", $this->_propDict)) {
            if (is_a($this->_propDict["range"], "Microsoft\Graph\Beta\Model\RangeFilter")) {
                return $this->_propDict["range"];
            } else {
                $this->_propDict["range"] = new RangeFilter($this->_propDict["range"]);
                return $this->_propDict["range"];
            }
        }
        return null;
    }

    /**
    * Sets the range
    *
    * @param RangeFilter $val The value to assign to the range
    *
    * @return FilterContainer The FilterContainer
    */
    public function setRange($val)
    {
        $this->_propDict["range"] = $val;
         return $this;
    }
}
