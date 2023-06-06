<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnAttributeCollectionExternalUsersSelfServiceSignUp File
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
* OnAttributeCollectionExternalUsersSelfServiceSignUp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnAttributeCollectionExternalUsersSelfServiceSignUp extends OnAttributeCollectionHandler
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.onAttributeCollectionExternalUsersSelfServiceSignUp");
    }


    /**
    * Gets the attributeCollectionPage
    * Required. The configuration for how attributes are displayed in the sign up experience defined by a user flow, like the externalUsersSelfServiceSignupEventsFlow, specifically on the attribute collection page.
    *
    * @return AuthenticationAttributeCollectionPage|null The attributeCollectionPage
    */
    public function getAttributeCollectionPage()
    {
        if (array_key_exists("attributeCollectionPage", $this->_propDict)) {
            if (is_a($this->_propDict["attributeCollectionPage"], "\Beta\Microsoft\Graph\Model\AuthenticationAttributeCollectionPage") || is_null($this->_propDict["attributeCollectionPage"])) {
                return $this->_propDict["attributeCollectionPage"];
            } else {
                $this->_propDict["attributeCollectionPage"] = new AuthenticationAttributeCollectionPage($this->_propDict["attributeCollectionPage"]);
                return $this->_propDict["attributeCollectionPage"];
            }
        }
        return null;
    }

    /**
    * Sets the attributeCollectionPage
    * Required. The configuration for how attributes are displayed in the sign up experience defined by a user flow, like the externalUsersSelfServiceSignupEventsFlow, specifically on the attribute collection page.
    *
    * @param AuthenticationAttributeCollectionPage $val The value to assign to the attributeCollectionPage
    *
    * @return OnAttributeCollectionExternalUsersSelfServiceSignUp The OnAttributeCollectionExternalUsersSelfServiceSignUp
    */
    public function setAttributeCollectionPage($val)
    {
        $this->_propDict["attributeCollectionPage"] = $val;
         return $this;
    }

    /**
    * Gets the attributes
    *
    * @return IdentityUserFlowAttribute|null The attributes
    */
    public function getAttributes()
    {
        if (array_key_exists("attributes", $this->_propDict)) {
            if (is_a($this->_propDict["attributes"], "\Beta\Microsoft\Graph\Model\IdentityUserFlowAttribute") || is_null($this->_propDict["attributes"])) {
                return $this->_propDict["attributes"];
            } else {
                $this->_propDict["attributes"] = new IdentityUserFlowAttribute($this->_propDict["attributes"]);
                return $this->_propDict["attributes"];
            }
        }
        return null;
    }

    /**
    * Sets the attributes
    *
    * @param IdentityUserFlowAttribute $val The value to assign to the attributes
    *
    * @return OnAttributeCollectionExternalUsersSelfServiceSignUp The OnAttributeCollectionExternalUsersSelfServiceSignUp
    */
    public function setAttributes($val)
    {
        $this->_propDict["attributes"] = $val;
         return $this;
    }
}
