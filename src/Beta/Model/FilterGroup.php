<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FilterGroup File
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
* FilterGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class FilterGroup extends Entity
{

    /**
    * Gets the clauses
    *
    * @return FilterClause The clauses
    */
    public function getClauses()
    {
        if (array_key_exists("clauses", $this->_propDict)) {
            if (is_a($this->_propDict["clauses"], "Microsoft\Graph\Model\FilterClause")) {
                return $this->_propDict["clauses"];
            } else {
                $this->_propDict["clauses"] = new FilterClause($this->_propDict["clauses"]);
                return $this->_propDict["clauses"];
            }
        }
        return null;
    }

    /**
    * Sets the clauses
    *
    * @param FilterClause $val The value to assign to the clauses
    *
    * @return FilterGroup The FilterGroup
    */
    public function setClauses($val)
    {
        $this->_propDict["clauses"] = $val;
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
    * @return FilterGroup
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
}
