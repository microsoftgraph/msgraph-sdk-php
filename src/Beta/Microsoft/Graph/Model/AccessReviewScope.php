<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewScope File
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
* AccessReviewScope class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewScope extends Entity
{
    /**
    * Gets the query
    *
    * @return string The query
    */
    public function getQuery()
    {
        if (array_key_exists("query", $this->_propDict)) {
            return $this->_propDict["query"];
        } else {
            return null;
        }
    }

    /**
    * Sets the query
    *
    * @param string $val The value of the query
    *
    * @return AccessReviewScope
    */
    public function setQuery($val)
    {
        $this->_propDict["query"] = $val;
        return $this;
    }
    /**
    * Gets the queryType
    *
    * @return string The queryType
    */
    public function getQueryType()
    {
        if (array_key_exists("queryType", $this->_propDict)) {
            return $this->_propDict["queryType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the queryType
    *
    * @param string $val The value of the queryType
    *
    * @return AccessReviewScope
    */
    public function setQueryType($val)
    {
        $this->_propDict["queryType"] = $val;
        return $this;
    }
}
