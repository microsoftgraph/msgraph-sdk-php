<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VariableManagementConditionExpression File
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
* VariableManagementConditionExpression class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class VariableManagementConditionExpression extends ManagementConditionExpressionModel
{
    /**
    * Gets the managementConditionId
    *
    * @return string The managementConditionId
    */
    public function getManagementConditionId()
    {
        if (array_key_exists("managementConditionId", $this->_propDict)) {
            return $this->_propDict["managementConditionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementConditionId
    *
    * @param string $val The value of the managementConditionId
    *
    * @return VariableManagementConditionExpression
    */
    public function setManagementConditionId($val)
    {
        $this->_propDict["managementConditionId"] = $val;
        return $this;
    }
}
