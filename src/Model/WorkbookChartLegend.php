<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartLegend File
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
* WorkbookChartLegend class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WorkbookChartLegend extends Entity
{
    /**
    * Gets the overlay
    *
    * @return bool The overlay
    */
    public function getOverlay()
    {
        if (array_key_exists("overlay", $this->_propDict)) {
            return $this->_propDict["overlay"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the overlay
    *
    * @param bool $val The overlay
    *
    * @return WorkbookChartLegend
    */
    public function setOverlay($val)
    {
        $this->_propDict["overlay"] = boolval($val);
        return $this;
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
    * @return WorkbookChartLegend
    */
    public function setPosition($val)
    {
        $this->_propDict["position"] = $val;
        return $this;
    }
    
    /**
    * Gets the visible
    *
    * @return bool The visible
    */
    public function getVisible()
    {
        if (array_key_exists("visible", $this->_propDict)) {
            return $this->_propDict["visible"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the visible
    *
    * @param bool $val The visible
    *
    * @return WorkbookChartLegend
    */
    public function setVisible($val)
    {
        $this->_propDict["visible"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the format
    *
    * @return WorkbookChartLegendFormat The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            if (is_a($this->_propDict["format"], "Microsoft\Graph\Model\WorkbookChartLegendFormat")) {
                return $this->_propDict["format"];
            } else {
                $this->_propDict["format"] = new WorkbookChartLegendFormat($this->_propDict["format"]);
                return $this->_propDict["format"];
            }
        }
        return null;
    }
    
    /**
    * Sets the format
    *
    * @param WorkbookChartLegendFormat $val The format
    *
    * @return WorkbookChartLegend
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }
    
}