<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EdiscoverySearchExportOperation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

/**
* EdiscoverySearchExportOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EdiscoverySearchExportOperation extends CaseOperation
{
    /**
    * Gets the additionalOptions
    *
    * @return AdditionalOptions|null The additionalOptions
    */
    public function getAdditionalOptions()
    {
        if (array_key_exists("additionalOptions", $this->_propDict)) {
            if (is_a($this->_propDict["additionalOptions"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\AdditionalOptions") || is_null($this->_propDict["additionalOptions"])) {
                return $this->_propDict["additionalOptions"];
            } else {
                $this->_propDict["additionalOptions"] = new AdditionalOptions($this->_propDict["additionalOptions"]);
                return $this->_propDict["additionalOptions"];
            }
        }
        return null;
    }

    /**
    * Sets the additionalOptions
    *
    * @param AdditionalOptions $val The additionalOptions
    *
    * @return EdiscoverySearchExportOperation
    */
    public function setAdditionalOptions($val)
    {
        $this->_propDict["additionalOptions"] = $val;
        return $this;
    }

    /**
    * Gets the description
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return EdiscoverySearchExportOperation
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
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
    *
    * @param string $val The displayName
    *
    * @return EdiscoverySearchExportOperation
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the exportCriteria
    *
    * @return ExportCriteria|null The exportCriteria
    */
    public function getExportCriteria()
    {
        if (array_key_exists("exportCriteria", $this->_propDict)) {
            if (is_a($this->_propDict["exportCriteria"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\ExportCriteria") || is_null($this->_propDict["exportCriteria"])) {
                return $this->_propDict["exportCriteria"];
            } else {
                $this->_propDict["exportCriteria"] = new ExportCriteria($this->_propDict["exportCriteria"]);
                return $this->_propDict["exportCriteria"];
            }
        }
        return null;
    }

    /**
    * Sets the exportCriteria
    *
    * @param ExportCriteria $val The exportCriteria
    *
    * @return EdiscoverySearchExportOperation
    */
    public function setExportCriteria($val)
    {
        $this->_propDict["exportCriteria"] = $val;
        return $this;
    }


     /**
     * Gets the exportFileMetadata
     *
     * @return array|null The exportFileMetadata
     */
    public function getExportFileMetadata()
    {
        if (array_key_exists("exportFileMetadata", $this->_propDict)) {
           return $this->_propDict["exportFileMetadata"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exportFileMetadata
    *
    * @param ExportFileMetadata[] $val The exportFileMetadata
    *
    * @return EdiscoverySearchExportOperation
    */
    public function setExportFileMetadata($val)
    {
        $this->_propDict["exportFileMetadata"] = $val;
        return $this;
    }

    /**
    * Gets the exportFormat
    *
    * @return ExportFormat|null The exportFormat
    */
    public function getExportFormat()
    {
        if (array_key_exists("exportFormat", $this->_propDict)) {
            if (is_a($this->_propDict["exportFormat"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\ExportFormat") || is_null($this->_propDict["exportFormat"])) {
                return $this->_propDict["exportFormat"];
            } else {
                $this->_propDict["exportFormat"] = new ExportFormat($this->_propDict["exportFormat"]);
                return $this->_propDict["exportFormat"];
            }
        }
        return null;
    }

    /**
    * Sets the exportFormat
    *
    * @param ExportFormat $val The exportFormat
    *
    * @return EdiscoverySearchExportOperation
    */
    public function setExportFormat($val)
    {
        $this->_propDict["exportFormat"] = $val;
        return $this;
    }

    /**
    * Gets the exportLocation
    *
    * @return ExportLocation|null The exportLocation
    */
    public function getExportLocation()
    {
        if (array_key_exists("exportLocation", $this->_propDict)) {
            if (is_a($this->_propDict["exportLocation"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\ExportLocation") || is_null($this->_propDict["exportLocation"])) {
                return $this->_propDict["exportLocation"];
            } else {
                $this->_propDict["exportLocation"] = new ExportLocation($this->_propDict["exportLocation"]);
                return $this->_propDict["exportLocation"];
            }
        }
        return null;
    }

    /**
    * Sets the exportLocation
    *
    * @param ExportLocation $val The exportLocation
    *
    * @return EdiscoverySearchExportOperation
    */
    public function setExportLocation($val)
    {
        $this->_propDict["exportLocation"] = $val;
        return $this;
    }

    /**
    * Gets the exportSingleItems
    *
    * @return bool|null The exportSingleItems
    */
    public function getExportSingleItems()
    {
        if (array_key_exists("exportSingleItems", $this->_propDict)) {
            return $this->_propDict["exportSingleItems"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exportSingleItems
    *
    * @param bool $val The exportSingleItems
    *
    * @return EdiscoverySearchExportOperation
    */
    public function setExportSingleItems($val)
    {
        $this->_propDict["exportSingleItems"] = boolval($val);
        return $this;
    }

    /**
    * Gets the search
    *
    * @return EdiscoverySearch|null The search
    */
    public function getSearch()
    {
        if (array_key_exists("search", $this->_propDict)) {
            if (is_a($this->_propDict["search"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\EdiscoverySearch") || is_null($this->_propDict["search"])) {
                return $this->_propDict["search"];
            } else {
                $this->_propDict["search"] = new EdiscoverySearch($this->_propDict["search"]);
                return $this->_propDict["search"];
            }
        }
        return null;
    }

    /**
    * Sets the search
    *
    * @param EdiscoverySearch $val The search
    *
    * @return EdiscoverySearchExportOperation
    */
    public function setSearch($val)
    {
        $this->_propDict["search"] = $val;
        return $this;
    }

}
