<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationLinkResource File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* EducationLinkResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EducationLinkResource extends EducationResource
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.educationLinkResource");
    }

    /**
    * Gets the link
    *
    * @return string The link
    */
    public function getLink()
    {
        if (array_key_exists("link", $this->_propDict)) {
            return $this->_propDict["link"];
        } else {
            return null;
        }
    }

    /**
    * Sets the link
    *
    * @param string $val The value of the link
    *
    * @return EducationLinkResource
    */
    public function setLink($val)
    {
        $this->_propDict["link"] = $val;
        return $this;
    }
}
