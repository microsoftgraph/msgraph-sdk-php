<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartDataLabels File
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
* WorkbookChartDataLabels class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookChartDataLabels extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new WorkbookChartDataLabels
    *
    * @param array $propDict A list of properties to set
    *
    * @return WorkbookChartDataLabels
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the WorkbookChartDataLabels
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the position
    *
    * @return string The position
    */
    public function getPosition()
    {
        if (array_key_exists("position", $this->_propDict)) {
            return $this->_propDict["position"];
        } else {
            return null;
        }
    }

    /**
    * Sets the position
    *
    * @param string $val The position
    *
    * @return WorkbookChartDataLabels
    */
    public function setPosition($val)
    {
        $this->_propDict["position"] = $val;
        return $this;
    }

    /**
    * Gets the separator
    *
    * @return string The separator
    */
    public function getSeparator()
    {
        if (array_key_exists("separator", $this->_propDict)) {
            return $this->_propDict["separator"];
        } else {
            return null;
        }
    }

    /**
    * Sets the separator
    *
    * @param string $val The separator
    *
    * @return WorkbookChartDataLabels
    */
    public function setSeparator($val)
    {
        $this->_propDict["separator"] = $val;
        return $this;
    }

    /**
    * Gets the showBubbleSize
    *
    * @return bool The showBubbleSize
    */
    public function getShowBubbleSize()
    {
        if (array_key_exists("showBubbleSize", $this->_propDict)) {
            return $this->_propDict["showBubbleSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showBubbleSize
    *
    * @param bool $val The showBubbleSize
    *
    * @return WorkbookChartDataLabels
    */
    public function setShowBubbleSize($val)
    {
        $this->_propDict["showBubbleSize"] = boolval($val);
        return $this;
    }

    /**
    * Gets the showCategoryName
    *
    * @return bool The showCategoryName
    */
    public function getShowCategoryName()
    {
        if (array_key_exists("showCategoryName", $this->_propDict)) {
            return $this->_propDict["showCategoryName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showCategoryName
    *
    * @param bool $val The showCategoryName
    *
    * @return WorkbookChartDataLabels
    */
    public function setShowCategoryName($val)
    {
        $this->_propDict["showCategoryName"] = boolval($val);
        return $this;
    }

    /**
    * Gets the showLegendKey
    *
    * @return bool The showLegendKey
    */
    public function getShowLegendKey()
    {
        if (array_key_exists("showLegendKey", $this->_propDict)) {
            return $this->_propDict["showLegendKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showLegendKey
    *
    * @param bool $val The showLegendKey
    *
    * @return WorkbookChartDataLabels
    */
    public function setShowLegendKey($val)
    {
        $this->_propDict["showLegendKey"] = boolval($val);
        return $this;
    }

    /**
    * Gets the showPercentage
    *
    * @return bool The showPercentage
    */
    public function getShowPercentage()
    {
        if (array_key_exists("showPercentage", $this->_propDict)) {
            return $this->_propDict["showPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showPercentage
    *
    * @param bool $val The showPercentage
    *
    * @return WorkbookChartDataLabels
    */
    public function setShowPercentage($val)
    {
        $this->_propDict["showPercentage"] = boolval($val);
        return $this;
    }

    /**
    * Gets the showSeriesName
    *
    * @return bool The showSeriesName
    */
    public function getShowSeriesName()
    {
        if (array_key_exists("showSeriesName", $this->_propDict)) {
            return $this->_propDict["showSeriesName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showSeriesName
    *
    * @param bool $val The showSeriesName
    *
    * @return WorkbookChartDataLabels
    */
    public function setShowSeriesName($val)
    {
        $this->_propDict["showSeriesName"] = boolval($val);
        return $this;
    }

    /**
    * Gets the showValue
    *
    * @return bool The showValue
    */
    public function getShowValue()
    {
        if (array_key_exists("showValue", $this->_propDict)) {
            return $this->_propDict["showValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showValue
    *
    * @param bool $val The showValue
    *
    * @return WorkbookChartDataLabels
    */
    public function setShowValue($val)
    {
        $this->_propDict["showValue"] = boolval($val);
        return $this;
    }

    /**
    * Gets the format
    *
    * @return WorkbookChartDataLabelFormat The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            if (is_a($this->_propDict["format"], "WorkbookChartDataLabelFormat")) {
                return $this->_propDict["format"];
            } else {
                $this->_propDict["format"] = new WorkbookChartDataLabelFormat($this->_propDict["format"]);
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
    * @return WorkbookChartDataLabels
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }
}