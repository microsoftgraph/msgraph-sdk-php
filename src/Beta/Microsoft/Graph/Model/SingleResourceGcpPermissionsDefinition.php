<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SingleResourceGcpPermissionsDefinition File
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
* SingleResourceGcpPermissionsDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SingleResourceGcpPermissionsDefinition extends PermissionsDefinition
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.singleResourceGcpPermissionsDefinition");
    }


    /**
    * Gets the actionInfo
    *
    * @return GcpPermissionsDefinitionAction|null The actionInfo
    */
    public function getActionInfo()
    {
        if (array_key_exists("actionInfo", $this->_propDict)) {
            if (is_a($this->_propDict["actionInfo"], "\Beta\Microsoft\Graph\Model\GcpPermissionsDefinitionAction") || is_null($this->_propDict["actionInfo"])) {
                return $this->_propDict["actionInfo"];
            } else {
                $this->_propDict["actionInfo"] = new GcpPermissionsDefinitionAction($this->_propDict["actionInfo"]);
                return $this->_propDict["actionInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the actionInfo
    *
    * @param GcpPermissionsDefinitionAction $val The value to assign to the actionInfo
    *
    * @return SingleResourceGcpPermissionsDefinition The SingleResourceGcpPermissionsDefinition
    */
    public function setActionInfo($val)
    {
        $this->_propDict["actionInfo"] = $val;
         return $this;
    }
    /**
    * Gets the resourceId
    *
    * @return string|null The resourceId
    */
    public function getResourceId()
    {
        if (array_key_exists("resourceId", $this->_propDict)) {
            return $this->_propDict["resourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceId
    *
    * @param string $val The value of the resourceId
    *
    * @return SingleResourceGcpPermissionsDefinition
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }
}
