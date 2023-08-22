<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* QualityUpdateCatalogEntry File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;

/**
* QualityUpdateCatalogEntry class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class QualityUpdateCatalogEntry extends SoftwareUpdateCatalogEntry
{
    /**
    * Gets the catalogName
    *
    * @return string|null The catalogName
    */
    public function getCatalogName()
    {
        if (array_key_exists("catalogName", $this->_propDict)) {
            return $this->_propDict["catalogName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the catalogName
    *
    * @param string $val The catalogName
    *
    * @return QualityUpdateCatalogEntry
    */
    public function setCatalogName($val)
    {
        $this->_propDict["catalogName"] = $val;
        return $this;
    }

    /**
    * Gets the cveSeverityInformation
    *
    * @return QualityUpdateCveSeverityInformation|null The cveSeverityInformation
    */
    public function getCveSeverityInformation()
    {
        if (array_key_exists("cveSeverityInformation", $this->_propDict)) {
            if (is_a($this->_propDict["cveSeverityInformation"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\QualityUpdateCveSeverityInformation") || is_null($this->_propDict["cveSeverityInformation"])) {
                return $this->_propDict["cveSeverityInformation"];
            } else {
                $this->_propDict["cveSeverityInformation"] = new QualityUpdateCveSeverityInformation($this->_propDict["cveSeverityInformation"]);
                return $this->_propDict["cveSeverityInformation"];
            }
        }
        return null;
    }

    /**
    * Sets the cveSeverityInformation
    *
    * @param QualityUpdateCveSeverityInformation $val The cveSeverityInformation
    *
    * @return QualityUpdateCatalogEntry
    */
    public function setCveSeverityInformation($val)
    {
        $this->_propDict["cveSeverityInformation"] = $val;
        return $this;
    }

    /**
    * Gets the isExpeditable
    * Indicates whether the content can be deployed as an expedited quality update. Read-only.
    *
    * @return bool|null The isExpeditable
    */
    public function getIsExpeditable()
    {
        if (array_key_exists("isExpeditable", $this->_propDict)) {
            return $this->_propDict["isExpeditable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isExpeditable
    * Indicates whether the content can be deployed as an expedited quality update. Read-only.
    *
    * @param bool $val The isExpeditable
    *
    * @return QualityUpdateCatalogEntry
    */
    public function setIsExpeditable($val)
    {
        $this->_propDict["isExpeditable"] = boolval($val);
        return $this;
    }

    /**
    * Gets the qualityUpdateCadence
    *
    * @return QualityUpdateCadence|null The qualityUpdateCadence
    */
    public function getQualityUpdateCadence()
    {
        if (array_key_exists("qualityUpdateCadence", $this->_propDict)) {
            if (is_a($this->_propDict["qualityUpdateCadence"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\QualityUpdateCadence") || is_null($this->_propDict["qualityUpdateCadence"])) {
                return $this->_propDict["qualityUpdateCadence"];
            } else {
                $this->_propDict["qualityUpdateCadence"] = new QualityUpdateCadence($this->_propDict["qualityUpdateCadence"]);
                return $this->_propDict["qualityUpdateCadence"];
            }
        }
        return null;
    }

    /**
    * Sets the qualityUpdateCadence
    *
    * @param QualityUpdateCadence $val The qualityUpdateCadence
    *
    * @return QualityUpdateCatalogEntry
    */
    public function setQualityUpdateCadence($val)
    {
        $this->_propDict["qualityUpdateCadence"] = $val;
        return $this;
    }

    /**
    * Gets the qualityUpdateClassification
    * The classification on the quality update. Possible values are: all, security, nonSecurity, unknownFutureValue. Read-only.
    *
    * @return QualityUpdateClassification|null The qualityUpdateClassification
    */
    public function getQualityUpdateClassification()
    {
        if (array_key_exists("qualityUpdateClassification", $this->_propDict)) {
            if (is_a($this->_propDict["qualityUpdateClassification"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\QualityUpdateClassification") || is_null($this->_propDict["qualityUpdateClassification"])) {
                return $this->_propDict["qualityUpdateClassification"];
            } else {
                $this->_propDict["qualityUpdateClassification"] = new QualityUpdateClassification($this->_propDict["qualityUpdateClassification"]);
                return $this->_propDict["qualityUpdateClassification"];
            }
        }
        return null;
    }

    /**
    * Sets the qualityUpdateClassification
    * The classification on the quality update. Possible values are: all, security, nonSecurity, unknownFutureValue. Read-only.
    *
    * @param QualityUpdateClassification $val The qualityUpdateClassification
    *
    * @return QualityUpdateCatalogEntry
    */
    public function setQualityUpdateClassification($val)
    {
        $this->_propDict["qualityUpdateClassification"] = $val;
        return $this;
    }

    /**
    * Gets the shortName
    *
    * @return string|null The shortName
    */
    public function getShortName()
    {
        if (array_key_exists("shortName", $this->_propDict)) {
            return $this->_propDict["shortName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the shortName
    *
    * @param string $val The shortName
    *
    * @return QualityUpdateCatalogEntry
    */
    public function setShortName($val)
    {
        $this->_propDict["shortName"] = $val;
        return $this;
    }


     /**
     * Gets the productRevisions
     *
     * @return array|null The productRevisions
     */
    public function getProductRevisions()
    {
        if (array_key_exists("productRevisions", $this->_propDict)) {
           return $this->_propDict["productRevisions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the productRevisions
    *
    * @param ProductRevision[] $val The productRevisions
    *
    * @return QualityUpdateCatalogEntry
    */
    public function setProductRevisions($val)
    {
        $this->_propDict["productRevisions"] = $val;
        return $this;
    }

}
