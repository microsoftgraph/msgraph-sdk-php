<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExternallyAccessibleAzureBlobContainerFinding File
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
* ExternallyAccessibleAzureBlobContainerFinding class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExternallyAccessibleAzureBlobContainerFinding extends Finding
{
    /**
    * Gets the accessibility
    *
    * @return AzureAccessType|null The accessibility
    */
    public function getAccessibility()
    {
        if (array_key_exists("accessibility", $this->_propDict)) {
            if (is_a($this->_propDict["accessibility"], "\Beta\Microsoft\Graph\Model\AzureAccessType") || is_null($this->_propDict["accessibility"])) {
                return $this->_propDict["accessibility"];
            } else {
                $this->_propDict["accessibility"] = new AzureAccessType($this->_propDict["accessibility"]);
                return $this->_propDict["accessibility"];
            }
        }
        return null;
    }

    /**
    * Sets the accessibility
    *
    * @param AzureAccessType $val The accessibility
    *
    * @return ExternallyAccessibleAzureBlobContainerFinding
    */
    public function setAccessibility($val)
    {
        $this->_propDict["accessibility"] = $val;
        return $this;
    }

    /**
    * Gets the encryptionManagedBy
    *
    * @return AzureEncryption|null The encryptionManagedBy
    */
    public function getEncryptionManagedBy()
    {
        if (array_key_exists("encryptionManagedBy", $this->_propDict)) {
            if (is_a($this->_propDict["encryptionManagedBy"], "\Beta\Microsoft\Graph\Model\AzureEncryption") || is_null($this->_propDict["encryptionManagedBy"])) {
                return $this->_propDict["encryptionManagedBy"];
            } else {
                $this->_propDict["encryptionManagedBy"] = new AzureEncryption($this->_propDict["encryptionManagedBy"]);
                return $this->_propDict["encryptionManagedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the encryptionManagedBy
    *
    * @param AzureEncryption $val The encryptionManagedBy
    *
    * @return ExternallyAccessibleAzureBlobContainerFinding
    */
    public function setEncryptionManagedBy($val)
    {
        $this->_propDict["encryptionManagedBy"] = $val;
        return $this;
    }

    /**
    * Gets the storageAccount
    *
    * @return AuthorizationSystemResource|null The storageAccount
    */
    public function getStorageAccount()
    {
        if (array_key_exists("storageAccount", $this->_propDict)) {
            if (is_a($this->_propDict["storageAccount"], "\Beta\Microsoft\Graph\Model\AuthorizationSystemResource") || is_null($this->_propDict["storageAccount"])) {
                return $this->_propDict["storageAccount"];
            } else {
                $this->_propDict["storageAccount"] = new AuthorizationSystemResource($this->_propDict["storageAccount"]);
                return $this->_propDict["storageAccount"];
            }
        }
        return null;
    }

    /**
    * Sets the storageAccount
    *
    * @param AuthorizationSystemResource $val The storageAccount
    *
    * @return ExternallyAccessibleAzureBlobContainerFinding
    */
    public function setStorageAccount($val)
    {
        $this->_propDict["storageAccount"] = $val;
        return $this;
    }

}
