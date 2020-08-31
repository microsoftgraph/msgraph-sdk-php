<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Request File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* Request class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Request extends Entity
{
    /**
    * Gets the approval
    *
    * @return Approval The approval
    */
    public function getApproval()
    {
        if (array_key_exists("approval", $this->_propDict)) {
            if (is_a($this->_propDict["approval"], "Beta\Microsoft\Graph\Model\Approval")) {
                return $this->_propDict["approval"];
            } else {
                $this->_propDict["approval"] = new Approval($this->_propDict["approval"]);
                return $this->_propDict["approval"];
            }
        }
        return null;
    }
    
    /**
    * Sets the approval
    *
    * @param Approval $val The approval
    *
    * @return Request
    */
    public function setApproval($val)
    {
        $this->_propDict["approval"] = $val;
        return $this;
    }
    
}