<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookFunctionResult File
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
* WorkbookFunctionResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookFunctionResult extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new WorkbookFunctionResult
    *
    * @param array $propDict A list of properties to set
    *
    * @return WorkbookFunctionResult
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the WorkbookFunctionResult
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the error
    *
    * @return string The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            return $this->_propDict["error"];
        } else {
            return null;
        }
    }

    /**
    * Sets the error
    *
    * @param string $val The error
    *
    * @return WorkbookFunctionResult
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
        return $this;
    }

    /**
    * Gets the value
    *
    * @return string The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    *
    * @param string $val The value
    *
    * @return WorkbookFunctionResult
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}