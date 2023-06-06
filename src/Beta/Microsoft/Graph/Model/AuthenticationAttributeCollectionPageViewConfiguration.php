<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationAttributeCollectionPageViewConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* AuthenticationAttributeCollectionPageViewConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationAttributeCollectionPageViewConfiguration extends Entity
{
    /**
    * Gets the description
    * The description of the page.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * The description of the page.
    *
    * @param string $val The value of the description
    *
    * @return AuthenticationAttributeCollectionPageViewConfiguration
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the inputs
    * The display configuration of attributes being collected on the attribute collection page.
    *
    * @return AuthenticationAttributeCollectionInputConfiguration|null The inputs
    */
    public function getInputs()
    {
        if (array_key_exists("inputs", $this->_propDict)) {
            if (is_a($this->_propDict["inputs"], "\Beta\Microsoft\Graph\Model\AuthenticationAttributeCollectionInputConfiguration") || is_null($this->_propDict["inputs"])) {
                return $this->_propDict["inputs"];
            } else {
                $this->_propDict["inputs"] = new AuthenticationAttributeCollectionInputConfiguration($this->_propDict["inputs"]);
                return $this->_propDict["inputs"];
            }
        }
        return null;
    }

    /**
    * Sets the inputs
    * The display configuration of attributes being collected on the attribute collection page.
    *
    * @param AuthenticationAttributeCollectionInputConfiguration $val The value to assign to the inputs
    *
    * @return AuthenticationAttributeCollectionPageViewConfiguration The AuthenticationAttributeCollectionPageViewConfiguration
    */
    public function setInputs($val)
    {
        $this->_propDict["inputs"] = $val;
         return $this;
    }
    /**
    * Gets the title
    * The title of the attribute collection page.
    *
    * @return string|null The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }

    /**
    * Sets the title
    * The title of the attribute collection page.
    *
    * @param string $val The value of the title
    *
    * @return AuthenticationAttributeCollectionPageViewConfiguration
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
}
