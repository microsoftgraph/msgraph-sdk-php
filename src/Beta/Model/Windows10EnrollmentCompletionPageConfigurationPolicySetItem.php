<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10EnrollmentCompletionPageConfigurationPolicySetItem File
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
* Windows10EnrollmentCompletionPageConfigurationPolicySetItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Windows10EnrollmentCompletionPageConfigurationPolicySetItem extends PolicySetItem
{
    /**
    * Gets the priority
    * Priority of the Windows10EnrollmentCompletionPageConfigurationPolicySetItem.
    *
    * @return int The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the priority
    * Priority of the Windows10EnrollmentCompletionPageConfigurationPolicySetItem.
    *
    * @param int $val The priority
    *
    * @return Windows10EnrollmentCompletionPageConfigurationPolicySetItem
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = intval($val);
        return $this;
    }
    
}