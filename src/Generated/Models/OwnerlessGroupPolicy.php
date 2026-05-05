<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OwnerlessGroupPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new OwnerlessGroupPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OwnerlessGroupPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OwnerlessGroupPolicy {
        return new OwnerlessGroupPolicy();
    }

    /**
     * Gets the emailInfo property value. The emailInfo property
     * @return EmailDetails|null
    */
    public function getEmailInfo(): ?EmailDetails {
        $val = $this->getBackingStore()->get('emailInfo');
        if (is_null($val) || $val instanceof EmailDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailInfo'");
    }

    /**
     * Gets the enabledGroupIds property value. The enabledGroupIds property
     * @return array<string>|null
    */
    public function getEnabledGroupIds(): ?array {
        $val = $this->getBackingStore()->get('enabledGroupIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enabledGroupIds'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'emailInfo' => fn(ParseNode $n) => $o->setEmailInfo($n->getObjectValue([EmailDetails::class, 'createFromDiscriminatorValue'])),
            'enabledGroupIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setEnabledGroupIds($val);
            },
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'maxMembersToNotify' => fn(ParseNode $n) => $o->setMaxMembersToNotify($n->getIntegerValue()),
            'notificationDurationInWeeks' => fn(ParseNode $n) => $o->setNotificationDurationInWeeks($n->getIntegerValue()),
            'policyWebUrl' => fn(ParseNode $n) => $o->setPolicyWebUrl($n->getStringValue()),
            'targetOwners' => fn(ParseNode $n) => $o->setTargetOwners($n->getObjectValue([TargetOwners::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isEnabled property value. The isEnabled property
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
     * Gets the maxMembersToNotify property value. The maxMembersToNotify property
     * @return int|null
    */
    public function getMaxMembersToNotify(): ?int {
        $val = $this->getBackingStore()->get('maxMembersToNotify');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxMembersToNotify'");
    }

    /**
     * Gets the notificationDurationInWeeks property value. The notificationDurationInWeeks property
     * @return int|null
    */
    public function getNotificationDurationInWeeks(): ?int {
        $val = $this->getBackingStore()->get('notificationDurationInWeeks');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationDurationInWeeks'");
    }

    /**
     * Gets the policyWebUrl property value. The policyWebUrl property
     * @return string|null
    */
    public function getPolicyWebUrl(): ?string {
        $val = $this->getBackingStore()->get('policyWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyWebUrl'");
    }

    /**
     * Gets the targetOwners property value. The targetOwners property
     * @return TargetOwners|null
    */
    public function getTargetOwners(): ?TargetOwners {
        $val = $this->getBackingStore()->get('targetOwners');
        if (is_null($val) || $val instanceof TargetOwners) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetOwners'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('emailInfo', $this->getEmailInfo());
        $writer->writeCollectionOfPrimitiveValues('enabledGroupIds', $this->getEnabledGroupIds());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeIntegerValue('maxMembersToNotify', $this->getMaxMembersToNotify());
        $writer->writeIntegerValue('notificationDurationInWeeks', $this->getNotificationDurationInWeeks());
        $writer->writeStringValue('policyWebUrl', $this->getPolicyWebUrl());
        $writer->writeObjectValue('targetOwners', $this->getTargetOwners());
    }

    /**
     * Sets the emailInfo property value. The emailInfo property
     * @param EmailDetails|null $value Value to set for the emailInfo property.
    */
    public function setEmailInfo(?EmailDetails $value): void {
        $this->getBackingStore()->set('emailInfo', $value);
    }

    /**
     * Sets the enabledGroupIds property value. The enabledGroupIds property
     * @param array<string>|null $value Value to set for the enabledGroupIds property.
    */
    public function setEnabledGroupIds(?array $value): void {
        $this->getBackingStore()->set('enabledGroupIds', $value);
    }

    /**
     * Sets the isEnabled property value. The isEnabled property
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the maxMembersToNotify property value. The maxMembersToNotify property
     * @param int|null $value Value to set for the maxMembersToNotify property.
    */
    public function setMaxMembersToNotify(?int $value): void {
        $this->getBackingStore()->set('maxMembersToNotify', $value);
    }

    /**
     * Sets the notificationDurationInWeeks property value. The notificationDurationInWeeks property
     * @param int|null $value Value to set for the notificationDurationInWeeks property.
    */
    public function setNotificationDurationInWeeks(?int $value): void {
        $this->getBackingStore()->set('notificationDurationInWeeks', $value);
    }

    /**
     * Sets the policyWebUrl property value. The policyWebUrl property
     * @param string|null $value Value to set for the policyWebUrl property.
    */
    public function setPolicyWebUrl(?string $value): void {
        $this->getBackingStore()->set('policyWebUrl', $value);
    }

    /**
     * Sets the targetOwners property value. The targetOwners property
     * @param TargetOwners|null $value Value to set for the targetOwners property.
    */
    public function setTargetOwners(?TargetOwners $value): void {
        $this->getBackingStore()->set('targetOwners', $value);
    }

}
