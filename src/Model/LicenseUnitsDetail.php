<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LicenseUnitsDetail File
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
* LicenseUnitsDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class LicenseUnitsDetail extends Entity
{
    /**
    * The array of properties available 
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    /**
    * LicenseUnitsDetail constructor
    *
    * @param array $propDict List of properties to set
    * Defaults to an empty array
    *
    * @return LicenseUnitsDetail
    */
    public function __construct($propDict=array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

	/**
    * Gets the property dictionary of the LicenseUnitsDetail
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the enabled
    *
    * @return int The enabled
    */
    public function getEnabled()
    {
        if (array_key_exists("enabled", $this->_propDict)) {
            return $this->_propDict["enabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enabled
    *
    * @param int $val The value of the enabled
    *
    * @return LicenseUnitsDetail
    */
    public function setEnabled($val)
    {
        $this->_propDict["enabled"] = $val;
        return $this;
    }
    
    /**
    * Gets the suspended
    *
    * @return int The suspended
    */
    public function getSuspended()
    {
        if (array_key_exists("suspended", $this->_propDict)) {
            return $this->_propDict["suspended"];
        } else {
            return null;
        }
    }

    /**
    * Sets the suspended
    *
    * @param int $val The value of the suspended
    *
    * @return LicenseUnitsDetail
    */
    public function setSuspended($val)
    {
        $this->_propDict["suspended"] = $val;
        return $this;
    }
    
    /**
    * Gets the warning
    *
    * @return int The warning
    */
    public function getWarning()
    {
        if (array_key_exists("warning", $this->_propDict)) {
            return $this->_propDict["warning"];
        } else {
            return null;
        }
    }

    /**
    * Sets the warning
    *
    * @param int $val The value of the warning
    *
    * @return LicenseUnitsDetail
    */
    public function setWarning($val)
    {
        $this->_propDict["warning"] = $val;
        return $this;
    }
}
