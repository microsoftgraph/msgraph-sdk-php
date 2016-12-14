<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Quota File
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
* Quota class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Quota extends Entity
{
    /**
    * The array of properties available 
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    /**
    * Quota constructor
    *
    * @param array $propDict List of properties to set
    * Defaults to an empty array
    *
    * @return Quota
    */
    public function __construct($propDict=array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

	/**
    * Gets the property dictionary of the Quota
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the deleted
    *
    * @return int The deleted
    */
    public function getDeleted()
    {
        if (array_key_exists("deleted", $this->_propDict)) {
            return $this->_propDict["deleted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deleted
    *
    * @param int $val The value of the deleted
    *
    * @return Quota
    */
    public function setDeleted($val)
    {
        $this->_propDict["deleted"] = $val;
        return $this;
    }
    
    /**
    * Gets the remaining
    *
    * @return int The remaining
    */
    public function getRemaining()
    {
        if (array_key_exists("remaining", $this->_propDict)) {
            return $this->_propDict["remaining"];
        } else {
            return null;
        }
    }

    /**
    * Sets the remaining
    *
    * @param int $val The value of the remaining
    *
    * @return Quota
    */
    public function setRemaining($val)
    {
        $this->_propDict["remaining"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    *
    * @return string The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            return $this->_propDict["state"];
        } else {
            return null;
        }
    }

    /**
    * Sets the state
    *
    * @param string $val The value of the state
    *
    * @return Quota
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the total
    *
    * @return int The total
    */
    public function getTotal()
    {
        if (array_key_exists("total", $this->_propDict)) {
            return $this->_propDict["total"];
        } else {
            return null;
        }
    }

    /**
    * Sets the total
    *
    * @param int $val The value of the total
    *
    * @return Quota
    */
    public function setTotal($val)
    {
        $this->_propDict["total"] = $val;
        return $this;
    }
    
    /**
    * Gets the used
    *
    * @return int The used
    */
    public function getUsed()
    {
        if (array_key_exists("used", $this->_propDict)) {
            return $this->_propDict["used"];
        } else {
            return null;
        }
    }

    /**
    * Sets the used
    *
    * @param int $val The value of the used
    *
    * @return Quota
    */
    public function setUsed($val)
    {
        $this->_propDict["used"] = $val;
        return $this;
    }
}
