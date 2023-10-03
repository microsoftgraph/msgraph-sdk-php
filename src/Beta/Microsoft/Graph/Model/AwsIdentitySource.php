<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AwsIdentitySource File
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
* AwsIdentitySource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AwsIdentitySource extends PermissionsDefinitionIdentitySource
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.awsIdentitySource");
    }


    /**
    * Gets the authorizationSystemInfo
    *
    * @return PermissionsDefinitionAuthorizationSystem|null The authorizationSystemInfo
    */
    public function getAuthorizationSystemInfo()
    {
        if (array_key_exists("authorizationSystemInfo", $this->_propDict)) {
            if (is_a($this->_propDict["authorizationSystemInfo"], "\Beta\Microsoft\Graph\Model\PermissionsDefinitionAuthorizationSystem") || is_null($this->_propDict["authorizationSystemInfo"])) {
                return $this->_propDict["authorizationSystemInfo"];
            } else {
                $this->_propDict["authorizationSystemInfo"] = new PermissionsDefinitionAuthorizationSystem($this->_propDict["authorizationSystemInfo"]);
                return $this->_propDict["authorizationSystemInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the authorizationSystemInfo
    *
    * @param PermissionsDefinitionAuthorizationSystem $val The value to assign to the authorizationSystemInfo
    *
    * @return AwsIdentitySource The AwsIdentitySource
    */
    public function setAuthorizationSystemInfo($val)
    {
        $this->_propDict["authorizationSystemInfo"] = $val;
         return $this;
    }
}
