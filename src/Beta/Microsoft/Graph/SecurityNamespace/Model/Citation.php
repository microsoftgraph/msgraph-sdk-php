<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Citation File
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
* Citation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Citation extends FilePlanDescriptorBase
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
    * @param string $val The value of the citationJurisdiction
    *
    * @return Citation
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
    * @param string $val The value of the citationUrl
    *
    * @return Citation
    */
    public function setCitationUrl($val)
    {
        $this->_propDict["citationUrl"] = $val;
        return $this;
    }
}
