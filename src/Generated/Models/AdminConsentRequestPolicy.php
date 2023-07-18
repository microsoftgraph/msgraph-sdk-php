<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AdminConsentRequestPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new adminConsentRequestPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdminConsentRequestPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdminConsentRequestPolicy {
        return new AdminConsentRequestPolicy();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'notifyReviewers' => fn(ParseNode $n) => $o->setNotifyReviewers($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'remindersEnabled' => fn(ParseNode $n) => $o->setRemindersEnabled($n->getBooleanValue()),
            'requestDurationInDays' => fn(ParseNode $n) => $o->setRequestDurationInDays($n->getIntegerValue()),
            'reviewers' => fn(ParseNode $n) => $o->setReviewers($n->getCollectionOfObjectValues([AccessReviewReviewerScope::class, 'createFromDiscriminatorValue'])),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the isEnabled property value. Specifies whether the admin consent request feature is enabled or disabled. Required.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
    }

    /**
     * Gets the notifyReviewers property value. Specifies whether reviewers will receive notifications. Required.
     * @return bool|null
    */
    public function getNotifyReviewers(): ?bool {
        $val = $this->getBackingStore()->get('notifyReviewers');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notifyReviewers'");
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
     * Gets the remindersEnabled property value. Specifies whether reviewers will receive reminder emails. Required.
     * @return bool|null
    */
    public function getRemindersEnabled(): ?bool {
        $val = $this->getBackingStore()->get('remindersEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remindersEnabled'");
    }

    /**
     * Gets the requestDurationInDays property value. Specifies the duration the request is active before it automatically expires if no decision is applied.
     * @return int|null
    */
    public function getRequestDurationInDays(): ?int {
        $val = $this->getBackingStore()->get('requestDurationInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestDurationInDays'");
    }

    /**
     * Gets the reviewers property value. The list of reviewers for the admin consent. Required.
     * @return array<AccessReviewReviewerScope>|null
    */
    public function getReviewers(): ?array {
        $val = $this->getBackingStore()->get('reviewers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessReviewReviewerScope::class);
            /** @var array<AccessReviewReviewerScope>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewers'");
    }

    /**
     * Gets the version property value. Specifies the version of this policy. When the policy is updated, this version is updated. Read-only.
     * @return int|null
    */
    public function getVersion(): ?int {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeBooleanValue('notifyReviewers', $this->getNotifyReviewers());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('remindersEnabled', $this->getRemindersEnabled());
        $writer->writeIntegerValue('requestDurationInDays', $this->getRequestDurationInDays());
        $writer->writeCollectionOfObjectValues('reviewers', $this->getReviewers());
        $writer->writeIntegerValue('version', $this->getVersion());
    }

    /**
     * Sets the isEnabled property value. Specifies whether the admin consent request feature is enabled or disabled. Required.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the notifyReviewers property value. Specifies whether reviewers will receive notifications. Required.
     * @param bool|null $value Value to set for the notifyReviewers property.
    */
    public function setNotifyReviewers(?bool $value): void {
        $this->getBackingStore()->set('notifyReviewers', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the remindersEnabled property value. Specifies whether reviewers will receive reminder emails. Required.
     * @param bool|null $value Value to set for the remindersEnabled property.
    */
    public function setRemindersEnabled(?bool $value): void {
        $this->getBackingStore()->set('remindersEnabled', $value);
    }

    /**
     * Sets the requestDurationInDays property value. Specifies the duration the request is active before it automatically expires if no decision is applied.
     * @param int|null $value Value to set for the requestDurationInDays property.
    */
    public function setRequestDurationInDays(?int $value): void {
        $this->getBackingStore()->set('requestDurationInDays', $value);
    }

    /**
     * Sets the reviewers property value. The list of reviewers for the admin consent. Required.
     * @param array<AccessReviewReviewerScope>|null $value Value to set for the reviewers property.
    */
    public function setReviewers(?array $value): void {
        $this->getBackingStore()->set('reviewers', $value);
    }

    /**
     * Sets the version property value. Specifies the version of this policy. When the policy is updated, this version is updated. Read-only.
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
