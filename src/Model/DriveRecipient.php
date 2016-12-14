<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DriveRecipient File
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
* DriveRecipient class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DriveRecipient extends Entity
{
    /**
    * The array of properties available 
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    /**
    * DriveRecipient constructor
    *
    * @param array $propDict List of properties to set
    * Defaults to an empty array
    *
    * @return DriveRecipient
    */
    public function __construct($propDict=array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

	/**
    * Gets the property dictionary of the DriveRecipient
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the email
    *
    * @return string The email
    */
    public function getEmail()
    {
        if (array_key_exists("email", $this->_propDict)) {
            return $this->_propDict["email"];
        } else {
            return null;
        }
    }

    /**
    * Sets the email
    *
    * @param string $val The value of the email
    *
    * @return DriveRecipient
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }
    
    /**
    * Gets the alias
    *
    * @return string The alias
    */
    public function getAlias()
    {
        if (array_key_exists("alias", $this->_propDict)) {
            return $this->_propDict["alias"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alias
    *
    * @param string $val The value of the alias
    *
    * @return DriveRecipient
    */
    public function setAlias($val)
    {
        $this->_propDict["alias"] = $val;
        return $this;
    }
    
    /**
    * Gets the objectId
    *
    * @return string The objectId
    */
    public function getObjectId()
    {
        if (array_key_exists("objectId", $this->_propDict)) {
            return $this->_propDict["objectId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the objectId
    *
    * @param string $val The value of the objectId
    *
    * @return DriveRecipient
    */
    public function setObjectId($val)
    {
        $this->_propDict["object_id"] = $val;
        return $this;
    }
}
