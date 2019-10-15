<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccountAlias File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* AccountAlias class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AccountAlias extends Entity
{
    /**
    * Gets the id
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return AccountAlias
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the idType
    *
    * @return string The idType
    */
    public function getIdType()
    {
        if (array_key_exists("idType", $this->_propDict)) {
            return $this->_propDict["idType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the idType
    *
    * @param string $val The value of the idType
    *
    * @return AccountAlias
    */
    public function setIdType($val)
    {
        $this->_propDict["idType"] = $val;
        return $this;
    }
}
