<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EnumeratedInboundPorts File
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
* EnumeratedInboundPorts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EnumeratedInboundPorts extends InboundPorts
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.enumeratedInboundPorts");
    }

    /**
    * Gets the ports
    *
    * @return string|null The ports
    */
    public function getPorts()
    {
        if (array_key_exists("ports", $this->_propDict)) {
            return $this->_propDict["ports"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ports
    *
    * @param string $val The value of the ports
    *
    * @return EnumeratedInboundPorts
    */
    public function setPorts($val)
    {
        $this->_propDict["ports"] = $val;
        return $this;
    }
}
