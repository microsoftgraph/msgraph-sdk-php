<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchResult File
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
* SearchResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SearchResult extends Entity
{
    /**
    * Gets the onClickTelemetryUrl
    *
    * @return string The onClickTelemetryUrl
    */
    public function getOnClickTelemetryUrl()
    {
        if (array_key_exists("onClickTelemetryUrl", $this->_propDict)) {
            return $this->_propDict["onClickTelemetryUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onClickTelemetryUrl
    *
    * @param string $val The value of the onClickTelemetryUrl
    *
    * @return SearchResult
    */
    public function setOnClickTelemetryUrl($val)
    {
        $this->_propDict["onClickTelemetryUrl"] = $val;
        return $this;
    }
}
