<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SubjectRightsRequestEnumeratedSiteLocation File
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
* SubjectRightsRequestEnumeratedSiteLocation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SubjectRightsRequestEnumeratedSiteLocation extends SubjectRightsRequestSiteLocation
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.subjectRightsRequestEnumeratedSiteLocation");
    }

    /**
    * Gets the urls
    * Collection of site URLs that should be included. Includes the URL of each site, for example, https://www.contoso.com/site1.
    *
    * @return string|null The urls
    */
    public function getUrls()
    {
        if (array_key_exists("urls", $this->_propDict)) {
            return $this->_propDict["urls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the urls
    * Collection of site URLs that should be included. Includes the URL of each site, for example, https://www.contoso.com/site1.
    *
    * @param string $val The value of the urls
    *
    * @return SubjectRightsRequestEnumeratedSiteLocation
    */
    public function setUrls($val)
    {
        $this->_propDict["urls"] = $val;
        return $this;
    }
}
