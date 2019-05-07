<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ReferencedObject File
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
* ReferencedObject class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ReferencedObject extends Entity
{
    /**
    * Gets the referencedObjectName
    *
    * @return string The referencedObjectName
    */
    public function getReferencedObjectName()
    {
        if (array_key_exists("referencedObjectName", $this->_propDict)) {
            return $this->_propDict["referencedObjectName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the referencedObjectName
    *
    * @param string $val The value of the referencedObjectName
    *
    * @return ReferencedObject
    */
    public function setReferencedObjectName($val)
    {
        $this->_propDict["referencedObjectName"] = $val;
        return $this;
    }
    /**
    * Gets the referencedProperty
    *
    * @return string The referencedProperty
    */
    public function getReferencedProperty()
    {
        if (array_key_exists("referencedProperty", $this->_propDict)) {
            return $this->_propDict["referencedProperty"];
        } else {
            return null;
        }
    }

    /**
    * Sets the referencedProperty
    *
    * @param string $val The value of the referencedProperty
    *
    * @return ReferencedObject
    */
    public function setReferencedProperty($val)
    {
        $this->_propDict["referencedProperty"] = $val;
        return $this;
    }
}
