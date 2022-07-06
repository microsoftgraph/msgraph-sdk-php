<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SiteSource File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;

/**
* SiteSource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SiteSource extends DataSource
{
    /**
    * Gets the site
    * The SharePoint site associated with the siteSource.
    *
    * @return \Microsoft\Graph\Model\Site|null The site
    */
    public function getSite()
    {
        if (array_key_exists("site", $this->_propDict)) {
            if (is_a($this->_propDict["site"], "\Microsoft\Graph\Model\Site") || is_null($this->_propDict["site"])) {
                return $this->_propDict["site"];
            } else {
                $this->_propDict["site"] = new \Microsoft\Graph\Model\Site($this->_propDict["site"]);
                return $this->_propDict["site"];
            }
        }
        return null;
    }

    /**
    * Sets the site
    * The SharePoint site associated with the siteSource.
    *
    * @param \Microsoft\Graph\Model\Site $val The site
    *
    * @return SiteSource
    */
    public function setSite($val)
    {
        $this->_propDict["site"] = $val;
        return $this;
    }

}
