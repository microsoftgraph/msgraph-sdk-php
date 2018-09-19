<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosWebContentFilterSpecificWebsitesAccess File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* IosWebContentFilterSpecificWebsitesAccess class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class IosWebContentFilterSpecificWebsitesAccess extends IosWebContentFilterBase
{

    /**
    * Gets the specificWebsitesOnly
    *
    * @return IosBookmark The specificWebsitesOnly
    */
    public function getSpecificWebsitesOnly()
    {
        if (array_key_exists("specificWebsitesOnly", $this->_propDict)) {
            if (is_a($this->_propDict["specificWebsitesOnly"], "Microsoft\Graph\Beta\Model\IosBookmark")) {
                return $this->_propDict["specificWebsitesOnly"];
            } else {
                $this->_propDict["specificWebsitesOnly"] = new IosBookmark($this->_propDict["specificWebsitesOnly"]);
                return $this->_propDict["specificWebsitesOnly"];
            }
        }
        return null;
    }

    /**
    * Sets the specificWebsitesOnly
    *
    * @param IosBookmark $val The value to assign to the specificWebsitesOnly
    *
    * @return IosWebContentFilterSpecificWebsitesAccess The IosWebContentFilterSpecificWebsitesAccess
    */
    public function setSpecificWebsitesOnly($val)
    {
        $this->_propDict["specificWebsitesOnly"] = $val;
         return $this;
    }

    /**
    * Gets the websiteList
    *
    * @return IosBookmark The websiteList
    */
    public function getWebsiteList()
    {
        if (array_key_exists("websiteList", $this->_propDict)) {
            if (is_a($this->_propDict["websiteList"], "Microsoft\Graph\Beta\Model\IosBookmark")) {
                return $this->_propDict["websiteList"];
            } else {
                $this->_propDict["websiteList"] = new IosBookmark($this->_propDict["websiteList"]);
                return $this->_propDict["websiteList"];
            }
        }
        return null;
    }

    /**
    * Sets the websiteList
    *
    * @param IosBookmark $val The value to assign to the websiteList
    *
    * @return IosWebContentFilterSpecificWebsitesAccess The IosWebContentFilterSpecificWebsitesAccess
    */
    public function setWebsiteList($val)
    {
        $this->_propDict["websiteList"] = $val;
         return $this;
    }
}
