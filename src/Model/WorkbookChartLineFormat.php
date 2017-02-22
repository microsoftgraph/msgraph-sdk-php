<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartLineFormat File
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
* WorkbookChartLineFormat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookChartLineFormat extends Entity
{
    /**
    * Gets the color
    *
    * @return string The color
    */
    public function getColor()
    {
        if (array_key_exists("color", $this->_propDict)) {
            return $this->_propDict["color"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the color
    *
    * @param string $val The color
    *
    * @return WorkbookChartLineFormat
    */
    public function setColor($val)
    {
        $this->_propDict["color"] = $val;
        return $this;
    }
    
}