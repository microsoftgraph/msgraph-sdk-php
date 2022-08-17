<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchAggregation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* SearchAggregation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SearchAggregation extends Entity
{

    /**
    * Gets the buckets
    *
    * @return SearchBucket|null The buckets
    */
    public function getBuckets()
    {
        if (array_key_exists("buckets", $this->_propDict)) {
            if (is_a($this->_propDict["buckets"], "\Microsoft\Graph\Model\SearchBucket") || is_null($this->_propDict["buckets"])) {
                return $this->_propDict["buckets"];
            } else {
                $this->_propDict["buckets"] = new SearchBucket($this->_propDict["buckets"]);
                return $this->_propDict["buckets"];
            }
        }
        return null;
    }

    /**
    * Sets the buckets
    *
    * @param SearchBucket $val The value to assign to the buckets
    *
    * @return SearchAggregation The SearchAggregation
    */
    public function setBuckets($val)
    {
        $this->_propDict["buckets"] = $val;
         return $this;
    }
    /**
    * Gets the field
    *
    * @return string|null The field
    */
    public function getField()
    {
        if (array_key_exists("field", $this->_propDict)) {
            return $this->_propDict["field"];
        } else {
            return null;
        }
    }

    /**
    * Sets the field
    *
    * @param string $val The value of the field
    *
    * @return SearchAggregation
    */
    public function setField($val)
    {
        $this->_propDict["field"] = $val;
        return $this;
    }
}
