<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EncryptedAwsStorageBucketFinding File
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
* EncryptedAwsStorageBucketFinding class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EncryptedAwsStorageBucketFinding extends Finding
{
    /**
    * Gets the accessibility
    *
    * @return AwsAccessType|null The accessibility
    */
    public function getAccessibility()
    {
        if (array_key_exists("accessibility", $this->_propDict)) {
            if (is_a($this->_propDict["accessibility"], "\Beta\Microsoft\Graph\Model\AwsAccessType") || is_null($this->_propDict["accessibility"])) {
                return $this->_propDict["accessibility"];
            } else {
                $this->_propDict["accessibility"] = new AwsAccessType($this->_propDict["accessibility"]);
                return $this->_propDict["accessibility"];
            }
        }
        return null;
    }

    /**
    * Sets the accessibility
    *
    * @param AwsAccessType $val The accessibility
    *
    * @return EncryptedAwsStorageBucketFinding
    */
    public function setAccessibility($val)
    {
        $this->_propDict["accessibility"] = $val;
        return $this;
    }

    /**
    * Gets the storageBucket
    *
    * @return AuthorizationSystemResource|null The storageBucket
    */
    public function getStorageBucket()
    {
        if (array_key_exists("storageBucket", $this->_propDict)) {
            if (is_a($this->_propDict["storageBucket"], "\Beta\Microsoft\Graph\Model\AuthorizationSystemResource") || is_null($this->_propDict["storageBucket"])) {
                return $this->_propDict["storageBucket"];
            } else {
                $this->_propDict["storageBucket"] = new AuthorizationSystemResource($this->_propDict["storageBucket"]);
                return $this->_propDict["storageBucket"];
            }
        }
        return null;
    }

    /**
    * Sets the storageBucket
    *
    * @param AuthorizationSystemResource $val The storageBucket
    *
    * @return EncryptedAwsStorageBucketFinding
    */
    public function setStorageBucket($val)
    {
        $this->_propDict["storageBucket"] = $val;
        return $this;
    }

}
