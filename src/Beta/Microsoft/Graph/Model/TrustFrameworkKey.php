<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TrustFrameworkKey File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* TrustFrameworkKey class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TrustFrameworkKey extends Entity
{
    /**
    * Gets the d
    *
    * @return string The d
    */
    public function getD()
    {
        if (array_key_exists("d", $this->_propDict)) {
            return $this->_propDict["d"];
        } else {
            return null;
        }
    }

    /**
    * Sets the d
    *
    * @param string $val The value of the d
    *
    * @return TrustFrameworkKey
    */
    public function setD($val)
    {
        $this->_propDict["d"] = $val;
        return $this;
    }
    /**
    * Gets the dp
    *
    * @return string The dp
    */
    public function getDp()
    {
        if (array_key_exists("dp", $this->_propDict)) {
            return $this->_propDict["dp"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dp
    *
    * @param string $val The value of the dp
    *
    * @return TrustFrameworkKey
    */
    public function setDp($val)
    {
        $this->_propDict["dp"] = $val;
        return $this;
    }
    /**
    * Gets the dq
    *
    * @return string The dq
    */
    public function getDq()
    {
        if (array_key_exists("dq", $this->_propDict)) {
            return $this->_propDict["dq"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dq
    *
    * @param string $val The value of the dq
    *
    * @return TrustFrameworkKey
    */
    public function setDq($val)
    {
        $this->_propDict["dq"] = $val;
        return $this;
    }
    /**
    * Gets the e
    *
    * @return string The e
    */
    public function getE()
    {
        if (array_key_exists("e", $this->_propDict)) {
            return $this->_propDict["e"];
        } else {
            return null;
        }
    }

    /**
    * Sets the e
    *
    * @param string $val The value of the e
    *
    * @return TrustFrameworkKey
    */
    public function setE($val)
    {
        $this->_propDict["e"] = $val;
        return $this;
    }
    /**
    * Gets the exp
    *
    * @return int The exp
    */
    public function getExp()
    {
        if (array_key_exists("exp", $this->_propDict)) {
            return $this->_propDict["exp"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exp
    *
    * @param int $val The value of the exp
    *
    * @return TrustFrameworkKey
    */
    public function setExp($val)
    {
        $this->_propDict["exp"] = $val;
        return $this;
    }
    /**
    * Gets the k
    *
    * @return string The k
    */
    public function getK()
    {
        if (array_key_exists("k", $this->_propDict)) {
            return $this->_propDict["k"];
        } else {
            return null;
        }
    }

    /**
    * Sets the k
    *
    * @param string $val The value of the k
    *
    * @return TrustFrameworkKey
    */
    public function setK($val)
    {
        $this->_propDict["k"] = $val;
        return $this;
    }
    /**
    * Gets the kid
    *
    * @return string The kid
    */
    public function getKid()
    {
        if (array_key_exists("kid", $this->_propDict)) {
            return $this->_propDict["kid"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kid
    *
    * @param string $val The value of the kid
    *
    * @return TrustFrameworkKey
    */
    public function setKid($val)
    {
        $this->_propDict["kid"] = $val;
        return $this;
    }
    /**
    * Gets the kty
    *
    * @return string The kty
    */
    public function getKty()
    {
        if (array_key_exists("kty", $this->_propDict)) {
            return $this->_propDict["kty"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kty
    *
    * @param string $val The value of the kty
    *
    * @return TrustFrameworkKey
    */
    public function setKty($val)
    {
        $this->_propDict["kty"] = $val;
        return $this;
    }
    /**
    * Gets the n
    *
    * @return string The n
    */
    public function getN()
    {
        if (array_key_exists("n", $this->_propDict)) {
            return $this->_propDict["n"];
        } else {
            return null;
        }
    }

    /**
    * Sets the n
    *
    * @param string $val The value of the n
    *
    * @return TrustFrameworkKey
    */
    public function setN($val)
    {
        $this->_propDict["n"] = $val;
        return $this;
    }
    /**
    * Gets the nbf
    *
    * @return int The nbf
    */
    public function getNbf()
    {
        if (array_key_exists("nbf", $this->_propDict)) {
            return $this->_propDict["nbf"];
        } else {
            return null;
        }
    }

    /**
    * Sets the nbf
    *
    * @param int $val The value of the nbf
    *
    * @return TrustFrameworkKey
    */
    public function setNbf($val)
    {
        $this->_propDict["nbf"] = $val;
        return $this;
    }
    /**
    * Gets the p
    *
    * @return string The p
    */
    public function getP()
    {
        if (array_key_exists("p", $this->_propDict)) {
            return $this->_propDict["p"];
        } else {
            return null;
        }
    }

    /**
    * Sets the p
    *
    * @param string $val The value of the p
    *
    * @return TrustFrameworkKey
    */
    public function setP($val)
    {
        $this->_propDict["p"] = $val;
        return $this;
    }
    /**
    * Gets the q
    *
    * @return string The q
    */
    public function getQ()
    {
        if (array_key_exists("q", $this->_propDict)) {
            return $this->_propDict["q"];
        } else {
            return null;
        }
    }

    /**
    * Sets the q
    *
    * @param string $val The value of the q
    *
    * @return TrustFrameworkKey
    */
    public function setQ($val)
    {
        $this->_propDict["q"] = $val;
        return $this;
    }
    /**
    * Gets the qi
    *
    * @return string The qi
    */
    public function getQi()
    {
        if (array_key_exists("qi", $this->_propDict)) {
            return $this->_propDict["qi"];
        } else {
            return null;
        }
    }

    /**
    * Sets the qi
    *
    * @param string $val The value of the qi
    *
    * @return TrustFrameworkKey
    */
    public function setQi($val)
    {
        $this->_propDict["qi"] = $val;
        return $this;
    }
    /**
    * Gets the use
    *
    * @return string The use
    */
    public function getUse()
    {
        if (array_key_exists("use", $this->_propDict)) {
            return $this->_propDict["use"];
        } else {
            return null;
        }
    }

    /**
    * Sets the use
    *
    * @param string $val The value of the use
    *
    * @return TrustFrameworkKey
    */
    public function setUse($val)
    {
        $this->_propDict["use"] = $val;
        return $this;
    }
    /**
    * Gets the x5c
    *
    * @return string The x5c
    */
    public function getX5c()
    {
        if (array_key_exists("x5c", $this->_propDict)) {
            return $this->_propDict["x5c"];
        } else {
            return null;
        }
    }

    /**
    * Sets the x5c
    *
    * @param string $val The value of the x5c
    *
    * @return TrustFrameworkKey
    */
    public function setX5c($val)
    {
        $this->_propDict["x5c"] = $val;
        return $this;
    }
    /**
    * Gets the x5t
    *
    * @return string The x5t
    */
    public function getX5t()
    {
        if (array_key_exists("x5t", $this->_propDict)) {
            return $this->_propDict["x5t"];
        } else {
            return null;
        }
    }

    /**
    * Sets the x5t
    *
    * @param string $val The value of the x5t
    *
    * @return TrustFrameworkKey
    */
    public function setX5t($val)
    {
        $this->_propDict["x5t"] = $val;
        return $this;
    }
}
