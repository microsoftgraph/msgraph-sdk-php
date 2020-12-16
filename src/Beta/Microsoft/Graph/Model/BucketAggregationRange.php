<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BucketAggregationRange File
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
* BucketAggregationRange class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BucketAggregationRange extends Entity
{
    /**
    * Gets the from
    *
    * @return string The from
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
    * @param string $val The value of the from
    *
    * @return BucketAggregationRange
    */
    public function setFrom($val)
    {
        $this->_propDict["from"] = $val;
        return $this;
    }
    /**
    * Gets the to
    *
    * @return string The to
    */
    public function getTo()
    {
        if (array_key_exists("to", $this->_propDict)) {
            return $this->_propDict["to"];
        } else {
            return null;
        }
    }

    /**
    * Sets the to
    *
    * @param string $val The value of the to
    *
    * @return BucketAggregationRange
    */
    public function setTo($val)
    {
        $this->_propDict["to"] = $val;
        return $this;
    }
}
