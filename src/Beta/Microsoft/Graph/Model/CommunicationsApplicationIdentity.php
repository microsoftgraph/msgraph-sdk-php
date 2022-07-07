<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CommunicationsApplicationIdentity File
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
* CommunicationsApplicationIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CommunicationsApplicationIdentity extends Identity
{
    /**
    * Gets the applicationType
    *
    * @return string|null The applicationType
    */
    public function getApplicationType()
    {
        if (array_key_exists("applicationType", $this->_propDict)) {
            return $this->_propDict["applicationType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationType
    *
    * @param string $val The value of the applicationType
    *
    * @return CommunicationsApplicationIdentity
    */
    public function setApplicationType($val)
    {
        $this->_propDict["applicationType"] = $val;
        return $this;
    }
    /**
    * Gets the hidden
    *
    * @return bool|null The hidden
    */
    public function getHidden()
    {
        if (array_key_exists("hidden", $this->_propDict)) {
            return $this->_propDict["hidden"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hidden
    *
    * @param bool $val The value of the hidden
    *
    * @return CommunicationsApplicationIdentity
    */
    public function setHidden($val)
    {
        $this->_propDict["hidden"] = $val;
        return $this;
    }
}
