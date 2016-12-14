<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartDataLabelFormat File
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
* WorkbookChartDataLabelFormat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookChartDataLabelFormat extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new WorkbookChartDataLabelFormat
    *
    * @param array $propDict A list of properties to set
    *
    * @return WorkbookChartDataLabelFormat
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the WorkbookChartDataLabelFormat
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the fill
    *
    * @return WorkbookChartFill The fill
    */
    public function getFill()
    {
        if (array_key_exists("fill", $this->_propDict)) {
            if (is_a($this->_propDict["fill"], "WorkbookChartFill")) {
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
    *
    * @param string $val The fill
    *
    * @return WorkbookChartDataLabelFormat
    */
    public function setFill($val)
    {
        $this->_propDict["fill"] = $val;
        return $this;
    }

    /**
    * Gets the font
    *
    * @return WorkbookChartFont The font
    */
    public function getFont()
    {
        if (array_key_exists("font", $this->_propDict)) {
            if (is_a($this->_propDict["font"], "WorkbookChartFont")) {
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
    * @param string $val The font
    *
    * @return WorkbookChartDataLabelFormat
    */
    public function setFont($val)
    {
        $this->_propDict["font"] = $val;
        return $this;
    }
}