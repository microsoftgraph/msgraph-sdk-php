<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnAuthenticationMethodLoadStartListener File
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
* OnAuthenticationMethodLoadStartListener class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnAuthenticationMethodLoadStartListener extends AuthenticationEventListener
{
    /**
    * Gets the handler
    * Required. Configuration for what to invoke if the event resolves to this listener. This lets us define potential handler configurations per-event.
    *
    * @return OnAuthenticationMethodLoadStartHandler|null The handler
    */
    public function getHandler()
    {
        if (array_key_exists("handler", $this->_propDict)) {
            if (is_a($this->_propDict["handler"], "\Beta\Microsoft\Graph\Model\OnAuthenticationMethodLoadStartHandler") || is_null($this->_propDict["handler"])) {
                return $this->_propDict["handler"];
            } else {
                $this->_propDict["handler"] = new OnAuthenticationMethodLoadStartHandler($this->_propDict["handler"]);
                return $this->_propDict["handler"];
            }
        }
        return null;
    }

    /**
    * Sets the handler
    * Required. Configuration for what to invoke if the event resolves to this listener. This lets us define potential handler configurations per-event.
    *
    * @param OnAuthenticationMethodLoadStartHandler $val The handler
    *
    * @return OnAuthenticationMethodLoadStartListener
    */
    public function setHandler($val)
    {
        $this->_propDict["handler"] = $val;
        return $this;
    }

}
