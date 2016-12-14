<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartGridlinesFormat File
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
* WorkbookChartGridlinesFormat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookChartGridlinesFormat extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new WorkbookChartGridlinesFormat
    *
    * @param array $propDict A list of properties to set
    *
    * @return WorkbookChartGridlinesFormat
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the WorkbookChartGridlinesFormat
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the line
    *
    * @return WorkbookChartLineFormat The line
    */
    public function getLine()
    {
        if (array_key_exists("line", $this->_propDict)) {
            if (is_a($this->_propDict["line"], "WorkbookChartLineFormat")) {
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
    * @param string $val The line
    *
    * @return WorkbookChartGridlinesFormat
    */
    public function setLine($val)
    {
        $this->_propDict["line"] = $val;
        return $this;
    }
}