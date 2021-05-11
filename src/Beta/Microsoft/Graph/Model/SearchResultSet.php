<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchResultSet File
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
* SearchResultSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SearchResultSet extends Entity
{

    /**
    * Gets the hitsContainers
    * A collection of search results.
    *
    * @return SearchHitsContainer The hitsContainers
    */
    public function getHitsContainers()
    {
        if (array_key_exists("hitsContainers", $this->_propDict)) {
            if (is_a($this->_propDict["hitsContainers"], "\Beta\Microsoft\Graph\Model\SearchHitsContainer")) {
                return $this->_propDict["hitsContainers"];
            } else {
                $this->_propDict["hitsContainers"] = new SearchHitsContainer($this->_propDict["hitsContainers"]);
                return $this->_propDict["hitsContainers"];
            }
        }
        return null;
    }

    /**
    * Sets the hitsContainers
    * A collection of search results.
    *
    * @param SearchHitsContainer $val The value to assign to the hitsContainers
    *
    * @return SearchResultSet The SearchResultSet
    */
    public function setHitsContainers($val)
    {
        $this->_propDict["hitsContainers"] = $val;
         return $this;
    }
    /**
    * Gets the searchTerms
    * Contains the search terms sent in the initial search query.
    *
    * @return string The searchTerms
    */
    public function getSearchTerms()
    {
        if (array_key_exists("searchTerms", $this->_propDict)) {
            return $this->_propDict["searchTerms"];
        } else {
            return null;
        }
    }

    /**
    * Sets the searchTerms
    * Contains the search terms sent in the initial search query.
    *
    * @param string $val The value of the searchTerms
    *
    * @return SearchResultSet
    */
    public function setSearchTerms($val)
    {
        $this->_propDict["searchTerms"] = $val;
        return $this;
    }
}
