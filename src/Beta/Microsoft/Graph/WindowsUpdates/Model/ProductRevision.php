<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProductRevision File
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
* ProductRevision class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProductRevision extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the displayName
    * The display name of the content. Read-only.
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
    * The display name of the content. Read-only.
    *
    * @param string $val The displayName
    *
    * @return ProductRevision
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the osBuild
    * The version details of the product revision. Read-only.
    *
    * @return BuildVersionDetails|null The osBuild
    */
    public function getOsBuild()
    {
        if (array_key_exists("osBuild", $this->_propDict)) {
            if (is_a($this->_propDict["osBuild"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\BuildVersionDetails") || is_null($this->_propDict["osBuild"])) {
                return $this->_propDict["osBuild"];
            } else {
                $this->_propDict["osBuild"] = new BuildVersionDetails($this->_propDict["osBuild"]);
                return $this->_propDict["osBuild"];
            }
        }
        return null;
    }

    /**
    * Sets the osBuild
    * The version details of the product revision. Read-only.
    *
    * @param BuildVersionDetails $val The osBuild
    *
    * @return ProductRevision
    */
    public function setOsBuild($val)
    {
        $this->_propDict["osBuild"] = $val;
        return $this;
    }

    /**
    * Gets the product
    * The product of the revision. Possible values are: Windows 10, Windows 11. Read-only.
    *
    * @return string|null The product
    */
    public function getProduct()
    {
        if (array_key_exists("product", $this->_propDict)) {
            return $this->_propDict["product"];
        } else {
            return null;
        }
    }

    /**
    * Sets the product
    * The product of the revision. Possible values are: Windows 10, Windows 11. Read-only.
    *
    * @param string $val The product
    *
    * @return ProductRevision
    */
    public function setProduct($val)
    {
        $this->_propDict["product"] = $val;
        return $this;
    }

    /**
    * Gets the releaseDateTime
    * The release date for the content. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @return \DateTime|null The releaseDateTime
    */
    public function getReleaseDateTime()
    {
        if (array_key_exists("releaseDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["releaseDateTime"], "\DateTime") || is_null($this->_propDict["releaseDateTime"])) {
                return $this->_propDict["releaseDateTime"];
            } else {
                $this->_propDict["releaseDateTime"] = new \DateTime($this->_propDict["releaseDateTime"]);
                return $this->_propDict["releaseDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the releaseDateTime
    * The release date for the content. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The releaseDateTime
    *
    * @return ProductRevision
    */
    public function setReleaseDateTime($val)
    {
        $this->_propDict["releaseDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the version
    * The version of the feature update. Read-only.
    *
    * @return string|null The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }

    /**
    * Sets the version
    * The version of the feature update. Read-only.
    *
    * @param string $val The version
    *
    * @return ProductRevision
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }

    /**
    * Gets the knowledgeBaseArticle
    * The knowledge base article associated with the product revision.
    *
    * @return KnowledgeBaseArticle|null The knowledgeBaseArticle
    */
    public function getKnowledgeBaseArticle()
    {
        if (array_key_exists("knowledgeBaseArticle", $this->_propDict)) {
            if (is_a($this->_propDict["knowledgeBaseArticle"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\KnowledgeBaseArticle") || is_null($this->_propDict["knowledgeBaseArticle"])) {
                return $this->_propDict["knowledgeBaseArticle"];
            } else {
                $this->_propDict["knowledgeBaseArticle"] = new KnowledgeBaseArticle($this->_propDict["knowledgeBaseArticle"]);
                return $this->_propDict["knowledgeBaseArticle"];
            }
        }
        return null;
    }

    /**
    * Sets the knowledgeBaseArticle
    * The knowledge base article associated with the product revision.
    *
    * @param KnowledgeBaseArticle $val The knowledgeBaseArticle
    *
    * @return ProductRevision
    */
    public function setKnowledgeBaseArticle($val)
    {
        $this->_propDict["knowledgeBaseArticle"] = $val;
        return $this;
    }

}
