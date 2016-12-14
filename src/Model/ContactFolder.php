<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContactFolder File
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
* ContactFolder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ContactFolder extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new ContactFolder
    *
    * @param array $propDict A list of properties to set
    *
    * @return ContactFolder
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the ContactFolder
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the parentFolderId
    *
    * @return string The parentFolderId
    */
    public function getParentFolderId()
    {
        if (array_key_exists("parentFolderId", $this->_propDict)) {
            return $this->_propDict["parentFolderId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the parentFolderId
    *
    * @param string $val The parentFolderId
    *
    * @return ContactFolder
    */
    public function setParentFolderId($val)
    {
        $this->_propDict["parentFolderId"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return ContactFolder
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /** 
    * Gets the contacts
    *
    * @return array The contacts
    */
    public function getContacts()
    {
        if (array_key_exists("contacts", $this->_propDict)) {
           return $this->_propDict["contacts"];
        } else {
            return null;
        }
    }
	
    /** 
    * Sets the contacts
    *
    * @param string $val The contacts
    *
    * @return ContactFolder
    */
    public function setContacts($val)
    {
		$this->_propDict["contacts"] = $val;
        return $this;
    }


    /** 
    * Gets the childFolders
    *
    * @return array The childFolders
    */
    public function getChildFolders()
    {
        if (array_key_exists("childFolders", $this->_propDict)) {
           return $this->_propDict["childFolders"];
        } else {
            return null;
        }
    }
	
    /** 
    * Sets the childFolders
    *
    * @param string $val The childFolders
    *
    * @return ContactFolder
    */
    public function setChildFolders($val)
    {
		$this->_propDict["childFolders"] = $val;
        return $this;
    }


    /** 
    * Gets the singleValueExtendedProperties
    *
    * @return array The singleValueExtendedProperties
    */
    public function getSingleValueExtendedProperties()
    {
        if (array_key_exists("singleValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["singleValueExtendedProperties"];
        } else {
            return null;
        }
    }
	
    /** 
    * Sets the singleValueExtendedProperties
    *
    * @param string $val The singleValueExtendedProperties
    *
    * @return ContactFolder
    */
    public function setSingleValueExtendedProperties($val)
    {
		$this->_propDict["singleValueExtendedProperties"] = $val;
        return $this;
    }


    /** 
    * Gets the multiValueExtendedProperties
    *
    * @return array The multiValueExtendedProperties
    */
    public function getMultiValueExtendedProperties()
    {
        if (array_key_exists("multiValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["multiValueExtendedProperties"];
        } else {
            return null;
        }
    }
	
    /** 
    * Sets the multiValueExtendedProperties
    *
    * @param string $val The multiValueExtendedProperties
    *
    * @return ContactFolder
    */
    public function setMultiValueExtendedProperties($val)
    {
		$this->_propDict["multiValueExtendedProperties"] = $val;
        return $this;
    }

}