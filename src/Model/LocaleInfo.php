<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocaleInfo File
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
* LocaleInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class LocaleInfo extends Entity
{
    /**
    * The array of properties available 
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    /**
    * LocaleInfo constructor
    *
    * @param array $propDict List of properties to set
    * Defaults to an empty array
    *
    * @return LocaleInfo
    */
    public function __construct($propDict=array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

	/**
    * Gets the property dictionary of the LocaleInfo
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the locale
    *
    * @return string The locale
    */
    public function getLocale()
    {
        if (array_key_exists("locale", $this->_propDict)) {
            return $this->_propDict["locale"];
        } else {
            return null;
        }
    }

    /**
    * Sets the locale
    *
    * @param string $val The value of the locale
    *
    * @return LocaleInfo
    */
    public function setLocale($val)
    {
        $this->_propDict["locale"] = $val;
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
    * @param string $val The value of the displayName
    *
    * @return LocaleInfo
    */
    public function setDisplayName($val)
    {
        $this->_propDict["display_name"] = $val;
        return $this;
    }
}
