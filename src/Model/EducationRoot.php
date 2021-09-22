<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationRoot File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* EducationRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationRoot implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;
    
    /**
    * Construct a new EducationRoot
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
        if (!is_array($propDict)) {
           $propDict = array();
        }
        $this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the EducationRoot
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    

     /** 
     * Gets the classes
     *
     * @return EducationClass[]|null The classes
     */
    public function getClasses()
    {
        if (array_key_exists('classes', $this->_propDict) && !is_null($this->_propDict['classes'])) {
            $classes = [];
            if (count($this->_propDict['classes']) > 0 && is_a($this->_propDict['classes'][0], 'EducationClass')) {
                return $this->_propDict['classes'];
            }
            foreach ($this->_propDict['classes'] as $singleValue) {
                $classes []= new EducationClass($singleValue);
            }
            $this->_propDict['classes'] = $classes;
            return $this->_propDict['classes'];
        }
        return null;
    }
    
    /** 
    * Sets the classes
    *
    * @param EducationClass[] $val The classes
    *
    * @return EducationRoot
    */
    public function setClasses($val)
    {
        $this->_propDict["classes"] = $val;
        return $this;
    }
    
    /**
    * Gets the me
    *
    * @return EducationUser|null The me
    */
    public function getMe()
    {
        if (array_key_exists("me", $this->_propDict) && !is_null($this->_propDict["me"])) {
            if (is_a($this->_propDict["me"], "\Microsoft\Graph\Model\EducationUser")) {
                return $this->_propDict["me"];
            } else {
                $this->_propDict["me"] = new EducationUser($this->_propDict["me"]);
                return $this->_propDict["me"];
            }
        }
        return null;
    }
    
    /**
    * Sets the me
    *
    * @param EducationUser $val The me
    *
    * @return EducationRoot
    */
    public function setMe($val)
    {
        $this->_propDict["me"] = $val;
        return $this;
    }
    

     /** 
     * Gets the schools
     *
     * @return EducationSchool[]|null The schools
     */
    public function getSchools()
    {
        if (array_key_exists('schools', $this->_propDict) && !is_null($this->_propDict['schools'])) {
            $schools = [];
            if (count($this->_propDict['schools']) > 0 && is_a($this->_propDict['schools'][0], 'EducationSchool')) {
                return $this->_propDict['schools'];
            }
            foreach ($this->_propDict['schools'] as $singleValue) {
                $schools []= new EducationSchool($singleValue);
            }
            $this->_propDict['schools'] = $schools;
            return $this->_propDict['schools'];
        }
        return null;
    }
    
    /** 
    * Sets the schools
    *
    * @param EducationSchool[] $val The schools
    *
    * @return EducationRoot
    */
    public function setSchools($val)
    {
        $this->_propDict["schools"] = $val;
        return $this;
    }
    

     /** 
     * Gets the users
     *
     * @return EducationUser[]|null The users
     */
    public function getUsers()
    {
        if (array_key_exists('users', $this->_propDict) && !is_null($this->_propDict['users'])) {
            $users = [];
            if (count($this->_propDict['users']) > 0 && is_a($this->_propDict['users'][0], 'EducationUser')) {
                return $this->_propDict['users'];
            }
            foreach ($this->_propDict['users'] as $singleValue) {
                $users []= new EducationUser($singleValue);
            }
            $this->_propDict['users'] = $users;
            return $this->_propDict['users'];
        }
        return null;
    }
    
    /** 
    * Sets the users
    *
    * @param EducationUser[] $val The users
    *
    * @return EducationRoot
    */
    public function setUsers($val)
    {
        $this->_propDict["users"] = $val;
        return $this;
    }
    
    /**
    * Gets the ODataType
    *
    * @return string|null The ODataType
    */
    public function getODataType()
    {
        if (array_key_exists('@odata.type', $this->_propDict)) {
            return $this->_propDict["@odata.type"];
        }
        return null;
    }
    
    /**
    * Sets the ODataType
    *
    * @param string $val The ODataType
    *
    * @return EducationRoot
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }
    
    /**
    * Serializes the object by property array
    * Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, '\DateTime')) {
                $serializableProperties[$property] = $val->format(\DateTimeInterface::RFC3339);
            } else if (is_a($val, '\Microsoft\Graph\Core\Enum')) {
                $serializableProperties[$property] = $val->value();
            } else if (is_array($val)) {
                $values = [];
                if (count($val) > 0 && is_a($val[0], '\DateTime')) {
                   foreach ($values as $propertyValue) {
                       $values []= $propertyValue->format(\DateTimeInterface::RFC3339);
                   }
                } else if(count > 0 && is_a($val[0], '\Microsoft\Graph\Core\Enum')) {
                    foreach ($values as $propertyValue) {
                       $values []= $propertyValue->value();
                   }
                }
                $serializableProperties[$property] = $values;
            }
        }
        return $serializableProperties;
    }
}
