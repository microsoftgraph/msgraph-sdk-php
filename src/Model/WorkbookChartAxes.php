<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartAxes File
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
* WorkbookChartAxes class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookChartAxes extends Entity
{
    /**
    * Gets the categoryAxis
    *
    * @return WorkbookChartAxis The categoryAxis
    */
    public function getCategoryAxis()
    {
        if (array_key_exists("categoryAxis", $this->_propDict)) {
            if (is_a($this->_propDict["categoryAxis"], "WorkbookChartAxis")) {
                return $this->_propDict["categoryAxis"];
            } else {
                $this->_propDict["categoryAxis"] = new WorkbookChartAxis($this->_propDict["categoryAxis"]);
                return $this->_propDict["categoryAxis"];
            }
        }
        return null;
    }
    
    /**
    * Sets the categoryAxis
    *
    * @param string $val The categoryAxis
    *
    * @return WorkbookChartAxes
    */
    public function setCategoryAxis($val)
    {
        $this->_propDict["categoryAxis"] = $val;
        return $this;
    }
    
    /**
    * Gets the seriesAxis
    *
    * @return WorkbookChartAxis The seriesAxis
    */
    public function getSeriesAxis()
    {
        if (array_key_exists("seriesAxis", $this->_propDict)) {
            if (is_a($this->_propDict["seriesAxis"], "WorkbookChartAxis")) {
                return $this->_propDict["seriesAxis"];
            } else {
                $this->_propDict["seriesAxis"] = new WorkbookChartAxis($this->_propDict["seriesAxis"]);
                return $this->_propDict["seriesAxis"];
            }
        }
        return null;
    }
    
    /**
    * Sets the seriesAxis
    *
    * @param string $val The seriesAxis
    *
    * @return WorkbookChartAxes
    */
    public function setSeriesAxis($val)
    {
        $this->_propDict["seriesAxis"] = $val;
        return $this;
    }
    
    /**
    * Gets the valueAxis
    *
    * @return WorkbookChartAxis The valueAxis
    */
    public function getValueAxis()
    {
        if (array_key_exists("valueAxis", $this->_propDict)) {
            if (is_a($this->_propDict["valueAxis"], "WorkbookChartAxis")) {
                return $this->_propDict["valueAxis"];
            } else {
                $this->_propDict["valueAxis"] = new WorkbookChartAxis($this->_propDict["valueAxis"]);
                return $this->_propDict["valueAxis"];
            }
        }
        return null;
    }
    
    /**
    * Sets the valueAxis
    *
    * @param string $val The valueAxis
    *
    * @return WorkbookChartAxes
    */
    public function setValueAxis($val)
    {
        $this->_propDict["valueAxis"] = $val;
        return $this;
    }
    
}