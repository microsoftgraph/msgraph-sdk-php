<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartTitleFormat File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* WorkbookChartTitleFormat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookChartTitleFormat extends Entity
{
    /**
    * Gets the fill
    * Represents the fill format of an object, which includes background formatting information. Read-only.
    *
    * @return WorkbookChartFill The fill
    */
    public function getFill()
    {
        if (array_key_exists("fill", $this->_propDict)) {
            if (is_a($this->_propDict["fill"], "Microsoft\Graph\Model\WorkbookChartFill")) {
                return $this->_propDict["fill"];
            } else {
                $this->_propDict["fill"] = new WorkbookChartFill($this->_propDict["fill"]);
                return $this->_propDict["fill"];
            }
        }
        return null;
    }
    
    /**
    * Sets the fill
    * Represents the fill format of an object, which includes background formatting information. Read-only.
    *
    * @param WorkbookChartFill $val The fill
    *
    * @return WorkbookChartTitleFormat
    */
    public function setFill($val)
    {
        $this->_propDict["fill"] = $val;
        return $this;
    }
    
    /**
    * Gets the font
    * Represents the font attributes (font name, font size, color, etc.) for the current object. Read-only.
    *
    * @return WorkbookChartFont The font
    */
    public function getFont()
    {
        if (array_key_exists("font", $this->_propDict)) {
            if (is_a($this->_propDict["font"], "Microsoft\Graph\Model\WorkbookChartFont")) {
                return $this->_propDict["font"];
            } else {
                $this->_propDict["font"] = new WorkbookChartFont($this->_propDict["font"]);
                return $this->_propDict["font"];
            }
        }
        return null;
    }
    
    /**
    * Sets the font
    * Represents the font attributes (font name, font size, color, etc.) for the current object. Read-only.
    *
    * @param WorkbookChartFont $val The font
    *
    * @return WorkbookChartTitleFormat
    */
    public function setFont($val)
    {
        $this->_propDict["font"] = $val;
        return $this;
    }
    
}