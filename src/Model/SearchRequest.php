<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchRequest File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* SearchRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SearchRequest extends Entity
{
    /**
    * Gets the contentSources
    *
    * @return string The contentSources
    */
    public function getContentSources()
    {
        if (array_key_exists("contentSources", $this->_propDict)) {
            return $this->_propDict["contentSources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentSources
    *
    * @param string $val The value of the contentSources
    *
    * @return SearchRequest
    */
    public function setContentSources($val)
    {
        $this->_propDict["contentSources"] = $val;
        return $this;
    }
    /**
    * Gets the enableTopResults
    *
    * @return bool The enableTopResults
    */
    public function getEnableTopResults()
    {
        if (array_key_exists("enableTopResults", $this->_propDict)) {
            return $this->_propDict["enableTopResults"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableTopResults
    *
    * @param bool $val The value of the enableTopResults
    *
    * @return SearchRequest
    */
    public function setEnableTopResults($val)
    {
        $this->_propDict["enableTopResults"] = $val;
        return $this;
    }

    /**
    * Gets the entityTypes
    *
    * @return EntityType The entityTypes
    */
    public function getEntityTypes()
    {
        if (array_key_exists("entityTypes", $this->_propDict)) {
            if (is_a($this->_propDict["entityTypes"], "Microsoft\Graph\Model\EntityType")) {
                return $this->_propDict["entityTypes"];
            } else {
                $this->_propDict["entityTypes"] = new EntityType($this->_propDict["entityTypes"]);
                return $this->_propDict["entityTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the entityTypes
    *
    * @param EntityType $val The value to assign to the entityTypes
    *
    * @return SearchRequest The SearchRequest
    */
    public function setEntityTypes($val)
    {
        $this->_propDict["entityTypes"] = $val;
         return $this;
    }
    /**
    * Gets the fields
    *
    * @return string The fields
    */
    public function getFields()
    {
        if (array_key_exists("fields", $this->_propDict)) {
            return $this->_propDict["fields"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fields
    *
    * @param string $val The value of the fields
    *
    * @return SearchRequest
    */
    public function setFields($val)
    {
        $this->_propDict["fields"] = $val;
        return $this;
    }
    /**
    * Gets the from
    *
    * @return int The from
    */
    public function getFrom()
    {
        if (array_key_exists("from", $this->_propDict)) {
            return $this->_propDict["from"];
        } else {
            return null;
        }
    }

    /**
    * Sets the from
    *
    * @param int $val The value of the from
    *
    * @return SearchRequest
    */
    public function setFrom($val)
    {
        $this->_propDict["from"] = $val;
        return $this;
    }

    /**
    * Gets the query
    *
    * @return SearchQuery The query
    */
    public function getQuery()
    {
        if (array_key_exists("query", $this->_propDict)) {
            if (is_a($this->_propDict["query"], "Microsoft\Graph\Model\SearchQuery")) {
                return $this->_propDict["query"];
            } else {
                $this->_propDict["query"] = new SearchQuery($this->_propDict["query"]);
                return $this->_propDict["query"];
            }
        }
        return null;
    }

    /**
    * Sets the query
    *
    * @param SearchQuery $val The value to assign to the query
    *
    * @return SearchRequest The SearchRequest
    */
    public function setQuery($val)
    {
        $this->_propDict["query"] = $val;
         return $this;
    }
    /**
    * Gets the size
    *
    * @return int The size
    */
    public function getSize()
    {
        if (array_key_exists("size", $this->_propDict)) {
            return $this->_propDict["size"];
        } else {
            return null;
        }
    }

    /**
    * Sets the size
    *
    * @param int $val The value of the size
    *
    * @return SearchRequest
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = $val;
        return $this;
    }
}
