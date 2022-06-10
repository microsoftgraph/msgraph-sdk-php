<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsInformationProtectionProxiedDomainCollection implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName Display name
    */
    private ?string $displayName = null;
    
    /**
     * @var array<ProxiedDomain>|null $proxiedDomains Collection of proxied domains
    */
    private ?array $proxiedDomains = null;
    
    /**
     * Instantiates a new windowsInformationProtectionProxiedDomainCollection and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsInformationProtectionProxiedDomainCollection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsInformationProtectionProxiedDomainCollection {
        return new WindowsInformationProtectionProxiedDomainCollection();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. Display name
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'proxiedDomains' => function (ParseNode $n) use ($o) { $o->setProxiedDomains($n->getCollectionOfObjectValues(array(ProxiedDomain::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the proxiedDomains property value. Collection of proxied domains
     * @return array<ProxiedDomain>|null
    */
    public function getProxiedDomains(): ?array {
        return $this->proxiedDomains;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('proxiedDomains', $this->proxiedDomains);
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
     * Sets the displayName property value. Display name
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the proxiedDomains property value. Collection of proxied domains
     *  @param array<ProxiedDomain>|null $value Value to set for the proxiedDomains property.
    */
    public function setProxiedDomains(?array $value ): void {
        $this->proxiedDomains = $value;
    }

}
