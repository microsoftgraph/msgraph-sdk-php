<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CalculatedColumn File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* CalculatedColumn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class CalculatedColumn extends Entity
{
    /**
    * Gets the format
    *
    * @return string The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            return $this->_propDict["format"];
        } else {
            return null;
        }
    }

    /**
    * Sets the format
    *
    * @param string $val The value of the format
    *
    * @return CalculatedColumn
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }
    /**
    * Gets the formula
    *
    * @return string The formula
    */
    public function getFormula()
    {
        if (array_key_exists("formula", $this->_propDict)) {
            return $this->_propDict["formula"];
        } else {
            return null;
        }
    }

    /**
    * Sets the formula
    *
    * @param string $val The value of the formula
    *
    * @return CalculatedColumn
    */
    public function setFormula($val)
    {
        $this->_propDict["formula"] = $val;
        return $this;
    }
    /**
    * Gets the outputType
    *
    * @return string The outputType
    */
    public function getOutputType()
    {
        if (array_key_exists("outputType", $this->_propDict)) {
            return $this->_propDict["outputType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the outputType
    *
    * @param string $val The value of the outputType
    *
    * @return CalculatedColumn
    */
    public function setOutputType($val)
    {
        $this->_propDict["outputType"] = $val;
        return $this;
    }
}
