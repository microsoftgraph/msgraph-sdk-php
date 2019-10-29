<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TokenMeetingInfo File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* TokenMeetingInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TokenMeetingInfo extends MeetingInfo
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.tokenMeetingInfo");
    }

    /**
    * Gets the token
    *
    * @return string The token
    */
    public function getToken()
    {
        if (array_key_exists("token", $this->_propDict)) {
            return $this->_propDict["token"];
        } else {
            return null;
        }
    }

    /**
    * Sets the token
    *
    * @param string $val The value of the token
    *
    * @return TokenMeetingInfo
    */
    public function setToken($val)
    {
        $this->_propDict["token"] = $val;
        return $this;
    }
}
