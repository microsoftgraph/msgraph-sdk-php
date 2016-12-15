<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OpenTypeExtension File
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
* OpenTypeExtension class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class OpenTypeExtension extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new OpenTypeExtension
    *
    * @param array $propDict A list of properties to set
    *
    * @return OpenTypeExtension
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the OpenTypeExtension
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the extensionName
    *
    * @return string The extensionName
    */
    public function getExtensionName()
    {
        if (array_key_exists("extensionName", $this->_propDict)) {
            return $this->_propDict["extensionName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the extensionName
    *
    * @param string $val The extensionName
    *
    * @return OpenTypeExtension
    */
    public function setExtensionName($val)
    {
        $this->_propDict["extensionName"] = $val;
        return $this;
    }
}