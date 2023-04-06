<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsAppX extends MobileLobApp implements Parsable 
{
    /**
     * Instantiates a new WindowsAppX and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsAppX');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsAppX
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsAppX {
        return new WindowsAppX();
    }

    /**
     * Gets the applicableArchitectures property value. Contains properties for Windows architecture.
     * @return WindowsArchitecture|null
    */
    public function getApplicableArchitectures(): ?WindowsArchitecture {
        return $this->getBackingStore()->get('applicableArchitectures');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicableArchitectures' => fn(ParseNode $n) => $o->setApplicableArchitectures($n->getEnumValue(WindowsArchitecture::class)),
            'identityName' => fn(ParseNode $n) => $o->setIdentityName($n->getStringValue()),
            'identityPublisherHash' => fn(ParseNode $n) => $o->setIdentityPublisherHash($n->getStringValue()),
            'identityResourceIdentifier' => fn(ParseNode $n) => $o->setIdentityResourceIdentifier($n->getStringValue()),
            'identityVersion' => fn(ParseNode $n) => $o->setIdentityVersion($n->getStringValue()),
            'isBundle' => fn(ParseNode $n) => $o->setIsBundle($n->getBooleanValue()),
            'minimumSupportedOperatingSystem' => fn(ParseNode $n) => $o->setMinimumSupportedOperatingSystem($n->getObjectValue([WindowsMinimumOperatingSystem::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the identityName property value. The identity name of the uploaded app package. For example: 'Contoso.DemoApp'.
     * @return string|null
    */
    public function getIdentityName(): ?string {
        return $this->getBackingStore()->get('identityName');
    }

    /**
     * Gets the identityPublisherHash property value. The identity publisher hash of the uploaded app package. This is the hash of the publisher from the manifest. For example: 'AB82CD0XYZ'.
     * @return string|null
    */
    public function getIdentityPublisherHash(): ?string {
        return $this->getBackingStore()->get('identityPublisherHash');
    }

    /**
     * Gets the identityResourceIdentifier property value. The identity resource identifier of the uploaded app package. For example: 'TestResourceId'.
     * @return string|null
    */
    public function getIdentityResourceIdentifier(): ?string {
        return $this->getBackingStore()->get('identityResourceIdentifier');
    }

    /**
     * Gets the identityVersion property value. The identity version of the uploaded app package. For example: '1.0.0.0'.
     * @return string|null
    */
    public function getIdentityVersion(): ?string {
        return $this->getBackingStore()->get('identityVersion');
    }

    /**
     * Gets the isBundle property value. When TRUE, indicates that the app is a bundle. When FALSE, indicates that the app is not a bundle. By default, property is set to FALSE.
     * @return bool|null
    */
    public function getIsBundle(): ?bool {
        return $this->getBackingStore()->get('isBundle');
    }

    /**
     * Gets the minimumSupportedOperatingSystem property value. The minimum operating system required for a Windows mobile app.
     * @return WindowsMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?WindowsMinimumOperatingSystem {
        return $this->getBackingStore()->get('minimumSupportedOperatingSystem');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('applicableArchitectures', $this->getApplicableArchitectures());
        $writer->writeStringValue('identityName', $this->getIdentityName());
        $writer->writeStringValue('identityPublisherHash', $this->getIdentityPublisherHash());
        $writer->writeStringValue('identityResourceIdentifier', $this->getIdentityResourceIdentifier());
        $writer->writeStringValue('identityVersion', $this->getIdentityVersion());
        $writer->writeBooleanValue('isBundle', $this->getIsBundle());
        $writer->writeObjectValue('minimumSupportedOperatingSystem', $this->getMinimumSupportedOperatingSystem());
    }

    /**
     * Sets the applicableArchitectures property value. Contains properties for Windows architecture.
     * @param WindowsArchitecture|null $value Value to set for the applicableArchitectures property.
    */
    public function setApplicableArchitectures(?WindowsArchitecture $value): void {
        $this->getBackingStore()->set('applicableArchitectures', $value);
    }

    /**
     * Sets the identityName property value. The identity name of the uploaded app package. For example: 'Contoso.DemoApp'.
     * @param string|null $value Value to set for the identityName property.
    */
    public function setIdentityName(?string $value): void {
        $this->getBackingStore()->set('identityName', $value);
    }

    /**
     * Sets the identityPublisherHash property value. The identity publisher hash of the uploaded app package. This is the hash of the publisher from the manifest. For example: 'AB82CD0XYZ'.
     * @param string|null $value Value to set for the identityPublisherHash property.
    */
    public function setIdentityPublisherHash(?string $value): void {
        $this->getBackingStore()->set('identityPublisherHash', $value);
    }

    /**
     * Sets the identityResourceIdentifier property value. The identity resource identifier of the uploaded app package. For example: 'TestResourceId'.
     * @param string|null $value Value to set for the identityResourceIdentifier property.
    */
    public function setIdentityResourceIdentifier(?string $value): void {
        $this->getBackingStore()->set('identityResourceIdentifier', $value);
    }

    /**
     * Sets the identityVersion property value. The identity version of the uploaded app package. For example: '1.0.0.0'.
     * @param string|null $value Value to set for the identityVersion property.
    */
    public function setIdentityVersion(?string $value): void {
        $this->getBackingStore()->set('identityVersion', $value);
    }

    /**
     * Sets the isBundle property value. When TRUE, indicates that the app is a bundle. When FALSE, indicates that the app is not a bundle. By default, property is set to FALSE.
     * @param bool|null $value Value to set for the isBundle property.
    */
    public function setIsBundle(?bool $value): void {
        $this->getBackingStore()->set('isBundle', $value);
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. The minimum operating system required for a Windows mobile app.
     * @param WindowsMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?WindowsMinimumOperatingSystem $value): void {
        $this->getBackingStore()->set('minimumSupportedOperatingSystem', $value);
    }

}
