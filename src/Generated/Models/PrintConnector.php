<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrintConnector extends Entity implements Parsable 
{
    /**
     * Instantiates a new PrintConnector and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.printConnector');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintConnector
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrintConnector {
        return new PrintConnector();
    }

    /**
     * Gets the appVersion property value. The connector's version.
     * @return string|null
    */
    public function getAppVersion(): ?string {
        return $this->getBackingStore()->get('appVersion');
    }

    /**
     * Gets the displayName property value. The name of the connector.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appVersion' => fn(ParseNode $n) => $o->setAppVersion($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'fullyQualifiedDomainName' => fn(ParseNode $n) => $o->setFullyQualifiedDomainName($n->getStringValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getObjectValue([PrinterLocation::class, 'createFromDiscriminatorValue'])),
            'operatingSystem' => fn(ParseNode $n) => $o->setOperatingSystem($n->getStringValue()),
            'registeredDateTime' => fn(ParseNode $n) => $o->setRegisteredDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the fullyQualifiedDomainName property value. The connector machine's hostname.
     * @return string|null
    */
    public function getFullyQualifiedDomainName(): ?string {
        return $this->getBackingStore()->get('fullyQualifiedDomainName');
    }

    /**
     * Gets the location property value. The physical and/or organizational location of the connector.
     * @return PrinterLocation|null
    */
    public function getLocation(): ?PrinterLocation {
        return $this->getBackingStore()->get('location');
    }

    /**
     * Gets the operatingSystem property value. The connector machine's operating system version.
     * @return string|null
    */
    public function getOperatingSystem(): ?string {
        return $this->getBackingStore()->get('operatingSystem');
    }

    /**
     * Gets the registeredDateTime property value. The DateTimeOffset when the connector was registered.
     * @return DateTime|null
    */
    public function getRegisteredDateTime(): ?DateTime {
        return $this->getBackingStore()->get('registeredDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appVersion', $this->getAppVersion());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('fullyQualifiedDomainName', $this->getFullyQualifiedDomainName());
        $writer->writeObjectValue('location', $this->getLocation());
        $writer->writeStringValue('operatingSystem', $this->getOperatingSystem());
        $writer->writeDateTimeValue('registeredDateTime', $this->getRegisteredDateTime());
    }

    /**
     * Sets the appVersion property value. The connector's version.
     *  @param string|null $value Value to set for the appVersion property.
    */
    public function setAppVersion(?string $value): void {
        $this->getBackingStore()->set('appVersion', $value);
    }

    /**
     * Sets the displayName property value. The name of the connector.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the fullyQualifiedDomainName property value. The connector machine's hostname.
     *  @param string|null $value Value to set for the fullyQualifiedDomainName property.
    */
    public function setFullyQualifiedDomainName(?string $value): void {
        $this->getBackingStore()->set('fullyQualifiedDomainName', $value);
    }

    /**
     * Sets the location property value. The physical and/or organizational location of the connector.
     *  @param PrinterLocation|null $value Value to set for the location property.
    */
    public function setLocation(?PrinterLocation $value): void {
        $this->getBackingStore()->set('location', $value);
    }

    /**
     * Sets the operatingSystem property value. The connector machine's operating system version.
     *  @param string|null $value Value to set for the operatingSystem property.
    */
    public function setOperatingSystem(?string $value): void {
        $this->getBackingStore()->set('operatingSystem', $value);
    }

    /**
     * Sets the registeredDateTime property value. The DateTimeOffset when the connector was registered.
     *  @param DateTime|null $value Value to set for the registeredDateTime property.
    */
    public function setRegisteredDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('registeredDateTime', $value);
    }

}
