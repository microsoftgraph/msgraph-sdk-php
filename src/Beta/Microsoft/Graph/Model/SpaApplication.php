<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SpaApplication File
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
* SpaApplication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SpaApplication extends Entity
{
    /**
    * Gets the redirectUris
    *
    * @return string The redirectUris
    */
    public function getRedirectUris()
    {
        if (array_key_exists("redirectUris", $this->_propDict)) {
            return $this->_propDict["redirectUris"];
        } else {
            return null;
        }
    }

    /**
    * Sets the redirectUris
    *
    * @param string $val The value of the redirectUris
    *
    * @return SpaApplication
    */
    public function setRedirectUris($val)
    {
        $this->_propDict["redirectUris"] = $val;
        return $this;
    }
}
