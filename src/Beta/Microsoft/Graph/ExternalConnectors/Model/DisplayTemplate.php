<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DisplayTemplate File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ExternalConnectors\Model;
/**
* DisplayTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DisplayTemplate extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the id
    *
    * @return string|null The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return DisplayTemplate
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the layout
    *
    * @return string|null The layout
    */
    public function getLayout()
    {
        if (array_key_exists("layout", $this->_propDict)) {
            return $this->_propDict["layout"];
        } else {
            return null;
        }
    }

    /**
    * Sets the layout
    *
    * @param string $val The value of the layout
    *
    * @return DisplayTemplate
    */
    public function setLayout($val)
    {
        $this->_propDict["layout"] = $val;
        return $this;
    }
    /**
    * Gets the priority
    *
    * @return int|null The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the priority
    *
    * @param int $val The value of the priority
    *
    * @return DisplayTemplate
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = $val;
        return $this;
    }

    /**
    * Gets the rules
    *
    * @return PropertyRule|null The rules
    */
    public function getRules()
    {
        if (array_key_exists("rules", $this->_propDict)) {
            if (is_a($this->_propDict["rules"], "\Beta\Microsoft\Graph\ExternalConnectors\Model\PropertyRule") || is_null($this->_propDict["rules"])) {
                return $this->_propDict["rules"];
            } else {
                $this->_propDict["rules"] = new PropertyRule($this->_propDict["rules"]);
                return $this->_propDict["rules"];
            }
        }
        return null;
    }

    /**
    * Sets the rules
    *
    * @param PropertyRule $val The value to assign to the rules
    *
    * @return DisplayTemplate The DisplayTemplate
    */
    public function setRules($val)
    {
        $this->_propDict["rules"] = $val;
         return $this;
    }
}
