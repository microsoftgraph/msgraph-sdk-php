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
    * @return ProductRevision
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the osBuild
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
