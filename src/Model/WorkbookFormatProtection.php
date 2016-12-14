<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookFormatProtection File
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
* WorkbookFormatProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookFormatProtection extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new WorkbookFormatProtection
    *
    * @param array $propDict A list of properties to set
    *
    * @return WorkbookFormatProtection
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the WorkbookFormatProtection
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the formulaHidden
    *
    * @return bool The formulaHidden
    */
    public function getFormulaHidden()
    {
        if (array_key_exists("formulaHidden", $this->_propDict)) {
            return $this->_propDict["formulaHidden"];
        } else {
            return null;
        }
    }

    /**
    * Sets the formulaHidden
    *
    * @param bool $val The formulaHidden
    *
    * @return WorkbookFormatProtection
    */
    public function setFormulaHidden($val)
    {
        $this->_propDict["formulaHidden"] = boolval($val);
        return $this;
    }

    /**
    * Gets the locked
    *
    * @return bool The locked
    */
    public function getLocked()
    {
        if (array_key_exists("locked", $this->_propDict)) {
            return $this->_propDict["locked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the locked
    *
    * @param bool $val The locked
    *
    * @return WorkbookFormatProtection
    */
    public function setLocked($val)
    {
        $this->_propDict["locked"] = boolval($val);
        return $this;
    }
}