<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContactFolder File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* ContactFolder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ContactFolder extends Entity
{
    /**
    * Gets the displayName
    * The folder's display name.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The folder's display name.
    *
    * @param string $val The displayName
    *
    * @return ContactFolder
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the parentFolderId
    * The ID of the folder's parent folder.
    *
    * @return string|null The parentFolderId
    */
    public function getParentFolderId()
    {
        if (array_key_exists("parentFolderId", $this->_propDict)) {
            return $this->_propDict["parentFolderId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the parentFolderId
    * The ID of the folder's parent folder.
    *
    * @param string $val The parentFolderId
    *
    * @return ContactFolder
    */
    public function setParentFolderId($val)
    {
        $this->_propDict["parentFolderId"] = $val;
        return $this;
    }


     /**
     * Gets the childFolders
    * The collection of child folders in the folder. Navigation property. Read-only. Nullable.
     *
     * @return ContactFolder[]|null The childFolders
     */
    public function getChildFolders()
    {
        if (array_key_exists('childFolders', $this->_propDict) && !is_null($this->_propDict['childFolders'])) {
            $childFolders = [];
            if (count($this->_propDict['childFolders']) > 0 && is_a($this->_propDict['childFolders'][0], 'ContactFolder')) {
                return $this->_propDict['childFolders'];
            }
            foreach ($this->_propDict['childFolders'] as $singleValue) {
                $childFolders []= new ContactFolder($singleValue);
            }
            $this->_propDict['childFolders'] = $childFolders;
            return $this->_propDict['childFolders'];
        }
        return null;
    }

    /**
    * Sets the childFolders
    * The collection of child folders in the folder. Navigation property. Read-only. Nullable.
    *
    * @param ContactFolder[] $val The childFolders
    *
    * @return ContactFolder
    */
    public function setChildFolders($val)
    {
        $this->_propDict["childFolders"] = $val;
        return $this;
    }


     /**
     * Gets the contacts
    * The contacts in the folder. Navigation property. Read-only. Nullable.
     *
     * @return Contact[]|null The contacts
     */
    public function getContacts()
    {
        if (array_key_exists('contacts', $this->_propDict) && !is_null($this->_propDict['contacts'])) {
            $contacts = [];
            if (count($this->_propDict['contacts']) > 0 && is_a($this->_propDict['contacts'][0], 'Contact')) {
                return $this->_propDict['contacts'];
            }
            foreach ($this->_propDict['contacts'] as $singleValue) {
                $contacts []= new Contact($singleValue);
            }
            $this->_propDict['contacts'] = $contacts;
            return $this->_propDict['contacts'];
        }
        return null;
    }

    /**
    * Sets the contacts
    * The contacts in the folder. Navigation property. Read-only. Nullable.
    *
    * @param Contact[] $val The contacts
    *
    * @return ContactFolder
    */
    public function setContacts($val)
    {
        $this->_propDict["contacts"] = $val;
        return $this;
    }


     /**
     * Gets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the contactFolder. Read-only. Nullable.
     *
     * @return MultiValueLegacyExtendedProperty[]|null The multiValueExtendedProperties
     */
    public function getMultiValueExtendedProperties()
    {
        if (array_key_exists('multiValueExtendedProperties', $this->_propDict) && !is_null($this->_propDict['multiValueExtendedProperties'])) {
            $multiValueExtendedProperties = [];
            if (count($this->_propDict['multiValueExtendedProperties']) > 0 && is_a($this->_propDict['multiValueExtendedProperties'][0], 'MultiValueLegacyExtendedProperty')) {
                return $this->_propDict['multiValueExtendedProperties'];
            }
            foreach ($this->_propDict['multiValueExtendedProperties'] as $singleValue) {
                $multiValueExtendedProperties []= new MultiValueLegacyExtendedProperty($singleValue);
            }
            $this->_propDict['multiValueExtendedProperties'] = $multiValueExtendedProperties;
            return $this->_propDict['multiValueExtendedProperties'];
        }
        return null;
    }

    /**
    * Sets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the contactFolder. Read-only. Nullable.
    *
    * @param MultiValueLegacyExtendedProperty[] $val The multiValueExtendedProperties
    *
    * @return ContactFolder
    */
    public function setMultiValueExtendedProperties($val)
    {
        $this->_propDict["multiValueExtendedProperties"] = $val;
        return $this;
    }


     /**
     * Gets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the contactFolder. Read-only. Nullable.
     *
     * @return SingleValueLegacyExtendedProperty[]|null The singleValueExtendedProperties
     */
    public function getSingleValueExtendedProperties()
    {
        if (array_key_exists('singleValueExtendedProperties', $this->_propDict) && !is_null($this->_propDict['singleValueExtendedProperties'])) {
            $singleValueExtendedProperties = [];
            if (count($this->_propDict['singleValueExtendedProperties']) > 0 && is_a($this->_propDict['singleValueExtendedProperties'][0], 'SingleValueLegacyExtendedProperty')) {
                return $this->_propDict['singleValueExtendedProperties'];
            }
            foreach ($this->_propDict['singleValueExtendedProperties'] as $singleValue) {
                $singleValueExtendedProperties []= new SingleValueLegacyExtendedProperty($singleValue);
            }
            $this->_propDict['singleValueExtendedProperties'] = $singleValueExtendedProperties;
            return $this->_propDict['singleValueExtendedProperties'];
        }
        return null;
    }

    /**
    * Sets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the contactFolder. Read-only. Nullable.
    *
    * @param SingleValueLegacyExtendedProperty[] $val The singleValueExtendedProperties
    *
    * @return ContactFolder
    */
    public function setSingleValueExtendedProperties($val)
    {
        $this->_propDict["singleValueExtendedProperties"] = $val;
        return $this;
    }

}
