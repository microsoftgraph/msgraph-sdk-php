<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchBucket File
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
* SearchBucket class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SearchBucket extends Entity
{
    /**
    * Gets the aggregationFilterToken
    *
    * @return string The aggregationFilterToken
    */
    public function getAggregationFilterToken()
    {
        if (array_key_exists("aggregationFilterToken", $this->_propDict)) {
            return $this->_propDict["aggregationFilterToken"];
        } else {
            return null;
        }
    }

    /**
    * Sets the aggregationFilterToken
    *
    * @param string $val The value of the aggregationFilterToken
    *
    * @return SearchBucket
    */
    public function setAggregationFilterToken($val)
    {
        $this->_propDict["aggregationFilterToken"] = $val;
        return $this;
    }
    /**
    * Gets the count
    *
    * @return int The count
    */
    public function getCount()
    {
        if (array_key_exists("count", $this->_propDict)) {
            return $this->_propDict["count"];
        } else {
            return null;
        }
    }

    /**
    * Sets the count
    *
    * @param int $val The value of the count
    *
    * @return SearchBucket
    */
    public function setCount($val)
    {
        $this->_propDict["count"] = $val;
        return $this;
    }
    /**
    * Gets the key
    *
    * @return string The key
    */
    public function getKey()
    {
        if (array_key_exists("key", $this->_propDict)) {
            return $this->_propDict["key"];
        } else {
            return null;
        }
    }

    /**
    * Sets the key
    *
    * @param string $val The value of the key
    *
    * @return SearchBucket
    */
    public function setKey($val)
    {
        $this->_propDict["key"] = $val;
        return $this;
    }
}
