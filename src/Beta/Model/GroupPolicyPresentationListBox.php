<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyPresentationListBox File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* GroupPolicyPresentationListBox class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class GroupPolicyPresentationListBox extends GroupPolicyPresentation
{
    /**
    * Gets the explicitValue
    * If this option is specified true the user must specify the registry subkey value and the registry subkey name. The list box shows two columns, one for the name and one for the data. The default value is false.
    *
    * @return bool The explicitValue
    */
    public function getExplicitValue()
    {
        if (array_key_exists("explicitValue", $this->_propDict)) {
            return $this->_propDict["explicitValue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the explicitValue
    * If this option is specified true the user must specify the registry subkey value and the registry subkey name. The list box shows two columns, one for the name and one for the data. The default value is false.
    *
    * @param bool $val The explicitValue
    *
    * @return GroupPolicyPresentationListBox
    */
    public function setExplicitValue($val)
    {
        $this->_propDict["explicitValue"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the valuePrefix
    *
    * @return string The valuePrefix
    */
    public function getValuePrefix()
    {
        if (array_key_exists("valuePrefix", $this->_propDict)) {
            return $this->_propDict["valuePrefix"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the valuePrefix
    *
    * @param string $val The valuePrefix
    *
    * @return GroupPolicyPresentationListBox
    */
    public function setValuePrefix($val)
    {
        $this->_propDict["valuePrefix"] = $val;
        return $this;
    }
    
}