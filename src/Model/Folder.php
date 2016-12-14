<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Folder File
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
* Folder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Folder extends Entity
{
    /**
    * The array of properties available 
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    /**
    * Folder constructor
    *
    * @param array $propDict List of properties to set
    * Defaults to an empty array
    *
    * @return Folder
    */
    public function __construct($propDict=array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

	/**
    * Gets the property dictionary of the Folder
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the childCount
    *
    * @return int The childCount
    */
    public function getChildCount()
    {
        if (array_key_exists("childCount", $this->_propDict)) {
            return $this->_propDict["childCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the childCount
    *
    * @param int $val The value of the childCount
    *
    * @return Folder
    */
    public function setChildCount($val)
    {
        $this->_propDict["child_count"] = $val;
        return $this;
    }
}
