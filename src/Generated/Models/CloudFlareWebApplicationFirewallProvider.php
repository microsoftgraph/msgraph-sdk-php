<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudFlareWebApplicationFirewallProvider extends WebApplicationFirewallProvider implements Parsable 
{
    /**
     * Instantiates a new CloudFlareWebApplicationFirewallProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudFlareWebApplicationFirewallProvider');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudFlareWebApplicationFirewallProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudFlareWebApplicationFirewallProvider {
        return new CloudFlareWebApplicationFirewallProvider();
    }

    /**
     * Gets the apiToken property value. Cloudflare API token or credential used by Microsoft services to authenticate to the Cloudflare account. Contact your Cloudflare Customer Success Manager for assistance with your apitoken.
     * @return string|null
    */
    public function getApiToken(): ?string {
        $val = $this->getBackingStore()->get('apiToken');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'apiToken'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'apiToken' => fn(ParseNode $n) => $o->setApiToken($n->getStringValue()),
            'zoneId' => fn(ParseNode $n) => $o->setZoneId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the zoneId property value. Default Cloudflare Zone ID associated with this provider configuration. This ID identifies the DNS zone in Cloudflare that is commonly used for verification and configuration operations for the provider.
     * @return string|null
    */
    public function getZoneId(): ?string {
        $val = $this->getBackingStore()->get('zoneId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'zoneId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('apiToken', $this->getApiToken());
        $writer->writeStringValue('zoneId', $this->getZoneId());
    }

    /**
     * Sets the apiToken property value. Cloudflare API token or credential used by Microsoft services to authenticate to the Cloudflare account. Contact your Cloudflare Customer Success Manager for assistance with your apitoken.
     * @param string|null $value Value to set for the apiToken property.
    */
    public function setApiToken(?string $value): void {
        $this->getBackingStore()->set('apiToken', $value);
    }

    /**
     * Sets the zoneId property value. Default Cloudflare Zone ID associated with this provider configuration. This ID identifies the DNS zone in Cloudflare that is commonly used for verification and configuration operations for the provider.
     * @param string|null $value Value to set for the zoneId property.
    */
    public function setZoneId(?string $value): void {
        $this->getBackingStore()->set('zoneId', $value);
    }

}
