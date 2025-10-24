<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ExchangeRestoreSession extends RestoreSessionBase implements Parsable 
{
    /**
     * Instantiates a new ExchangeRestoreSession and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.exchangeRestoreSession');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExchangeRestoreSession
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExchangeRestoreSession {
        return new ExchangeRestoreSession();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'granularMailboxRestoreArtifacts' => fn(ParseNode $n) => $o->setGranularMailboxRestoreArtifacts($n->getCollectionOfObjectValues([GranularMailboxRestoreArtifact::class, 'createFromDiscriminatorValue'])),
            'mailboxRestoreArtifacts' => fn(ParseNode $n) => $o->setMailboxRestoreArtifacts($n->getCollectionOfObjectValues([MailboxRestoreArtifact::class, 'createFromDiscriminatorValue'])),
            'mailboxRestoreArtifactsBulkAdditionRequests' => fn(ParseNode $n) => $o->setMailboxRestoreArtifactsBulkAdditionRequests($n->getCollectionOfObjectValues([MailboxRestoreArtifactsBulkAdditionRequest::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the granularMailboxRestoreArtifacts property value. The granularMailboxRestoreArtifacts property
     * @return array<GranularMailboxRestoreArtifact>|null
    */
    public function getGranularMailboxRestoreArtifacts(): ?array {
        $val = $this->getBackingStore()->get('granularMailboxRestoreArtifacts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GranularMailboxRestoreArtifact::class);
            /** @var array<GranularMailboxRestoreArtifact>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'granularMailboxRestoreArtifacts'");
    }

    /**
     * Gets the mailboxRestoreArtifacts property value. A collection of restore points and destination details that can be used to restore Exchange mailboxes.
     * @return array<MailboxRestoreArtifact>|null
    */
    public function getMailboxRestoreArtifacts(): ?array {
        $val = $this->getBackingStore()->get('mailboxRestoreArtifacts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MailboxRestoreArtifact::class);
            /** @var array<MailboxRestoreArtifact>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailboxRestoreArtifacts'");
    }

    /**
     * Gets the mailboxRestoreArtifactsBulkAdditionRequests property value. A collection of user mailboxes and destination details that can be used to restore Exchange mailboxes.
     * @return array<MailboxRestoreArtifactsBulkAdditionRequest>|null
    */
    public function getMailboxRestoreArtifactsBulkAdditionRequests(): ?array {
        $val = $this->getBackingStore()->get('mailboxRestoreArtifactsBulkAdditionRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MailboxRestoreArtifactsBulkAdditionRequest::class);
            /** @var array<MailboxRestoreArtifactsBulkAdditionRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailboxRestoreArtifactsBulkAdditionRequests'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('granularMailboxRestoreArtifacts', $this->getGranularMailboxRestoreArtifacts());
        $writer->writeCollectionOfObjectValues('mailboxRestoreArtifacts', $this->getMailboxRestoreArtifacts());
        $writer->writeCollectionOfObjectValues('mailboxRestoreArtifactsBulkAdditionRequests', $this->getMailboxRestoreArtifactsBulkAdditionRequests());
    }

    /**
     * Sets the granularMailboxRestoreArtifacts property value. The granularMailboxRestoreArtifacts property
     * @param array<GranularMailboxRestoreArtifact>|null $value Value to set for the granularMailboxRestoreArtifacts property.
    */
    public function setGranularMailboxRestoreArtifacts(?array $value): void {
        $this->getBackingStore()->set('granularMailboxRestoreArtifacts', $value);
    }

    /**
     * Sets the mailboxRestoreArtifacts property value. A collection of restore points and destination details that can be used to restore Exchange mailboxes.
     * @param array<MailboxRestoreArtifact>|null $value Value to set for the mailboxRestoreArtifacts property.
    */
    public function setMailboxRestoreArtifacts(?array $value): void {
        $this->getBackingStore()->set('mailboxRestoreArtifacts', $value);
    }

    /**
     * Sets the mailboxRestoreArtifactsBulkAdditionRequests property value. A collection of user mailboxes and destination details that can be used to restore Exchange mailboxes.
     * @param array<MailboxRestoreArtifactsBulkAdditionRequest>|null $value Value to set for the mailboxRestoreArtifactsBulkAdditionRequests property.
    */
    public function setMailboxRestoreArtifactsBulkAdditionRequests(?array $value): void {
        $this->getBackingStore()->set('mailboxRestoreArtifactsBulkAdditionRequests', $value);
    }

}
