<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookSessionInfo File
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
* WorkbookSessionInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookSessionInfo extends Entity
{
    /**
    * The array of properties available 
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    /**
    * WorkbookSessionInfo constructor
    *
    * @param array $propDict List of properties to set
    * Defaults to an empty array
    *
    * @return WorkbookSessionInfo
    */
    public function __construct($propDict=array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

	/**
    * Gets the property dictionary of the WorkbookSessionInfo
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the id
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return WorkbookSessionInfo
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    
    /**
    * Gets the persistChanges
    *
    * @return bool The persistChanges
    */
    public function getPersistChanges()
    {
        if (array_key_exists("persistChanges", $this->_propDict)) {
            return $this->_propDict["persistChanges"];
        } else {
            return null;
        }
    }

    /**
    * Sets the persistChanges
    *
    * @param bool $val The value of the persistChanges
    *
    * @return WorkbookSessionInfo
    */
    public function setPersistChanges($val)
    {
        $this->_propDict["persist_changes"] = $val;
        return $this;
    }
}
