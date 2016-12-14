<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookRangeBorder File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* WorkbookRangeBorder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookRangeBorder extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new WorkbookRangeBorder
    *
    * @param array $propDict A list of properties to set
    *
    * @return WorkbookRangeBorder
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the WorkbookRangeBorder
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

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