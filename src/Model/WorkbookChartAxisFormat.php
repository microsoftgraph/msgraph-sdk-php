<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartAxisFormat File
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
* WorkbookChartAxisFormat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookChartAxisFormat extends Entity
{
    /**
    * Gets the font
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
    *
    * @param WorkbookChartFont $val The font
    *
    * @return WorkbookChartAxisFormat
    */
    public function setFont($val)
    {
        $this->_propDict["font"] = $val;
        return $this;
    }
    
    /**
    * Gets the line
    *
    * @return WorkbookChartLineFormat The line
    */
    public function getLine()
    {
        if (array_key_exists("line", $this->_propDict)) {
            if (is_a($this->_propDict["line"], "Microsoft\Graph\Model\WorkbookChartLineFormat")) {
                return $this->_propDict["line"];
            } else {
                $this->_propDict["line"] = new WorkbookChartLineFormat($this->_propDict["line"]);
                return $this->_propDict["line"];
            }
        }
        return null;
    }
    
    /**
    * Sets the line
    *
    * @param WorkbookChartLineFormat $val The line
    *
    * @return WorkbookChartAxisFormat
    */
    public function setLine($val)
    {
        $this->_propDict["line"] = $val;
        return $this;
    }
    
}