<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchQuery File
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
* SearchQuery class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SearchQuery extends Entity
{

    /**
    * Gets the query_string
    *
    * @return SearchQueryString The query_string
    */
    public function getQuery_string()
    {
        if (array_key_exists("queryString", $this->_propDict)) {
            if (is_a($this->_propDict["queryString"], "Microsoft\Graph\Beta\Model\SearchQueryString")) {
                return $this->_propDict["queryString"];
            } else {
                $this->_propDict["queryString"] = new SearchQueryString($this->_propDict["queryString"]);
                return $this->_propDict["queryString"];
            }
        }
        return null;
    }

    /**
    * Sets the query_string
    *
    * @param SearchQueryString $val The value to assign to the query_string
    *
    * @return SearchQuery The SearchQuery
    */
    public function setQuery_string($val)
    {
        $this->_propDict["query_string"] = $val;
         return $this;
    }
}
