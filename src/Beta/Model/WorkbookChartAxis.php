<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartAxis File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* WorkbookChartAxis class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookChartAxis extends Entity
{
    /**
    * Gets the majorUnit
    *
    * @return string The majorUnit
    */
    public function getMajorUnit()
    {
        if (array_key_exists("majorUnit", $this->_propDict)) {
            return $this->_propDict["majorUnit"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the majorUnit
    *
    * @param string $val The majorUnit
    *
    * @return WorkbookChartAxis
    */
    public function setMajorUnit($val)
    {
        $this->_propDict["majorUnit"] = $val;
        return $this;
    }
    
    /**
    * Gets the maximum
    *
    * @return string The maximum
    */
    public function getMaximum()
    {
        if (array_key_exists("maximum", $this->_propDict)) {
            return $this->_propDict["maximum"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maximum
    *
    * @param string $val The maximum
    *
    * @return WorkbookChartAxis
    */
    public function setMaximum($val)
    {
        $this->_propDict["maximum"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimum
    *
    * @return string The minimum
    */
    public function getMinimum()
    {
        if (array_key_exists("minimum", $this->_propDict)) {
            return $this->_propDict["minimum"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimum
    *
    * @param string $val The minimum
    *
    * @return WorkbookChartAxis
    */
    public function setMinimum($val)
    {
        $this->_propDict["minimum"] = $val;
        return $this;
    }
    
    /**
    * Gets the minorUnit
    *
    * @return string The minorUnit
    */
    public function getMinorUnit()
    {
        if (array_key_exists("minorUnit", $this->_propDict)) {
            return $this->_propDict["minorUnit"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minorUnit
    *
    * @param string $val The minorUnit
    *
    * @return WorkbookChartAxis
    */
    public function setMinorUnit($val)
    {
        $this->_propDict["minorUnit"] = $val;
        return $this;
    }
    
    /**
    * Gets the format
    *
    * @return WorkbookChartAxisFormat The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            if (is_a($this->_propDict["format"], "Microsoft\Graph\Model\WorkbookChartAxisFormat")) {
                return $this->_propDict["format"];
            } else {
                $this->_propDict["format"] = new WorkbookChartAxisFormat($this->_propDict["format"]);
                return $this->_propDict["format"];
            }
        }
        return null;
    }
    
    /**
    * Sets the format
    *
    * @param WorkbookChartAxisFormat $val The format
    *
    * @return WorkbookChartAxis
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }
    
    /**
    * Gets the majorGridlines
    *
    * @return WorkbookChartGridlines The majorGridlines
    */
    public function getMajorGridlines()
    {
        if (array_key_exists("majorGridlines", $this->_propDict)) {
            if (is_a($this->_propDict["majorGridlines"], "Microsoft\Graph\Model\WorkbookChartGridlines")) {
                return $this->_propDict["majorGridlines"];
            } else {
                $this->_propDict["majorGridlines"] = new WorkbookChartGridlines($this->_propDict["majorGridlines"]);
                return $this->_propDict["majorGridlines"];
            }
        }
        return null;
    }
    
    /**
    * Sets the majorGridlines
    *
    * @param WorkbookChartGridlines $val The majorGridlines
    *
    * @return WorkbookChartAxis
    */
    public function setMajorGridlines($val)
    {
        $this->_propDict["majorGridlines"] = $val;
        return $this;
    }
    
    /**
    * Gets the minorGridlines
    *
    * @return WorkbookChartGridlines The minorGridlines
    */
    public function getMinorGridlines()
    {
        if (array_key_exists("minorGridlines", $this->_propDict)) {
            if (is_a($this->_propDict["minorGridlines"], "Microsoft\Graph\Model\WorkbookChartGridlines")) {
                return $this->_propDict["minorGridlines"];
            } else {
                $this->_propDict["minorGridlines"] = new WorkbookChartGridlines($this->_propDict["minorGridlines"]);
                return $this->_propDict["minorGridlines"];
            }
        }
        return null;
    }
    
    /**
    * Sets the minorGridlines
    *
    * @param WorkbookChartGridlines $val The minorGridlines
    *
    * @return WorkbookChartAxis
    */
    public function setMinorGridlines($val)
    {
        $this->_propDict["minorGridlines"] = $val;
        return $this;
    }
    
    /**
    * Gets the title
    *
    * @return WorkbookChartAxisTitle The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            if (is_a($this->_propDict["title"], "Microsoft\Graph\Model\WorkbookChartAxisTitle")) {
                return $this->_propDict["title"];
            } else {
                $this->_propDict["title"] = new WorkbookChartAxisTitle($this->_propDict["title"]);
                return $this->_propDict["title"];
            }
        }
        return null;
    }
    
    /**
    * Sets the title
    *
    * @param WorkbookChartAxisTitle $val The title
    *
    * @return WorkbookChartAxis
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    
}