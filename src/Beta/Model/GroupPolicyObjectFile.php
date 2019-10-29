<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyObjectFile File
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
* GroupPolicyObjectFile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class GroupPolicyObjectFile extends Entity
{
    /**
    * Gets the ouDistinguishedName
    * The distinguished name of the OU.
    *
    * @return string The ouDistinguishedName
    */
    public function getOuDistinguishedName()
    {
        if (array_key_exists("ouDistinguishedName", $this->_propDict)) {
            return $this->_propDict["ouDistinguishedName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ouDistinguishedName
    * The distinguished name of the OU.
    *
    * @param string $val The value of the ouDistinguishedName
    *
    * @return GroupPolicyObjectFile
    */
    public function setOuDistinguishedName($val)
    {
        $this->_propDict["ouDistinguishedName"] = $val;
        return $this;
    }
    /**
    * Gets the content
    * The Group Policy Object file content.
    *
    * @return string The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            return $this->_propDict["content"];
        } else {
            return null;
        }
    }

    /**
    * Sets the content
    * The Group Policy Object file content.
    *
    * @param string $val The value of the content
    *
    * @return GroupPolicyObjectFile
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }
}
