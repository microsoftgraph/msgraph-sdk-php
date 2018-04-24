<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BitLockerRemovableDrivePolicy File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* BitLockerRemovableDrivePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class BitLockerRemovableDrivePolicy extends Entity
{

    /**
    * Gets the encryptionMethod
    *
    * @return BitLockerEncryptionMethod The encryptionMethod
    */
    public function getEncryptionMethod()
    {
        if (array_key_exists("encryptionMethod", $this->_propDict)) {
            if (is_a($this->_propDict["encryptionMethod"], "Microsoft\Graph\Beta\Model\BitLockerEncryptionMethod")) {
                return $this->_propDict["encryptionMethod"];
            } else {
                $this->_propDict["encryptionMethod"] = new BitLockerEncryptionMethod($this->_propDict["encryptionMethod"]);
                return $this->_propDict["encryptionMethod"];
            }
        }
        return null;
    }

    /**
    * Sets the encryptionMethod
    *
    * @param BitLockerEncryptionMethod $val The value to assign to the encryptionMethod
    *
    * @return BitLockerRemovableDrivePolicy The BitLockerRemovableDrivePolicy
    */
    public function setEncryptionMethod($val)
    {
        $this->_propDict["encryptionMethod"] = $val;
         return $this;
    }
    /**
    * Gets the requireEncryptionForWriteAccess
    *
    * @return bool The requireEncryptionForWriteAccess
    */
    public function getRequireEncryptionForWriteAccess()
    {
        if (array_key_exists("requireEncryptionForWriteAccess", $this->_propDict)) {
            return $this->_propDict["requireEncryptionForWriteAccess"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requireEncryptionForWriteAccess
    *
    * @param bool $val The value of the requireEncryptionForWriteAccess
    *
    * @return BitLockerRemovableDrivePolicy
    */
    public function setRequireEncryptionForWriteAccess($val)
    {
        $this->_propDict["requireEncryptionForWriteAccess"] = $val;
        return $this;
    }
    /**
    * Gets the blockCrossOrganizationWriteAccess
    *
    * @return bool The blockCrossOrganizationWriteAccess
    */
    public function getBlockCrossOrganizationWriteAccess()
    {
        if (array_key_exists("blockCrossOrganizationWriteAccess", $this->_propDict)) {
            return $this->_propDict["blockCrossOrganizationWriteAccess"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockCrossOrganizationWriteAccess
    *
    * @param bool $val The value of the blockCrossOrganizationWriteAccess
    *
    * @return BitLockerRemovableDrivePolicy
    */
    public function setBlockCrossOrganizationWriteAccess($val)
    {
        $this->_propDict["blockCrossOrganizationWriteAccess"] = $val;
        return $this;
    }
}
