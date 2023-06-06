<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationAttributeCollectionPage File
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
* AuthenticationAttributeCollectionPage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationAttributeCollectionPage extends Entity
{
    /**
    * Gets the customStringsFileId
    *
    * @return string|null The customStringsFileId
    */
    public function getCustomStringsFileId()
    {
        if (array_key_exists("customStringsFileId", $this->_propDict)) {
            return $this->_propDict["customStringsFileId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customStringsFileId
    *
    * @param string $val The value of the customStringsFileId
    *
    * @return AuthenticationAttributeCollectionPage
    */
    public function setCustomStringsFileId($val)
    {
        $this->_propDict["customStringsFileId"] = $val;
        return $this;
    }

    /**
    * Gets the views
    * A collection of displays of the attribute collection page.
    *
    * @return AuthenticationAttributeCollectionPageViewConfiguration|null The views
    */
    public function getViews()
    {
        if (array_key_exists("views", $this->_propDict)) {
            if (is_a($this->_propDict["views"], "\Beta\Microsoft\Graph\Model\AuthenticationAttributeCollectionPageViewConfiguration") || is_null($this->_propDict["views"])) {
                return $this->_propDict["views"];
            } else {
                $this->_propDict["views"] = new AuthenticationAttributeCollectionPageViewConfiguration($this->_propDict["views"]);
                return $this->_propDict["views"];
            }
        }
        return null;
    }

    /**
    * Sets the views
    * A collection of displays of the attribute collection page.
    *
    * @param AuthenticationAttributeCollectionPageViewConfiguration $val The value to assign to the views
    *
    * @return AuthenticationAttributeCollectionPage The AuthenticationAttributeCollectionPage
    */
    public function setViews($val)
    {
        $this->_propDict["views"] = $val;
         return $this;
    }
}
