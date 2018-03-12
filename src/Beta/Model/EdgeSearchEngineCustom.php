<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EdgeSearchEngineCustom File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* EdgeSearchEngineCustom class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class EdgeSearchEngineCustom extends EdgeSearchEngineBase
{
    /**
    * Gets the edgeSearchEngineOpenSearchXmlUrl
    * Points to a https link containing the OpenSearch xml file that contains, at minimum, the short name and the URL to the search Engine.
    *
    * @return string The edgeSearchEngineOpenSearchXmlUrl
    */
    public function getEdgeSearchEngineOpenSearchXmlUrl()
    {
        if (array_key_exists("edgeSearchEngineOpenSearchXmlUrl", $this->_propDict)) {
            return $this->_propDict["edgeSearchEngineOpenSearchXmlUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the edgeSearchEngineOpenSearchXmlUrl
    * Points to a https link containing the OpenSearch xml file that contains, at minimum, the short name and the URL to the search Engine.
    *
    * @param string $val The value of the edgeSearchEngineOpenSearchXmlUrl
    *
    * @return EdgeSearchEngineCustom
    */
    public function setEdgeSearchEngineOpenSearchXmlUrl($val)
    {
        $this->_propDict["edgeSearchEngineOpenSearchXmlUrl"] = $val;
        return $this;
    }
}
