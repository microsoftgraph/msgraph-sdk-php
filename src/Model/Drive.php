<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Drive File
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
* Drive class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Drive extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new Drive
    *
    * @param array $propDict A list of properties to set
    *
    * @return Drive
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the Drive
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the driveType
    *
    * @return string The driveType
    */
    public function getDriveType()
    {
        if (array_key_exists("driveType", $this->_propDict)) {
            return $this->_propDict["driveType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the driveType
    *
    * @param string $val The driveType
    *
    * @return Drive
    */
    public function setDriveType($val)
    {
        $this->_propDict["driveType"] = $val;
        return $this;
    }

    /**
    * Gets the owner
    *
    * @return IdentitySet The owner
    */
    public function getOwner()
    {
        if (array_key_exists("owner", $this->_propDict)) {
            if (is_a($this->_propDict["owner"], "IdentitySet")) {
                return $this->_propDict["owner"];
            } else {
                $this->_propDict["owner"] = new IdentitySet($this->_propDict["owner"]);
                return $this->_propDict["owner"];
            }
        }
        return null;
    }

    /**
    * Sets the owner
    *
    * @param string $val The owner
    *
    * @return Drive
    */
    public function setOwner($val)
    {
        $this->_propDict["owner"] = $val;
        return $this;
    }

    /**
    * Gets the quota
    *
    * @return Quota The quota
    */
    public function getQuota()
    {
        if (array_key_exists("quota", $this->_propDict)) {
            if (is_a($this->_propDict["quota"], "Quota")) {
                return $this->_propDict["quota"];
            } else {
                $this->_propDict["quota"] = new Quota($this->_propDict["quota"]);
                return $this->_propDict["quota"];
            }
        }
        return null;
    }

    /**
    * Sets the quota
    *
    * @param string $val The quota
    *
    * @return Drive
    */
    public function setQuota($val)
    {
        $this->_propDict["quota"] = $val;
        return $this;
    }

    /** 
    * Gets the items
    *
    * @return array The items
    */
    public function getItems()
    {
        if (array_key_exists("items", $this->_propDict)) {
           return $this->_propDict["items"];
        } else {
            return null;
        }
    }
	
    /** 
    * Sets the items
    *
    * @param string $val The items
    *
    * @return Drive
    */
    public function setItems($val)
    {
		$this->_propDict["items"] = $val;
        return $this;
    }


    /** 
    * Gets the special
    *
    * @return array The special
    */
    public function getSpecial()
    {
        if (array_key_exists("special", $this->_propDict)) {
           return $this->_propDict["special"];
        } else {
            return null;
        }
    }
	
    /** 
    * Sets the special
    *
    * @param string $val The special
    *
    * @return Drive
    */
    public function setSpecial($val)
    {
		$this->_propDict["special"] = $val;
        return $this;
    }


    /**
    * Gets the root
    *
    * @return DriveItem The root
    */
    public function getRoot()
    {
        if (array_key_exists("root", $this->_propDict)) {
            if (is_a($this->_propDict["root"], "DriveItem")) {
                return $this->_propDict["root"];
            } else {
                $this->_propDict["root"] = new DriveItem($this->_propDict["root"]);
                return $this->_propDict["root"];
            }
        }
        return null;
    }

    /**
    * Sets the root
    *
    * @param string $val The root
    *
    * @return Drive
    */
    public function setRoot($val)
    {
        $this->_propDict["root"] = $val;
        return $this;
    }
}