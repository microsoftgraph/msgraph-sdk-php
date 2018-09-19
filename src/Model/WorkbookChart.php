<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChart File
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
* WorkbookChart class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WorkbookChart extends Entity
{
    /**
    * Gets the height
    *
    * @return float The height
    */
    public function getHeight()
    {
        if (array_key_exists("height", $this->_propDict)) {
            return $this->_propDict["height"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the height
    *
    * @param float $val The height
    *
    * @return WorkbookChart
    */
    public function setHeight($val)
    {
        $this->_propDict["height"] = $val;
        return $this;
    }
    
    /**
    * Gets the left
    *
    * @return float The left
    */
    public function getLeft()
    {
        if (array_key_exists("left", $this->_propDict)) {
            return $this->_propDict["left"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the left
    *
    * @param float $val The left
    *
    * @return WorkbookChart
    */
    public function setLeft($val)
    {
        $this->_propDict["left"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    *
    * @param string $val The name
    *
    * @return WorkbookChart
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the top
    *
    * @return float The top
    */
    public function getTop()
    {
        if (array_key_exists("top", $this->_propDict)) {
            return $this->_propDict["top"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the top
    *
    * @param float $val The top
    *
    * @return WorkbookChart
    */
    public function setTop($val)
    {
        $this->_propDict["top"] = $val;
        return $this;
    }
    
    /**
    * Gets the width
    *
    * @return float The width
    */
    public function getWidth()
    {
        if (array_key_exists("width", $this->_propDict)) {
            return $this->_propDict["width"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the width
    *
    * @param float $val The width
    *
    * @return WorkbookChart
    */
    public function setWidth($val)
    {
        $this->_propDict["width"] = $val;
        return $this;
    }
    
    /**
    * Gets the axes
    *
    * @return WorkbookChartAxes The axes
    */
    public function getAxes()
    {
        if (array_key_exists("axes", $this->_propDict)) {
            if (is_a($this->_propDict["axes"], "Microsoft\Graph\Model\WorkbookChartAxes")) {
                return $this->_propDict["axes"];
            } else {
                $this->_propDict["axes"] = new WorkbookChartAxes($this->_propDict["axes"]);
                return $this->_propDict["axes"];
            }
        }
        return null;
    }
    
    /**
    * Sets the axes
    *
    * @param WorkbookChartAxes $val The axes
    *
    * @return WorkbookChart
    */
    public function setAxes($val)
    {
        $this->_propDict["axes"] = $val;
        return $this;
    }
    
    /**
    * Gets the dataLabels
    *
    * @return WorkbookChartDataLabels The dataLabels
    */
    public function getDataLabels()
    {
        if (array_key_exists("dataLabels", $this->_propDict)) {
            if (is_a($this->_propDict["dataLabels"], "Microsoft\Graph\Model\WorkbookChartDataLabels")) {
                return $this->_propDict["dataLabels"];
            } else {
                $this->_propDict["dataLabels"] = new WorkbookChartDataLabels($this->_propDict["dataLabels"]);
                return $this->_propDict["dataLabels"];
            }
        }
        return null;
    }
    
    /**
    * Sets the dataLabels
    *
    * @param WorkbookChartDataLabels $val The dataLabels
    *
    * @return WorkbookChart
    */
    public function setDataLabels($val)
    {
        $this->_propDict["dataLabels"] = $val;
        return $this;
    }
    
    /**
    * Gets the format
    *
    * @return WorkbookChartAreaFormat The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            if (is_a($this->_propDict["format"], "Microsoft\Graph\Model\WorkbookChartAreaFormat")) {
                return $this->_propDict["format"];
            } else {
                $this->_propDict["format"] = new WorkbookChartAreaFormat($this->_propDict["format"]);
                return $this->_propDict["format"];
            }
        }
        return null;
    }
    
    /**
    * Sets the format
    *
    * @param WorkbookChartAreaFormat $val The format
    *
    * @return WorkbookChart
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }
    
    /**
    * Gets the legend
    *
    * @return WorkbookChartLegend The legend
    */
    public function getLegend()
    {
        if (array_key_exists("legend", $this->_propDict)) {
            if (is_a($this->_propDict["legend"], "Microsoft\Graph\Model\WorkbookChartLegend")) {
                return $this->_propDict["legend"];
            } else {
                $this->_propDict["legend"] = new WorkbookChartLegend($this->_propDict["legend"]);
                return $this->_propDict["legend"];
            }
        }
        return null;
    }
    
    /**
    * Sets the legend
    *
    * @param WorkbookChartLegend $val The legend
    *
    * @return WorkbookChart
    */
    public function setLegend($val)
    {
        $this->_propDict["legend"] = $val;
        return $this;
    }
    

     /** 
     * Gets the series
     *
     * @return array The series
     */
    public function getSeries()
    {
        if (array_key_exists("series", $this->_propDict)) {
           return $this->_propDict["series"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the series
    *
    * @param WorkbookChartSeries $val The series
    *
    * @return WorkbookChart
    */
    public function setSeries($val)
    {
		$this->_propDict["series"] = $val;
        return $this;
    }
    
    /**
    * Gets the title
    *
    * @return WorkbookChartTitle The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            if (is_a($this->_propDict["title"], "Microsoft\Graph\Model\WorkbookChartTitle")) {
                return $this->_propDict["title"];
            } else {
                $this->_propDict["title"] = new WorkbookChartTitle($this->_propDict["title"]);
                return $this->_propDict["title"];
            }
        }
        return null;
    }
    
    /**
    * Sets the title
    *
    * @param WorkbookChartTitle $val The title
    *
    * @return WorkbookChart
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    
    /**
    * Gets the worksheet
    *
    * @return WorkbookWorksheet The worksheet
    */
    public function getWorksheet()
    {
        if (array_key_exists("worksheet", $this->_propDict)) {
            if (is_a($this->_propDict["worksheet"], "Microsoft\Graph\Model\WorkbookWorksheet")) {
                return $this->_propDict["worksheet"];
            } else {
                $this->_propDict["worksheet"] = new WorkbookWorksheet($this->_propDict["worksheet"]);
                return $this->_propDict["worksheet"];
            }
        }
        return null;
    }
    
    /**
    * Sets the worksheet
    *
    * @param WorkbookWorksheet $val The worksheet
    *
    * @return WorkbookChart
    */
    public function setWorksheet($val)
    {
        $this->_propDict["worksheet"] = $val;
        return $this;
    }
    
}