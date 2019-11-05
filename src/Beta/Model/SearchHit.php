<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchHit File
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
* SearchHit class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SearchHit extends Entity
{
    /**
    * Gets the _id
    *
    * @return string The _id
    */
    public function get_id()
    {
        if (array_key_exists("_id", $this->_propDict)) {
            return $this->_propDict["_id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the _id
    *
    * @param string $val The value of the _id
    *
    * @return SearchHit
    */
    public function set_id($val)
    {
        $this->_propDict["_id"] = $val;
        return $this;
    }
    /**
    * Gets the _score
    *
    * @return int The _score
    */
    public function get_score()
    {
        if (array_key_exists("_score", $this->_propDict)) {
            return $this->_propDict["_score"];
        } else {
            return null;
        }
    }

    /**
    * Sets the _score
    *
    * @param int $val The value of the _score
    *
    * @return SearchHit
    */
    public function set_score($val)
    {
        $this->_propDict["_score"] = $val;
        return $this;
    }
    /**
    * Gets the _sortField
    *
    * @return string The _sortField
    */
    public function get_sortField()
    {
        if (array_key_exists("_sortField", $this->_propDict)) {
            return $this->_propDict["_sortField"];
        } else {
            return null;
        }
    }

    /**
    * Sets the _sortField
    *
    * @param string $val The value of the _sortField
    *
    * @return SearchHit
    */
    public function set_sortField($val)
    {
        $this->_propDict["_sortField"] = $val;
        return $this;
    }
    /**
    * Gets the _summary
    *
    * @return string The _summary
    */
    public function get_summary()
    {
        if (array_key_exists("_summary", $this->_propDict)) {
            return $this->_propDict["_summary"];
        } else {
            return null;
        }
    }

    /**
    * Sets the _summary
    *
    * @param string $val The value of the _summary
    *
    * @return SearchHit
    */
    public function set_summary($val)
    {
        $this->_propDict["_summary"] = $val;
        return $this;
    }

    /**
    * Gets the _source
    *
    * @return Entity The _source
    */
    public function get_source()
    {
        if (array_key_exists("_source", $this->_propDict)) {
            if (is_a($this->_propDict["_source"], "Microsoft\Graph\Beta\Model\Entity")) {
                return $this->_propDict["_source"];
            } else {
                $this->_propDict["_source"] = new Entity($this->_propDict["_source"]);
                return $this->_propDict["_source"];
            }
        }
        return null;
    }

    /**
    * Sets the _source
    *
    * @param Entity $val The value to assign to the _source
    *
    * @return SearchHit The SearchHit
    */
    public function set_source($val)
    {
        $this->_propDict["_source"] = $val;
         return $this;
    }
}
