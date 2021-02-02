<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AggregationOption File
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
* AggregationOption class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AggregationOption extends Entity
{

    /**
    * Gets the bucketDefinition
    *
    * @return BucketAggregationDefinition The bucketDefinition
    */
    public function getBucketDefinition()
    {
        if (array_key_exists("bucketDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["bucketDefinition"], "Beta\Microsoft\Graph\Model\BucketAggregationDefinition")) {
                return $this->_propDict["bucketDefinition"];
            } else {
                $this->_propDict["bucketDefinition"] = new BucketAggregationDefinition($this->_propDict["bucketDefinition"]);
                return $this->_propDict["bucketDefinition"];
            }
        }
        return null;
    }

    /**
    * Sets the bucketDefinition
    *
    * @param BucketAggregationDefinition $val The value to assign to the bucketDefinition
    *
    * @return AggregationOption The AggregationOption
    */
    public function setBucketDefinition($val)
    {
        $this->_propDict["bucketDefinition"] = $val;
         return $this;
    }
    /**
    * Gets the field
    *
    * @return string The field
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
    * @return AggregationOption
    */
    public function setField($val)
    {
        $this->_propDict["field"] = $val;
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
    * @return AggregationOption
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = $val;
        return $this;
    }
}
