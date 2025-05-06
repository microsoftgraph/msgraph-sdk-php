<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ExchangeProtectionPolicy extends ProtectionPolicyBase implements Parsable 
{
    /**
     * Instantiates a new ExchangeProtectionPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.exchangeProtectionPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExchangeProtectionPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExchangeProtectionPolicy {
        return new ExchangeProtectionPolicy();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'mailboxInclusionRules' => fn(ParseNode $n) => $o->setMailboxInclusionRules($n->getCollectionOfObjectValues([MailboxProtectionRule::class, 'createFromDiscriminatorValue'])),
            'mailboxProtectionUnits' => fn(ParseNode $n) => $o->setMailboxProtectionUnits($n->getCollectionOfObjectValues([MailboxProtectionUnit::class, 'createFromDiscriminatorValue'])),
            'mailboxProtectionUnitsBulkAdditionJobs' => fn(ParseNode $n) => $o->setMailboxProtectionUnitsBulkAdditionJobs($n->getCollectionOfObjectValues([MailboxProtectionUnitsBulkAdditionJob::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the mailboxInclusionRules property value. The rules associated with the Exchange protection policy.
     * @return array<MailboxProtectionRule>|null
    */
    public function getMailboxInclusionRules(): ?array {
        $val = $this->getBackingStore()->get('mailboxInclusionRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MailboxProtectionRule::class);
            /** @var array<MailboxProtectionRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailboxInclusionRules'");
    }

    /**
     * Gets the mailboxProtectionUnits property value. The protection units (mailboxes) that are  protected under the Exchange protection policy.
     * @return array<MailboxProtectionUnit>|null
    */
    public function getMailboxProtectionUnits(): ?array {
        $val = $this->getBackingStore()->get('mailboxProtectionUnits');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MailboxProtectionUnit::class);
            /** @var array<MailboxProtectionUnit>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailboxProtectionUnits'");
    }

    /**
     * Gets the mailboxProtectionUnitsBulkAdditionJobs property value. The mailboxProtectionUnitsBulkAdditionJobs property
     * @return array<MailboxProtectionUnitsBulkAdditionJob>|null
    */
    public function getMailboxProtectionUnitsBulkAdditionJobs(): ?array {
        $val = $this->getBackingStore()->get('mailboxProtectionUnitsBulkAdditionJobs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MailboxProtectionUnitsBulkAdditionJob::class);
            /** @var array<MailboxProtectionUnitsBulkAdditionJob>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailboxProtectionUnitsBulkAdditionJobs'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('mailboxInclusionRules', $this->getMailboxInclusionRules());
        $writer->writeCollectionOfObjectValues('mailboxProtectionUnits', $this->getMailboxProtectionUnits());
        $writer->writeCollectionOfObjectValues('mailboxProtectionUnitsBulkAdditionJobs', $this->getMailboxProtectionUnitsBulkAdditionJobs());
    }

    /**
     * Sets the mailboxInclusionRules property value. The rules associated with the Exchange protection policy.
     * @param array<MailboxProtectionRule>|null $value Value to set for the mailboxInclusionRules property.
    */
    public function setMailboxInclusionRules(?array $value): void {
        $this->getBackingStore()->set('mailboxInclusionRules', $value);
    }

    /**
     * Sets the mailboxProtectionUnits property value. The protection units (mailboxes) that are  protected under the Exchange protection policy.
     * @param array<MailboxProtectionUnit>|null $value Value to set for the mailboxProtectionUnits property.
    */
    public function setMailboxProtectionUnits(?array $value): void {
        $this->getBackingStore()->set('mailboxProtectionUnits', $value);
    }

    /**
     * Sets the mailboxProtectionUnitsBulkAdditionJobs property value. The mailboxProtectionUnitsBulkAdditionJobs property
     * @param array<MailboxProtectionUnitsBulkAdditionJob>|null $value Value to set for the mailboxProtectionUnitsBulkAdditionJobs property.
    */
    public function setMailboxProtectionUnitsBulkAdditionJobs(?array $value): void {
        $this->getBackingStore()->set('mailboxProtectionUnitsBulkAdditionJobs', $value);
    }

}
