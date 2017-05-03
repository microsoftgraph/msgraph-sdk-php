<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartAxisTitle File
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
* WorkbookChartAxisTitle class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookChartAxisTitle extends Entity
{
    /**
    * Gets the text
    *
    * @return string The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            return $this->_propDict["text"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the text
    *
    * @param string $val The text
    *
    * @return WorkbookChartAxisTitle
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
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
    * @return WorkbookChartAxisTitle
    */
    public function setVisible($val)
    {
        $this->_propDict["visible"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the format
    *
    * @return WorkbookChartAxisTitleFormat The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            if (is_a($this->_propDict["format"], "Microsoft\Graph\Model\WorkbookChartAxisTitleFormat")) {
                return $this->_propDict["format"];
            } else {
                $this->_propDict["format"] = new WorkbookChartAxisTitleFormat($this->_propDict["format"]);
                return $this->_propDict["format"];
            }
        }
        return null;
    }
    
    /**
    * Sets the format
    *
    * @param WorkbookChartAxisTitleFormat $val The format
    *
    * @return WorkbookChartAxisTitle
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }
    
}