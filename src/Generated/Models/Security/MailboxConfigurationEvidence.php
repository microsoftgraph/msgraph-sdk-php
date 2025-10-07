<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MailboxConfigurationEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new MailboxConfigurationEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.mailboxConfigurationEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MailboxConfigurationEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MailboxConfigurationEvidence {
        return new MailboxConfigurationEvidence();
    }

    /**
     * Gets the configurationId property value. The configurationId property
     * @return string|null
    */
    public function getConfigurationId(): ?string {
        $val = $this->getBackingStore()->get('configurationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationId'");
    }

    /**
     * Gets the configurationType property value. The configurationType property
     * @return MailboxConfigurationType|null
    */
    public function getConfigurationType(): ?MailboxConfigurationType {
        $val = $this->getBackingStore()->get('configurationType');
        if (is_null($val) || $val instanceof MailboxConfigurationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationType'");
    }

    /**
     * Gets the displayName property value. The displayName property
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
     * Gets the externalDirectoryObjectId property value. The externalDirectoryObjectId property
     * @return string|null
    */
    public function getExternalDirectoryObjectId(): ?string {
        $val = $this->getBackingStore()->get('externalDirectoryObjectId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalDirectoryObjectId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configurationId' => fn(ParseNode $n) => $o->setConfigurationId($n->getStringValue()),
            'configurationType' => fn(ParseNode $n) => $o->setConfigurationType($n->getEnumValue(MailboxConfigurationType::class)),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'externalDirectoryObjectId' => fn(ParseNode $n) => $o->setExternalDirectoryObjectId($n->getStringValue()),
            'mailboxPrimaryAddress' => fn(ParseNode $n) => $o->setMailboxPrimaryAddress($n->getStringValue()),
            'upn' => fn(ParseNode $n) => $o->setUpn($n->getStringValue()),
        ]);
    }

    /**
     * Gets the mailboxPrimaryAddress property value. The mailboxPrimaryAddress property
     * @return string|null
    */
    public function getMailboxPrimaryAddress(): ?string {
        $val = $this->getBackingStore()->get('mailboxPrimaryAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailboxPrimaryAddress'");
    }

    /**
     * Gets the upn property value. The upn property
     * @return string|null
    */
    public function getUpn(): ?string {
        $val = $this->getBackingStore()->get('upn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'upn'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('configurationId', $this->getConfigurationId());
        $writer->writeEnumValue('configurationType', $this->getConfigurationType());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('externalDirectoryObjectId', $this->getExternalDirectoryObjectId());
        $writer->writeStringValue('mailboxPrimaryAddress', $this->getMailboxPrimaryAddress());
        $writer->writeStringValue('upn', $this->getUpn());
    }

    /**
     * Sets the configurationId property value. The configurationId property
     * @param string|null $value Value to set for the configurationId property.
    */
    public function setConfigurationId(?string $value): void {
        $this->getBackingStore()->set('configurationId', $value);
    }

    /**
     * Sets the configurationType property value. The configurationType property
     * @param MailboxConfigurationType|null $value Value to set for the configurationType property.
    */
    public function setConfigurationType(?MailboxConfigurationType $value): void {
        $this->getBackingStore()->set('configurationType', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the externalDirectoryObjectId property value. The externalDirectoryObjectId property
     * @param string|null $value Value to set for the externalDirectoryObjectId property.
    */
    public function setExternalDirectoryObjectId(?string $value): void {
        $this->getBackingStore()->set('externalDirectoryObjectId', $value);
    }

    /**
     * Sets the mailboxPrimaryAddress property value. The mailboxPrimaryAddress property
     * @param string|null $value Value to set for the mailboxPrimaryAddress property.
    */
    public function setMailboxPrimaryAddress(?string $value): void {
        $this->getBackingStore()->set('mailboxPrimaryAddress', $value);
    }

    /**
     * Sets the upn property value. The upn property
     * @param string|null $value Value to set for the upn property.
    */
    public function setUpn(?string $value): void {
        $this->getBackingStore()->set('upn', $value);
    }

}
