<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrintConnector extends Entity implements Parsable 
{
    /**
     * @var string|null $appVersion The connector's version.
    */
    private ?string $appVersion = null;
    
    /**
     * @var string|null $displayName The name of the connector.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $fullyQualifiedDomainName The connector machine's hostname.
    */
    private ?string $fullyQualifiedDomainName = null;
    
    /**
     * @var PrinterLocation|null $location The physical and/or organizational location of the connector.
    */
    private ?PrinterLocation $location = null;
    
    /**
     * @var string|null $operatingSystem The connector machine's operating system version.
    */
    private ?string $operatingSystem = null;
    
    /**
     * @var DateTime|null $registeredDateTime The DateTimeOffset when the connector was registered.
    */
    private ?DateTime $registeredDateTime = null;
    
    /**
     * Instantiates a new printConnector and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->appVersion;
    }

    /**
     * Gets the displayName property value. The name of the connector.
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
        return array_merge(parent::getFieldDeserializers(), [
            'appVersion' => function (ParseNode $n) use ($o) { $o->setAppVersion($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'fullyQualifiedDomainName' => function (ParseNode $n) use ($o) { $o->setFullyQualifiedDomainName($n->getStringValue()); },
            'location' => function (ParseNode $n) use ($o) { $o->setLocation($n->getObjectValue(array(PrinterLocation::class, 'createFromDiscriminatorValue'))); },
            'operatingSystem' => function (ParseNode $n) use ($o) { $o->setOperatingSystem($n->getStringValue()); },
            'registeredDateTime' => function (ParseNode $n) use ($o) { $o->setRegisteredDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the fullyQualifiedDomainName property value. The connector machine's hostname.
     * @return string|null
    */
    public function getFullyQualifiedDomainName(): ?string {
        return $this->fullyQualifiedDomainName;
    }

    /**
     * Gets the location property value. The physical and/or organizational location of the connector.
     * @return PrinterLocation|null
    */
    public function getLocation(): ?PrinterLocation {
        return $this->location;
    }

    /**
     * Gets the operatingSystem property value. The connector machine's operating system version.
     * @return string|null
    */
    public function getOperatingSystem(): ?string {
        return $this->operatingSystem;
    }

    /**
     * Gets the registeredDateTime property value. The DateTimeOffset when the connector was registered.
     * @return DateTime|null
    */
    public function getRegisteredDateTime(): ?DateTime {
        return $this->registeredDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appVersion', $this->appVersion);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('fullyQualifiedDomainName', $this->fullyQualifiedDomainName);
        $writer->writeObjectValue('location', $this->location);
        $writer->writeStringValue('operatingSystem', $this->operatingSystem);
        $writer->writeDateTimeValue('registeredDateTime', $this->registeredDateTime);
    }

    /**
     * Sets the appVersion property value. The connector's version.
     *  @param string|null $value Value to set for the appVersion property.
    */
    public function setAppVersion(?string $value ): void {
        $this->appVersion = $value;
    }

    /**
     * Sets the displayName property value. The name of the connector.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the fullyQualifiedDomainName property value. The connector machine's hostname.
     *  @param string|null $value Value to set for the fullyQualifiedDomainName property.
    */
    public function setFullyQualifiedDomainName(?string $value ): void {
        $this->fullyQualifiedDomainName = $value;
    }

    /**
     * Sets the location property value. The physical and/or organizational location of the connector.
     *  @param PrinterLocation|null $value Value to set for the location property.
    */
    public function setLocation(?PrinterLocation $value ): void {
        $this->location = $value;
    }

    /**
     * Sets the operatingSystem property value. The connector machine's operating system version.
     *  @param string|null $value Value to set for the operatingSystem property.
    */
    public function setOperatingSystem(?string $value ): void {
        $this->operatingSystem = $value;
    }

    /**
     * Sets the registeredDateTime property value. The DateTimeOffset when the connector was registered.
     *  @param DateTime|null $value Value to set for the registeredDateTime property.
    */
    public function setRegisteredDateTime(?DateTime $value ): void {
        $this->registeredDateTime = $value;
    }

}
