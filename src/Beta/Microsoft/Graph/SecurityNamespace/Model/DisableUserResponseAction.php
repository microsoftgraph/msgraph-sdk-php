<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DisableUserResponseAction File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* DisableUserResponseAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DisableUserResponseAction extends ResponseAction
{

    /**
    * Gets the identifier
    *
    * @return DisableUserEntityIdentifier|null The identifier
    */
    public function getIdentifier()
    {
        if (array_key_exists("identifier", $this->_propDict)) {
            if (is_a($this->_propDict["identifier"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\DisableUserEntityIdentifier") || is_null($this->_propDict["identifier"])) {
                return $this->_propDict["identifier"];
            } else {
                $this->_propDict["identifier"] = new DisableUserEntityIdentifier($this->_propDict["identifier"]);
                return $this->_propDict["identifier"];
            }
        }
        return null;
    }

    /**
    * Sets the identifier
    *
    * @param DisableUserEntityIdentifier $val The value to assign to the identifier
    *
    * @return DisableUserResponseAction The DisableUserResponseAction
    */
    public function setIdentifier($val)
    {
        $this->_propDict["identifier"] = $val;
         return $this;
    }
}
