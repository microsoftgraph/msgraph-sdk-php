<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProxiedDomain implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $ipAddressOrFQDN The IP address or FQDN
    */
    private ?string $ipAddressOrFQDN = null;
    
    /**
     * @var string|null $proxy Proxy IP or FQDN
    */
    private ?string $proxy = null;
    
    /**
     * Instantiates a new proxiedDomain and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProxiedDomain
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProxiedDomain {
        return new ProxiedDomain();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'ipAddressOrFQDN' => function (ParseNode $n) use ($o) { $o->setIpAddressOrFQDN($n->getStringValue()); },
            'proxy' => function (ParseNode $n) use ($o) { $o->setProxy($n->getStringValue()); },
        ];
    }

    /**
     * Gets the ipAddressOrFQDN property value. The IP address or FQDN
     * @return string|null
    */
    public function getIpAddressOrFQDN(): ?string {
        return $this->ipAddressOrFQDN;
    }

    /**
     * Gets the proxy property value. Proxy IP or FQDN
     * @return string|null
    */
    public function getProxy(): ?string {
        return $this->proxy;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('ipAddressOrFQDN', $this->ipAddressOrFQDN);
        $writer->writeStringValue('proxy', $this->proxy);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the ipAddressOrFQDN property value. The IP address or FQDN
     *  @param string|null $value Value to set for the ipAddressOrFQDN property.
    */
    public function setIpAddressOrFQDN(?string $value ): void {
        $this->ipAddressOrFQDN = $value;
    }

    /**
     * Sets the proxy property value. Proxy IP or FQDN
     *  @param string|null $value Value to set for the proxy property.
    */
    public function setProxy(?string $value ): void {
        $this->proxy = $value;
    }

}
