<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnAttributeCollectionListener File
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
* OnAttributeCollectionListener class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnAttributeCollectionListener extends AuthenticationEventListener
{
    /**
    * Gets the handler
    * Required. Configuration for what to invoke if the event resolves to this listener. This lets us define potential handler configurations per-event.
    *
    * @return OnAttributeCollectionHandler|null The handler
    */
    public function getHandler()
    {
        if (array_key_exists("handler", $this->_propDict)) {
            if (is_a($this->_propDict["handler"], "\Beta\Microsoft\Graph\Model\OnAttributeCollectionHandler") || is_null($this->_propDict["handler"])) {
                return $this->_propDict["handler"];
            } else {
                $this->_propDict["handler"] = new OnAttributeCollectionHandler($this->_propDict["handler"]);
                return $this->_propDict["handler"];
            }
        }
        return null;
    }

    /**
    * Sets the handler
    * Required. Configuration for what to invoke if the event resolves to this listener. This lets us define potential handler configurations per-event.
    *
    * @param OnAttributeCollectionHandler $val The handler
    *
    * @return OnAttributeCollectionListener
    */
    public function setHandler($val)
    {
        $this->_propDict["handler"] = $val;
        return $this;
    }

}
