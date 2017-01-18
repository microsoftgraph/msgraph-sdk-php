<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookApplication File
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
* WorkbookApplication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookApplication extends Entity
{
    /**
    * Gets the property dictionary of the WorkbookApplication
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the calculationMode
    *
    * @return string The calculationMode
    */
    public function getCalculationMode()
    {
        if (array_key_exists("calculationMode", $this->_propDict)) {
            return $this->_propDict["calculationMode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the calculationMode
    *
    * @param string $val The calculationMode
    *
    * @return WorkbookApplication
    */
    public function setCalculationMode($val)
    {
        $this->_propDict["calculationMode"] = $val;
        return $this;
    }
}