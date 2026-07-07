<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AnalyzedEmailSenderDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AnalyzedEmailSenderDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnalyzedEmailSenderDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnalyzedEmailSenderDetail {
        return new AnalyzedEmailSenderDetail();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the displayName property value. Display name of sender from address.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the domainCreationDateTime property value. Date and time of creation of the sender domain.
     * @return DateTime|null
    */
    public function getDomainCreationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('domainCreationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainCreationDateTime'");
    }

    /**
     * Gets the domainName property value. Registered name of the domain.
     * @return string|null
    */
    public function getDomainName(): ?string {
        $val = $this->getBackingStore()->get('domainName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainName'");
    }

    /**
     * Gets the domainOwner property value. Owner of the domain.
     * @return string|null
    */
    public function getDomainOwner(): ?string {
        $val = $this->getBackingStore()->get('domainOwner');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainOwner'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'domainCreationDateTime' => fn(ParseNode $n) => $o->setDomainCreationDateTime($n->getDateTimeValue()),
            'domainName' => fn(ParseNode $n) => $o->setDomainName($n->getStringValue()),
            'domainOwner' => fn(ParseNode $n) => $o->setDomainOwner($n->getStringValue()),
            'fromAddress' => fn(ParseNode $n) => $o->setFromAddress($n->getStringValue()),
            'ipv4' => fn(ParseNode $n) => $o->setIpv4($n->getStringValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getStringValue()),
            'mailFromAddress' => fn(ParseNode $n) => $o->setMailFromAddress($n->getStringValue()),
            'mailFromDomainName' => fn(ParseNode $n) => $o->setMailFromDomainName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the fromAddress property value. The sender email address in the mail From header, also known as the envelope sender or the P1 sender.
     * @return string|null
    */
    public function getFromAddress(): ?string {
        $val = $this->getBackingStore()->get('fromAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fromAddress'");
    }

    /**
     * Gets the ipv4 property value. The IPv4 address of the last detected mail server that relayed the message.
     * @return string|null
    */
    public function getIpv4(): ?string {
        $val = $this->getBackingStore()->get('ipv4');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipv4'");
    }

    /**
     * Gets the location property value. Location of the domain.
     * @return string|null
    */
    public function getLocation(): ?string {
        $val = $this->getBackingStore()->get('location');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'location'");
    }

    /**
     * Gets the mailFromAddress property value. The sender email address in the From header, which is visible to email recipients on their email clients. Also known as P2 sender.
     * @return string|null
    */
    public function getMailFromAddress(): ?string {
        $val = $this->getBackingStore()->get('mailFromAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailFromAddress'");
    }

    /**
     * Gets the mailFromDomainName property value. Domain name of sender mail from address.
     * @return string|null
    */
    public function getMailFromDomainName(): ?string {
        $val = $this->getBackingStore()->get('mailFromDomainName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailFromDomainName'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('domainCreationDateTime', $this->getDomainCreationDateTime());
        $writer->writeStringValue('domainName', $this->getDomainName());
        $writer->writeStringValue('domainOwner', $this->getDomainOwner());
        $writer->writeStringValue('fromAddress', $this->getFromAddress());
        $writer->writeStringValue('ipv4', $this->getIpv4());
        $writer->writeStringValue('location', $this->getLocation());
        $writer->writeStringValue('mailFromAddress', $this->getMailFromAddress());
        $writer->writeStringValue('mailFromDomainName', $this->getMailFromDomainName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the displayName property value. Display name of sender from address.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the domainCreationDateTime property value. Date and time of creation of the sender domain.
     * @param DateTime|null $value Value to set for the domainCreationDateTime property.
    */
    public function setDomainCreationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('domainCreationDateTime', $value);
    }

    /**
     * Sets the domainName property value. Registered name of the domain.
     * @param string|null $value Value to set for the domainName property.
    */
    public function setDomainName(?string $value): void {
        $this->getBackingStore()->set('domainName', $value);
    }

    /**
     * Sets the domainOwner property value. Owner of the domain.
     * @param string|null $value Value to set for the domainOwner property.
    */
    public function setDomainOwner(?string $value): void {
        $this->getBackingStore()->set('domainOwner', $value);
    }

    /**
     * Sets the fromAddress property value. The sender email address in the mail From header, also known as the envelope sender or the P1 sender.
     * @param string|null $value Value to set for the fromAddress property.
    */
    public function setFromAddress(?string $value): void {
        $this->getBackingStore()->set('fromAddress', $value);
    }

    /**
     * Sets the ipv4 property value. The IPv4 address of the last detected mail server that relayed the message.
     * @param string|null $value Value to set for the ipv4 property.
    */
    public function setIpv4(?string $value): void {
        $this->getBackingStore()->set('ipv4', $value);
    }

    /**
     * Sets the location property value. Location of the domain.
     * @param string|null $value Value to set for the location property.
    */
    public function setLocation(?string $value): void {
        $this->getBackingStore()->set('location', $value);
    }

    /**
     * Sets the mailFromAddress property value. The sender email address in the From header, which is visible to email recipients on their email clients. Also known as P2 sender.
     * @param string|null $value Value to set for the mailFromAddress property.
    */
    public function setMailFromAddress(?string $value): void {
        $this->getBackingStore()->set('mailFromAddress', $value);
    }

    /**
     * Sets the mailFromDomainName property value. Domain name of sender mail from address.
     * @param string|null $value Value to set for the mailFromDomainName property.
    */
    public function setMailFromDomainName(?string $value): void {
        $this->getBackingStore()->set('mailFromDomainName', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
