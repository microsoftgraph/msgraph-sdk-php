<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessPackageApprovalStage implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AccessPackageApprovalStage and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageApprovalStage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageApprovalStage {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.accessPackageDynamicApprovalStage': return new AccessPackageDynamicApprovalStage();
            }
        }
        return new AccessPackageApprovalStage();
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
     * Gets the durationBeforeAutomaticDenial property value. The number of days that a request can be pending a response before it is automatically denied.
     * @return DateInterval|null
    */
    public function getDurationBeforeAutomaticDenial(): ?DateInterval {
        $val = $this->getBackingStore()->get('durationBeforeAutomaticDenial');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'durationBeforeAutomaticDenial'");
    }

    /**
     * Gets the durationBeforeEscalation property value. If escalation is required, the time a request can be pending a response from a primary approver.
     * @return DateInterval|null
    */
    public function getDurationBeforeEscalation(): ?DateInterval {
        $val = $this->getBackingStore()->get('durationBeforeEscalation');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'durationBeforeEscalation'");
    }

    /**
     * Gets the escalationApprovers property value. If escalation is enabled and the primary approvers do not respond before the escalation time, the escalationApprovers are the users who will be asked to approve requests.
     * @return array<SubjectSet>|null
    */
    public function getEscalationApprovers(): ?array {
        $val = $this->getBackingStore()->get('escalationApprovers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SubjectSet::class);
            /** @var array<SubjectSet>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'escalationApprovers'");
    }

    /**
     * Gets the fallbackEscalationApprovers property value. The subjects, typically users, who are the fallback escalation approvers.
     * @return array<SubjectSet>|null
    */
    public function getFallbackEscalationApprovers(): ?array {
        $val = $this->getBackingStore()->get('fallbackEscalationApprovers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SubjectSet::class);
            /** @var array<SubjectSet>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fallbackEscalationApprovers'");
    }

    /**
     * Gets the fallbackPrimaryApprovers property value. The subjects, typically users, who are the fallback primary approvers.
     * @return array<SubjectSet>|null
    */
    public function getFallbackPrimaryApprovers(): ?array {
        $val = $this->getBackingStore()->get('fallbackPrimaryApprovers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SubjectSet::class);
            /** @var array<SubjectSet>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fallbackPrimaryApprovers'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'durationBeforeAutomaticDenial' => fn(ParseNode $n) => $o->setDurationBeforeAutomaticDenial($n->getDateIntervalValue()),
            'durationBeforeEscalation' => fn(ParseNode $n) => $o->setDurationBeforeEscalation($n->getDateIntervalValue()),
            'escalationApprovers' => fn(ParseNode $n) => $o->setEscalationApprovers($n->getCollectionOfObjectValues([SubjectSet::class, 'createFromDiscriminatorValue'])),
            'fallbackEscalationApprovers' => fn(ParseNode $n) => $o->setFallbackEscalationApprovers($n->getCollectionOfObjectValues([SubjectSet::class, 'createFromDiscriminatorValue'])),
            'fallbackPrimaryApprovers' => fn(ParseNode $n) => $o->setFallbackPrimaryApprovers($n->getCollectionOfObjectValues([SubjectSet::class, 'createFromDiscriminatorValue'])),
            'isApproverJustificationRequired' => fn(ParseNode $n) => $o->setIsApproverJustificationRequired($n->getBooleanValue()),
            'isEscalationEnabled' => fn(ParseNode $n) => $o->setIsEscalationEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'primaryApprovers' => fn(ParseNode $n) => $o->setPrimaryApprovers($n->getCollectionOfObjectValues([SubjectSet::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the isApproverJustificationRequired property value. Indicates whether the approver is required to provide a justification for approving a request.
     * @return bool|null
    */
    public function getIsApproverJustificationRequired(): ?bool {
        $val = $this->getBackingStore()->get('isApproverJustificationRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isApproverJustificationRequired'");
    }

    /**
     * Gets the isEscalationEnabled property value. If true, then one or more escalationApprovers are configured in this approval stage.
     * @return bool|null
    */
    public function getIsEscalationEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEscalationEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEscalationEnabled'");
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
     * Gets the primaryApprovers property value. The subjects, typically users, who will be asked to approve requests. A collection of singleUser, groupMembers, requestorManager, internalSponsors, externalSponsors, or targetUserSponsors.
     * @return array<SubjectSet>|null
    */
    public function getPrimaryApprovers(): ?array {
        $val = $this->getBackingStore()->get('primaryApprovers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SubjectSet::class);
            /** @var array<SubjectSet>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'primaryApprovers'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateIntervalValue('durationBeforeAutomaticDenial', $this->getDurationBeforeAutomaticDenial());
        $writer->writeDateIntervalValue('durationBeforeEscalation', $this->getDurationBeforeEscalation());
        $writer->writeCollectionOfObjectValues('escalationApprovers', $this->getEscalationApprovers());
        $writer->writeCollectionOfObjectValues('fallbackEscalationApprovers', $this->getFallbackEscalationApprovers());
        $writer->writeCollectionOfObjectValues('fallbackPrimaryApprovers', $this->getFallbackPrimaryApprovers());
        $writer->writeBooleanValue('isApproverJustificationRequired', $this->getIsApproverJustificationRequired());
        $writer->writeBooleanValue('isEscalationEnabled', $this->getIsEscalationEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('primaryApprovers', $this->getPrimaryApprovers());
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
     * Sets the durationBeforeAutomaticDenial property value. The number of days that a request can be pending a response before it is automatically denied.
     * @param DateInterval|null $value Value to set for the durationBeforeAutomaticDenial property.
    */
    public function setDurationBeforeAutomaticDenial(?DateInterval $value): void {
        $this->getBackingStore()->set('durationBeforeAutomaticDenial', $value);
    }

    /**
     * Sets the durationBeforeEscalation property value. If escalation is required, the time a request can be pending a response from a primary approver.
     * @param DateInterval|null $value Value to set for the durationBeforeEscalation property.
    */
    public function setDurationBeforeEscalation(?DateInterval $value): void {
        $this->getBackingStore()->set('durationBeforeEscalation', $value);
    }

    /**
     * Sets the escalationApprovers property value. If escalation is enabled and the primary approvers do not respond before the escalation time, the escalationApprovers are the users who will be asked to approve requests.
     * @param array<SubjectSet>|null $value Value to set for the escalationApprovers property.
    */
    public function setEscalationApprovers(?array $value): void {
        $this->getBackingStore()->set('escalationApprovers', $value);
    }

    /**
     * Sets the fallbackEscalationApprovers property value. The subjects, typically users, who are the fallback escalation approvers.
     * @param array<SubjectSet>|null $value Value to set for the fallbackEscalationApprovers property.
    */
    public function setFallbackEscalationApprovers(?array $value): void {
        $this->getBackingStore()->set('fallbackEscalationApprovers', $value);
    }

    /**
     * Sets the fallbackPrimaryApprovers property value. The subjects, typically users, who are the fallback primary approvers.
     * @param array<SubjectSet>|null $value Value to set for the fallbackPrimaryApprovers property.
    */
    public function setFallbackPrimaryApprovers(?array $value): void {
        $this->getBackingStore()->set('fallbackPrimaryApprovers', $value);
    }

    /**
     * Sets the isApproverJustificationRequired property value. Indicates whether the approver is required to provide a justification for approving a request.
     * @param bool|null $value Value to set for the isApproverJustificationRequired property.
    */
    public function setIsApproverJustificationRequired(?bool $value): void {
        $this->getBackingStore()->set('isApproverJustificationRequired', $value);
    }

    /**
     * Sets the isEscalationEnabled property value. If true, then one or more escalationApprovers are configured in this approval stage.
     * @param bool|null $value Value to set for the isEscalationEnabled property.
    */
    public function setIsEscalationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEscalationEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the primaryApprovers property value. The subjects, typically users, who will be asked to approve requests. A collection of singleUser, groupMembers, requestorManager, internalSponsors, externalSponsors, or targetUserSponsors.
     * @param array<SubjectSet>|null $value Value to set for the primaryApprovers property.
    */
    public function setPrimaryApprovers(?array $value): void {
        $this->getBackingStore()->set('primaryApprovers', $value);
    }

}
