<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AkamaiWebApplicationFirewallProvider extends WebApplicationFirewallProvider implements Parsable 
{
    /**
     * Instantiates a new AkamaiWebApplicationFirewallProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.akamaiWebApplicationFirewallProvider');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AkamaiWebApplicationFirewallProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AkamaiWebApplicationFirewallProvider {
        return new AkamaiWebApplicationFirewallProvider();
    }

    /**
     * Gets the accessToken property value. Akamai API access token used to authenticate to the Akamai account. Contact your Akamai Customer Success Manager for assistance with your accessToken.
     * @return string|null
    */
    public function getAccessToken(): ?string {
        $val = $this->getBackingStore()->get('accessToken');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessToken'");
    }

    /**
     * Gets the clientSecret property value. Akamai API client secret used in conjunction with the client token and access token for authentication. Contact your Akamai Customer Success Manager for assistance with this information.
     * @return string|null
    */
    public function getClientSecret(): ?string {
        $val = $this->getBackingStore()->get('clientSecret');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientSecret'");
    }

    /**
     * Gets the clientToken property value. Akamai API client token used for authentication to the Akamai account. Contact your Akamai Customer Success Manager for assistance with this information.
     * @return string|null
    */
    public function getClientToken(): ?string {
        $val = $this->getBackingStore()->get('clientToken');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientToken'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessToken' => fn(ParseNode $n) => $o->setAccessToken($n->getStringValue()),
            'clientSecret' => fn(ParseNode $n) => $o->setClientSecret($n->getStringValue()),
            'clientToken' => fn(ParseNode $n) => $o->setClientToken($n->getStringValue()),
            'hostPrefix' => fn(ParseNode $n) => $o->setHostPrefix($n->getStringValue()),
        ]);
    }

    /**
     * Gets the hostPrefix property value. Prefix used to identify the host or domain in Akamai configuration operations. This value may be required for certain API calls or configuration scenarios.
     * @return string|null
    */
    public function getHostPrefix(): ?string {
        $val = $this->getBackingStore()->get('hostPrefix');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hostPrefix'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accessToken', $this->getAccessToken());
        $writer->writeStringValue('clientSecret', $this->getClientSecret());
        $writer->writeStringValue('clientToken', $this->getClientToken());
        $writer->writeStringValue('hostPrefix', $this->getHostPrefix());
    }

    /**
     * Sets the accessToken property value. Akamai API access token used to authenticate to the Akamai account. Contact your Akamai Customer Success Manager for assistance with your accessToken.
     * @param string|null $value Value to set for the accessToken property.
    */
    public function setAccessToken(?string $value): void {
        $this->getBackingStore()->set('accessToken', $value);
    }

    /**
     * Sets the clientSecret property value. Akamai API client secret used in conjunction with the client token and access token for authentication. Contact your Akamai Customer Success Manager for assistance with this information.
     * @param string|null $value Value to set for the clientSecret property.
    */
    public function setClientSecret(?string $value): void {
        $this->getBackingStore()->set('clientSecret', $value);
    }

    /**
     * Sets the clientToken property value. Akamai API client token used for authentication to the Akamai account. Contact your Akamai Customer Success Manager for assistance with this information.
     * @param string|null $value Value to set for the clientToken property.
    */
    public function setClientToken(?string $value): void {
        $this->getBackingStore()->set('clientToken', $value);
    }

    /**
     * Sets the hostPrefix property value. Prefix used to identify the host or domain in Akamai configuration operations. This value may be required for certain API calls or configuration scenarios.
     * @param string|null $value Value to set for the hostPrefix property.
    */
    public function setHostPrefix(?string $value): void {
        $this->getBackingStore()->set('hostPrefix', $value);
    }

}
