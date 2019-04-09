<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Filter File
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
* Filter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Filter extends Entity
{

    /**
    * Gets the groups
    *
    * @return FilterGroup The groups
    */
    public function getGroups()
    {
        if (array_key_exists("groups", $this->_propDict)) {
            if (is_a($this->_propDict["groups"], "Microsoft\Graph\Beta\Model\FilterGroup")) {
                return $this->_propDict["groups"];
            } else {
                $this->_propDict["groups"] = new FilterGroup($this->_propDict["groups"]);
                return $this->_propDict["groups"];
            }
        }
        return null;
    }

    /**
    * Sets the groups
    *
    * @param FilterGroup $val The value to assign to the groups
    *
    * @return Filter The Filter
    */
    public function setGroups($val)
    {
        $this->_propDict["groups"] = $val;
         return $this;
    }

    /**
    * Gets the inputFilterGroups
    *
    * @return FilterGroup The inputFilterGroups
    */
    public function getInputFilterGroups()
    {
        if (array_key_exists("inputFilterGroups", $this->_propDict)) {
            if (is_a($this->_propDict["inputFilterGroups"], "Microsoft\Graph\Beta\Model\FilterGroup")) {
                return $this->_propDict["inputFilterGroups"];
            } else {
                $this->_propDict["inputFilterGroups"] = new FilterGroup($this->_propDict["inputFilterGroups"]);
                return $this->_propDict["inputFilterGroups"];
            }
        }
        return null;
    }

    /**
    * Sets the inputFilterGroups
    *
    * @param FilterGroup $val The value to assign to the inputFilterGroups
    *
    * @return Filter The Filter
    */
    public function setInputFilterGroups($val)
    {
        $this->_propDict["inputFilterGroups"] = $val;
         return $this;
    }

    /**
    * Gets the categoryFilterGroups
    *
    * @return FilterGroup The categoryFilterGroups
    */
    public function getCategoryFilterGroups()
    {
        if (array_key_exists("categoryFilterGroups", $this->_propDict)) {
            if (is_a($this->_propDict["categoryFilterGroups"], "Microsoft\Graph\Beta\Model\FilterGroup")) {
                return $this->_propDict["categoryFilterGroups"];
            } else {
                $this->_propDict["categoryFilterGroups"] = new FilterGroup($this->_propDict["categoryFilterGroups"]);
                return $this->_propDict["categoryFilterGroups"];
            }
        }
        return null;
    }

    /**
    * Sets the categoryFilterGroups
    *
    * @param FilterGroup $val The value to assign to the categoryFilterGroups
    *
    * @return Filter The Filter
    */
    public function setCategoryFilterGroups($val)
    {
        $this->_propDict["categoryFilterGroups"] = $val;
         return $this;
    }
}
