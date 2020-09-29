<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Compliance File
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
* Compliance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Compliance extends 
{
    /**
    * Gets the ediscovery
    *
    * @return Ediscovery The ediscovery
    */
    public function getEdiscovery()
    {
        if (array_key_exists("ediscovery", $this->_propDict)) {
            if (is_a($this->_propDict["ediscovery"], "Beta\Microsoft\Graph\Model\Ediscovery")) {
                return $this->_propDict["ediscovery"];
            } else {
                $this->_propDict["ediscovery"] = new Ediscovery($this->_propDict["ediscovery"]);
                return $this->_propDict["ediscovery"];
            }
        }
        return null;
    }
    
    /**
    * Sets the ediscovery
    *
    * @param Ediscovery $val The ediscovery
    *
    * @return Compliance
    */
    public function setEdiscovery($val)
    {
        $this->_propDict["ediscovery"] = $val;
        return $this;
    }
    
}