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
    * @return SearchHitsContainer|null The hitsContainers
    */
    public function getHitsContainers()
    {
        if (array_key_exists("hitsContainers", $this->_propDict)) {
            if (is_a($this->_propDict["hitsContainers"], "\Beta\Microsoft\Graph\Model\SearchHitsContainer") || is_null($this->_propDict["hitsContainers"])) {
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
    * Gets the resultTemplates
    *
    * @return ResultTemplateDictionary|null The resultTemplates
    */
    public function getResultTemplates()
    {
        if (array_key_exists("resultTemplates", $this->_propDict)) {
            if (is_a($this->_propDict["resultTemplates"], "\Beta\Microsoft\Graph\Model\ResultTemplateDictionary") || is_null($this->_propDict["resultTemplates"])) {
                return $this->_propDict["resultTemplates"];
            } else {
                $this->_propDict["resultTemplates"] = new ResultTemplateDictionary($this->_propDict["resultTemplates"]);
                return $this->_propDict["resultTemplates"];
            }
        }
        return null;
    }

    /**
    * Sets the resultTemplates
    *
    * @param ResultTemplateDictionary $val The value to assign to the resultTemplates
    *
    * @return SearchResultSet The SearchResultSet
    */
    public function setResultTemplates($val)
    {
        $this->_propDict["resultTemplates"] = $val;
         return $this;
    }
    /**
    * Gets the searchTerms
    * Contains the search terms sent in the initial search query.
    *
    * @return string|null The searchTerms
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
