<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DocumentSet File
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
* DocumentSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DocumentSet extends Entity
{

    /**
    * Gets the allowedContentTypes
    * Content types allowed in document set.
    *
    * @return ContentTypeInfo[]|null The allowedContentTypes
    */
    public function getAllowedContentTypes()
    {
        if (array_key_exists("allowedContentTypes", $this->_propDict) && !is_null($this->_propDict["allowedContentTypes"])) {
       
            if (count($this->_propDict['allowedContentTypes']) > 0 && is_a($this->_propDict['allowedContentTypes'][0], 'ContentTypeInfo')) {
               return $this->_propDict['allowedContentTypes'];
            }
            $allowedContentTypes = [];
            foreach ($this->_propDict['allowedContentTypes'] as $singleValue) {
               $allowedContentTypes []= new ContentTypeInfo($singleValue);
            }
            $this->_propDict['allowedContentTypes'] = $allowedContentTypes;
            return $this->_propDict['allowedContentTypes'];
            }
        return null;
    }

    /**
    * Sets the allowedContentTypes
    * Content types allowed in document set.
    *
    * @param ContentTypeInfo[] $val The value to assign to the allowedContentTypes
    *
    * @return DocumentSet The DocumentSet
    */
    public function setAllowedContentTypes($val)
    {
        $this->_propDict["allowedContentTypes"] = $val;
         return $this;
    }

    /**
    * Gets the defaultContents
    * Default contents of document set.
    *
    * @return DocumentSetContent[]|null The defaultContents
    */
    public function getDefaultContents()
    {
        if (array_key_exists("defaultContents", $this->_propDict) && !is_null($this->_propDict["defaultContents"])) {
       
            if (count($this->_propDict['defaultContents']) > 0 && is_a($this->_propDict['defaultContents'][0], 'DocumentSetContent')) {
               return $this->_propDict['defaultContents'];
            }
            $defaultContents = [];
            foreach ($this->_propDict['defaultContents'] as $singleValue) {
               $defaultContents []= new DocumentSetContent($singleValue);
            }
            $this->_propDict['defaultContents'] = $defaultContents;
            return $this->_propDict['defaultContents'];
            }
        return null;
    }

    /**
    * Sets the defaultContents
    * Default contents of document set.
    *
    * @param DocumentSetContent[] $val The value to assign to the defaultContents
    *
    * @return DocumentSet The DocumentSet
    */
    public function setDefaultContents($val)
    {
        $this->_propDict["defaultContents"] = $val;
         return $this;
    }
    /**
    * Gets the propagateWelcomePageChanges
    * Specifies whether to push welcome page changes to inherited content types.
    *
    * @return bool|null The propagateWelcomePageChanges
    */
    public function getPropagateWelcomePageChanges()
    {
        if (array_key_exists("propagateWelcomePageChanges", $this->_propDict)) {
            return $this->_propDict["propagateWelcomePageChanges"];
        } else {
            return null;
        }
    }

    /**
    * Sets the propagateWelcomePageChanges
    * Specifies whether to push welcome page changes to inherited content types.
    *
    * @param bool $val The value of the propagateWelcomePageChanges
    *
    * @return DocumentSet
    */
    public function setPropagateWelcomePageChanges($val)
    {
        $this->_propDict["propagateWelcomePageChanges"] = $val;
        return $this;
    }
    /**
    * Gets the shouldPrefixNameToFile
    * Add the name of the document set to each file name.
    *
    * @return bool|null The shouldPrefixNameToFile
    */
    public function getShouldPrefixNameToFile()
    {
        if (array_key_exists("shouldPrefixNameToFile", $this->_propDict)) {
            return $this->_propDict["shouldPrefixNameToFile"];
        } else {
            return null;
        }
    }

    /**
    * Sets the shouldPrefixNameToFile
    * Add the name of the document set to each file name.
    *
    * @param bool $val The value of the shouldPrefixNameToFile
    *
    * @return DocumentSet
    */
    public function setShouldPrefixNameToFile($val)
    {
        $this->_propDict["shouldPrefixNameToFile"] = $val;
        return $this;
    }
    /**
    * Gets the welcomePageUrl
    * Welcome page absolute URL.
    *
    * @return string|null The welcomePageUrl
    */
    public function getWelcomePageUrl()
    {
        if (array_key_exists("welcomePageUrl", $this->_propDict)) {
            return $this->_propDict["welcomePageUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the welcomePageUrl
    * Welcome page absolute URL.
    *
    * @param string $val The value of the welcomePageUrl
    *
    * @return DocumentSet
    */
    public function setWelcomePageUrl($val)
    {
        $this->_propDict["welcomePageUrl"] = $val;
        return $this;
    }

    /**
    * Gets the sharedColumns
    *
    * @return ColumnDefinition[]|null The sharedColumns
    */
    public function getSharedColumns()
    {
        if (array_key_exists("sharedColumns", $this->_propDict) && !is_null($this->_propDict["sharedColumns"])) {
       
            if (count($this->_propDict['sharedColumns']) > 0 && is_a($this->_propDict['sharedColumns'][0], 'ColumnDefinition')) {
               return $this->_propDict['sharedColumns'];
            }
            $sharedColumns = [];
            foreach ($this->_propDict['sharedColumns'] as $singleValue) {
               $sharedColumns []= new ColumnDefinition($singleValue);
            }
            $this->_propDict['sharedColumns'] = $sharedColumns;
            return $this->_propDict['sharedColumns'];
            }
        return null;
    }

    /**
    * Sets the sharedColumns
    *
    * @param ColumnDefinition[] $val The value to assign to the sharedColumns
    *
    * @return DocumentSet The DocumentSet
    */
    public function setSharedColumns($val)
    {
        $this->_propDict["sharedColumns"] = $val;
         return $this;
    }

    /**
    * Gets the welcomePageColumns
    *
    * @return ColumnDefinition[]|null The welcomePageColumns
    */
    public function getWelcomePageColumns()
    {
        if (array_key_exists("welcomePageColumns", $this->_propDict) && !is_null($this->_propDict["welcomePageColumns"])) {
       
            if (count($this->_propDict['welcomePageColumns']) > 0 && is_a($this->_propDict['welcomePageColumns'][0], 'ColumnDefinition')) {
               return $this->_propDict['welcomePageColumns'];
            }
            $welcomePageColumns = [];
            foreach ($this->_propDict['welcomePageColumns'] as $singleValue) {
               $welcomePageColumns []= new ColumnDefinition($singleValue);
            }
            $this->_propDict['welcomePageColumns'] = $welcomePageColumns;
            return $this->_propDict['welcomePageColumns'];
            }
        return null;
    }

    /**
    * Sets the welcomePageColumns
    *
    * @param ColumnDefinition[] $val The value to assign to the welcomePageColumns
    *
    * @return DocumentSet The DocumentSet
    */
    public function setWelcomePageColumns($val)
    {
        $this->_propDict["welcomePageColumns"] = $val;
         return $this;
    }
}
