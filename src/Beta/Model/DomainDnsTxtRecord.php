<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DomainDnsTxtRecord File
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
* DomainDnsTxtRecord class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DomainDnsTxtRecord extends DomainDnsRecord
{
    /**
    * Gets the text
    * Value used when configuring the text property at the DNS host.
    *
    * @return string The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            return $this->_propDict["text"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the text
    * Value used when configuring the text property at the DNS host.
    *
    * @param string $val The text
    *
    * @return DomainDnsTxtRecord
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
        return $this;
    }
    
}