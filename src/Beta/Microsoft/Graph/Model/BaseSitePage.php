<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BaseSitePage File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* BaseSitePage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BaseSitePage extends BaseItem
{
    /**
    * Gets the pageLayout
    * The name of the page layout of the page. The possible values are: microsoftReserved, article, home, unknownFutureValue.
    *
    * @return PageLayoutType|null The pageLayout
    */
    public function getPageLayout()
    {
        if (array_key_exists("pageLayout", $this->_propDict)) {
            if (is_a($this->_propDict["pageLayout"], "\Beta\Microsoft\Graph\Model\PageLayoutType") || is_null($this->_propDict["pageLayout"])) {
                return $this->_propDict["pageLayout"];
            } else {
                $this->_propDict["pageLayout"] = new PageLayoutType($this->_propDict["pageLayout"]);
                return $this->_propDict["pageLayout"];
            }
        }
        return null;
    }

    /**
    * Sets the pageLayout
    * The name of the page layout of the page. The possible values are: microsoftReserved, article, home, unknownFutureValue.
    *
    * @param PageLayoutType $val The pageLayout
    *
    * @return BaseSitePage
    */
    public function setPageLayout($val)
    {
        $this->_propDict["pageLayout"] = $val;
        return $this;
    }

    /**
    * Gets the publishingState
    * The publishing status and the MM.mm version of the page.
    *
    * @return PublicationFacet|null The publishingState
    */
    public function getPublishingState()
    {
        if (array_key_exists("publishingState", $this->_propDict)) {
            if (is_a($this->_propDict["publishingState"], "\Beta\Microsoft\Graph\Model\PublicationFacet") || is_null($this->_propDict["publishingState"])) {
                return $this->_propDict["publishingState"];
            } else {
                $this->_propDict["publishingState"] = new PublicationFacet($this->_propDict["publishingState"]);
                return $this->_propDict["publishingState"];
            }
        }
        return null;
    }

    /**
    * Sets the publishingState
    * The publishing status and the MM.mm version of the page.
    *
    * @param PublicationFacet $val The publishingState
    *
    * @return BaseSitePage
    */
    public function setPublishingState($val)
    {
        $this->_propDict["publishingState"] = $val;
        return $this;
    }

    /**
    * Gets the title
    * Title of the sitePage.
    *
    * @return string|null The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }

    /**
    * Sets the title
    * Title of the sitePage.
    *
    * @param string $val The title
    *
    * @return BaseSitePage
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }

}
