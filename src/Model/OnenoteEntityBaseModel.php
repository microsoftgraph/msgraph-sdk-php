<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnenoteEntityBaseModel File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* OnenoteEntityBaseModel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class OnenoteEntityBaseModel extends Entity
{
    /**
    * Gets the self
    *
    * @return string The self
    */
    public function getSelf()
    {
        if (array_key_exists("self", $this->_propDict)) {
            return $this->_propDict["self"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the self
    *
    * @param string $val The self
    *
    * @return OnenoteEntityBaseModel
    */
    public function setSelf($val)
    {
        $this->_propDict["self"] = $val;
        return $this;
    }
    
}