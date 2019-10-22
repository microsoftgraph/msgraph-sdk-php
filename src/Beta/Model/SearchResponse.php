<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchResponse File
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
* SearchResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SearchResponse extends Entity
{
    /**
    * Gets the searchTerms
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
    *
    * @param string $val The value of the searchTerms
    *
    * @return SearchResponse
    */
    public function setSearchTerms($val)
    {
        $this->_propDict["searchTerms"] = $val;
        return $this;
    }

    /**
    * Gets the hitsContainers
    *
    * @return SearchHitsContainer The hitsContainers
    */
    public function getHitsContainers()
    {
        if (array_key_exists("hitsContainers", $this->_propDict)) {
            if (is_a($this->_propDict["hitsContainers"], "Microsoft\Graph\Beta\Model\SearchHitsContainer")) {
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
    *
    * @param SearchHitsContainer $val The value to assign to the hitsContainers
    *
    * @return SearchResponse The SearchResponse
    */
    public function setHitsContainers($val)
    {
        $this->_propDict["hitsContainers"] = $val;
         return $this;
    }
}
