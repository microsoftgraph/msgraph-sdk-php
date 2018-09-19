<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookRangeBorder File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* WorkbookRangeBorder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WorkbookRangeBorder extends Entity
{
    /**
    * Gets the color
    *
    * @return string The color
    */
    public function getColor()
    {
        if (array_key_exists("color", $this->_propDict)) {
            return $this->_propDict["color"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the color
    *
    * @param string $val The color
    *
    * @return WorkbookRangeBorder
    */
    public function setColor($val)
    {
        $this->_propDict["color"] = $val;
        return $this;
    }
    
    /**
    * Gets the sideIndex
    *
    * @return string The sideIndex
    */
    public function getSideIndex()
    {
        if (array_key_exists("sideIndex", $this->_propDict)) {
            return $this->_propDict["sideIndex"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sideIndex
    *
    * @param string $val The sideIndex
    *
    * @return WorkbookRangeBorder
    */
    public function setSideIndex($val)
    {
        $this->_propDict["sideIndex"] = $val;
        return $this;
    }
    
    /**
    * Gets the style
    *
    * @return string The style
    */
    public function getStyle()
    {
        if (array_key_exists("style", $this->_propDict)) {
            return $this->_propDict["style"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the style
    *
    * @param string $val The style
    *
    * @return WorkbookRangeBorder
    */
    public function setStyle($val)
    {
        $this->_propDict["style"] = $val;
        return $this;
    }
    
    /**
    * Gets the weight
    *
    * @return string The weight
    */
    public function getWeight()
    {
        if (array_key_exists("weight", $this->_propDict)) {
            return $this->_propDict["weight"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the weight
    *
    * @param string $val The weight
    *
    * @return WorkbookRangeBorder
    */
    public function setWeight($val)
    {
        $this->_propDict["weight"] = $val;
        return $this;
    }
    
}