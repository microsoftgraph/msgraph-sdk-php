<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CitationTemplate File
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
* CitationTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CitationTemplate extends FilePlanDescriptorTemplate
{
    /**
    * Gets the citationJurisdiction
    * Represents the jurisdiction or agency that published the citation.
    *
    * @return string|null The citationJurisdiction
    */
    public function getCitationJurisdiction()
    {
        if (array_key_exists("citationJurisdiction", $this->_propDict)) {
            return $this->_propDict["citationJurisdiction"];
        } else {
            return null;
        }
    }

    /**
    * Sets the citationJurisdiction
    * Represents the jurisdiction or agency that published the citation.
    *
    * @param string $val The citationJurisdiction
    *
    * @return CitationTemplate
    */
    public function setCitationJurisdiction($val)
    {
        $this->_propDict["citationJurisdiction"] = $val;
        return $this;
    }

    /**
    * Gets the citationUrl
    * Represents the URL to the published citation.
    *
    * @return string|null The citationUrl
    */
    public function getCitationUrl()
    {
        if (array_key_exists("citationUrl", $this->_propDict)) {
            return $this->_propDict["citationUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the citationUrl
    * Represents the URL to the published citation.
    *
    * @param string $val The citationUrl
    *
    * @return CitationTemplate
    */
    public function setCitationUrl($val)
    {
        $this->_propDict["citationUrl"] = $val;
        return $this;
    }

}
