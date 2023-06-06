<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnUserCreateStartExternalUsersSelfServiceSignUp File
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
* OnUserCreateStartExternalUsersSelfServiceSignUp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnUserCreateStartExternalUsersSelfServiceSignUp extends OnUserCreateStartHandler
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.onUserCreateStartExternalUsersSelfServiceSignUp");
    }


    /**
    * Gets the userTypeToCreate
    * The type of user object to create. The possible values are: member, guest, unknownFutureValue.
    *
    * @return UserType|null The userTypeToCreate
    */
    public function getUserTypeToCreate()
    {
        if (array_key_exists("userTypeToCreate", $this->_propDict)) {
            if (is_a($this->_propDict["userTypeToCreate"], "\Beta\Microsoft\Graph\Model\UserType") || is_null($this->_propDict["userTypeToCreate"])) {
                return $this->_propDict["userTypeToCreate"];
            } else {
                $this->_propDict["userTypeToCreate"] = new UserType($this->_propDict["userTypeToCreate"]);
                return $this->_propDict["userTypeToCreate"];
            }
        }
        return null;
    }

    /**
    * Sets the userTypeToCreate
    * The type of user object to create. The possible values are: member, guest, unknownFutureValue.
    *
    * @param UserType $val The value to assign to the userTypeToCreate
    *
    * @return OnUserCreateStartExternalUsersSelfServiceSignUp The OnUserCreateStartExternalUsersSelfServiceSignUp
    */
    public function setUserTypeToCreate($val)
    {
        $this->_propDict["userTypeToCreate"] = $val;
         return $this;
    }
}
