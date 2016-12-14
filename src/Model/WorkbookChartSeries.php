<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartSeries File
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
* WorkbookChartSeries class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookChartSeries extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new WorkbookChartSeries
    *
    * @param array $propDict A list of properties to set
    *
    * @return WorkbookChartSeries
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the WorkbookChartSeries
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
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
    * @return WorkbookChartSeries
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the format
    *
    * @return WorkbookChartSeriesFormat The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            if (is_a($this->_propDict["format"], "WorkbookChartSeriesFormat")) {
                return $this->_propDict["format"];
            } else {
                $this->_propDict["format"] = new WorkbookChartSeriesFormat($this->_propDict["format"]);
                return $this->_propDict["format"];
            }
        }
        return null;
    }

    /**
    * Sets the format
    *
    * @param string $val The format
    *
    * @return WorkbookChartSeries
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }

    /** 
    * Gets the points
    *
    * @return array The points
    */
    public function getPoints()
    {
        if (array_key_exists("points", $this->_propDict)) {
           return $this->_propDict["points"];
        } else {
            return null;
        }
    }
	
    /** 
    * Sets the points
    *
    * @param string $val The points
    *
    * @return WorkbookChartSeries
    */
    public function setPoints($val)
    {
		$this->_propDict["points"] = $val;
        return $this;
    }

}