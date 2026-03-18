<?php

namespace Microsoft\Graph\Generated\Models\TeamsAdministration;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class NumberAssignment extends Entity implements Parsable 
{
    /**
     * Instantiates a new NumberAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NumberAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NumberAssignment {
        return new NumberAssignment();
    }

    /**
     * Gets the activationState property value. The activationState property
     * @return ActivationState|null
    */
    public function getActivationState(): ?ActivationState {
        $val = $this->getBackingStore()->get('activationState');
        if (is_null($val) || $val instanceof ActivationState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activationState'");
    }

    /**
     * Gets the assignmentCategory property value. Contains the assignment category such as Primary or Private. The possible values are: primary, private, alternate, unknownFutureValue.
     * @return AssignmentCategory|null
    */
    public function getAssignmentCategory(): ?AssignmentCategory {
        $val = $this->getBackingStore()->get('assignmentCategory');
        if (is_null($val) || $val instanceof AssignmentCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentCategory'");
    }

    /**
     * Gets the assignmentStatus property value. The assignment status of the phone number. The possible values are: unassigned, internalError, userAssigned, conferenceAssigned, voiceApplicationAssigned, thirdPartyAppAssigned, policyAssigned, unknownFutureValue.
     * @return AssignmentStatus|null
    */
    public function getAssignmentStatus(): ?AssignmentStatus {
        $val = $this->getBackingStore()->get('assignmentStatus');
        if (is_null($val) || $val instanceof AssignmentStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentStatus'");
    }

    /**
     * Gets the assignmentTargetId property value. The ID of the object the phone number is assigned to, either the ObjectId of a user or resource account, or the policy instance ID of a Teams shared calling routing policy instance.
     * @return string|null
    */
    public function getAssignmentTargetId(): ?string {
        $val = $this->getBackingStore()->get('assignmentTargetId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentTargetId'");
    }

    /**
     * Gets the capabilities property value. The list of capabilities assigned to the phone number.
     * @return array<NumberCapability>|null
    */
    public function getCapabilities(): ?array {
        $val = $this->getBackingStore()->get('capabilities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, NumberCapability::class);
            /** @var array<NumberCapability>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'capabilities'");
    }

    /**
     * Gets the city property value. The city where the phone number is located or associated with.
     * @return string|null
    */
    public function getCity(): ?string {
        $val = $this->getBackingStore()->get('city');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'city'");
    }

    /**
     * Gets the civicAddressId property value. The ID of the civic address assigned to the phone number.
     * @return string|null
    */
    public function getCivicAddressId(): ?string {
        $val = $this->getBackingStore()->get('civicAddressId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'civicAddressId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activationState' => fn(ParseNode $n) => $o->setActivationState($n->getEnumValue(ActivationState::class)),
            'assignmentCategory' => fn(ParseNode $n) => $o->setAssignmentCategory($n->getEnumValue(AssignmentCategory::class)),
            'assignmentStatus' => fn(ParseNode $n) => $o->setAssignmentStatus($n->getEnumValue(AssignmentStatus::class)),
            'assignmentTargetId' => fn(ParseNode $n) => $o->setAssignmentTargetId($n->getStringValue()),
            'capabilities' => fn(ParseNode $n) => $o->setCapabilities($n->getCollectionOfEnumValues(NumberCapability::class)),
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'civicAddressId' => fn(ParseNode $n) => $o->setCivicAddressId($n->getStringValue()),
            'isoCountryCode' => fn(ParseNode $n) => $o->setIsoCountryCode($n->getStringValue()),
            'locationId' => fn(ParseNode $n) => $o->setLocationId($n->getStringValue()),
            'networkSiteId' => fn(ParseNode $n) => $o->setNetworkSiteId($n->getStringValue()),
            'numberSource' => fn(ParseNode $n) => $o->setNumberSource($n->getEnumValue(NumberSource::class)),
            'numberType' => fn(ParseNode $n) => $o->setNumberType($n->getEnumValue(NumberType::class)),
            'operatorId' => fn(ParseNode $n) => $o->setOperatorId($n->getStringValue()),
            'portInStatus' => fn(ParseNode $n) => $o->setPortInStatus($n->getEnumValue(PortInStatus::class)),
            'reverseNumberLookupOptions' => fn(ParseNode $n) => $o->setReverseNumberLookupOptions($n->getCollectionOfEnumValues(ReverseNumberLookupOption::class)),
            'supportedCustomerActions' => fn(ParseNode $n) => $o->setSupportedCustomerActions($n->getCollectionOfEnumValues(CustomerAction::class)),
            'telephoneNumber' => fn(ParseNode $n) => $o->setTelephoneNumber($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isoCountryCode property value. The ISO country code assigned to the phone number.
     * @return string|null
    */
    public function getIsoCountryCode(): ?string {
        $val = $this->getBackingStore()->get('isoCountryCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isoCountryCode'");
    }

    /**
     * Gets the locationId property value. The ID of the location assigned to the phone number.
     * @return string|null
    */
    public function getLocationId(): ?string {
        $val = $this->getBackingStore()->get('locationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locationId'");
    }

    /**
     * Gets the networkSiteId property value. This property is reserved for internal Microsoft use.
     * @return string|null
    */
    public function getNetworkSiteId(): ?string {
        $val = $this->getBackingStore()->get('networkSiteId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkSiteId'");
    }

    /**
     * Gets the numberSource property value. The source of the phone number. online is used for phone numbers assigned in Microsoft 365, and onPremises is used for phone numbers assigned in AD on-premises, which are synchronized into Microsoft 365. The possible values are: online, onPremises, unknownFutureValue.
     * @return NumberSource|null
    */
    public function getNumberSource(): ?NumberSource {
        $val = $this->getBackingStore()->get('numberSource');
        if (is_null($val) || $val instanceof NumberSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberSource'");
    }

    /**
     * Gets the numberType property value. The numberType property
     * @return NumberType|null
    */
    public function getNumberType(): ?NumberType {
        $val = $this->getBackingStore()->get('numberType');
        if (is_null($val) || $val instanceof NumberType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberType'");
    }

    /**
     * Gets the operatorId property value. The ID of the operator.
     * @return string|null
    */
    public function getOperatorId(): ?string {
        $val = $this->getBackingStore()->get('operatorId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operatorId'");
    }

    /**
     * Gets the portInStatus property value. The status of any port in order covering the phone number. The possible values are: completed, firmOrderCommitmentAccepted, unknownFutureValue.
     * @return PortInStatus|null
    */
    public function getPortInStatus(): ?PortInStatus {
        $val = $this->getBackingStore()->get('portInStatus');
        if (is_null($val) || $val instanceof PortInStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'portInStatus'");
    }

    /**
     * Gets the reverseNumberLookupOptions property value. Status of Reverse Number Lookup (RNL). If set to skipInternalVoip, calls are routed through the external Public Switched Telephone Network (PSTN) instead of using internal VoIP resolution.
     * @return array<ReverseNumberLookupOption>|null
    */
    public function getReverseNumberLookupOptions(): ?array {
        $val = $this->getBackingStore()->get('reverseNumberLookupOptions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ReverseNumberLookupOption::class);
            /** @var array<ReverseNumberLookupOption>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reverseNumberLookupOptions'");
    }

    /**
     * Gets the supportedCustomerActions property value. Indicates what customer actions are available to modify the number.
     * @return array<CustomerAction>|null
    */
    public function getSupportedCustomerActions(): ?array {
        $val = $this->getBackingStore()->get('supportedCustomerActions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomerAction::class);
            /** @var array<CustomerAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedCustomerActions'");
    }

    /**
     * Gets the telephoneNumber property value. The telephone number in the record. The recorded telephone number is always displayed with a '+' prefix, regardless of whether it was originally assigned with one.
     * @return string|null
    */
    public function getTelephoneNumber(): ?string {
        $val = $this->getBackingStore()->get('telephoneNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'telephoneNumber'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('activationState', $this->getActivationState());
        $writer->writeEnumValue('assignmentCategory', $this->getAssignmentCategory());
        $writer->writeEnumValue('assignmentStatus', $this->getAssignmentStatus());
        $writer->writeStringValue('assignmentTargetId', $this->getAssignmentTargetId());
        $writer->writeCollectionOfEnumValues('capabilities', $this->getCapabilities());
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeStringValue('civicAddressId', $this->getCivicAddressId());
        $writer->writeStringValue('isoCountryCode', $this->getIsoCountryCode());
        $writer->writeStringValue('locationId', $this->getLocationId());
        $writer->writeStringValue('networkSiteId', $this->getNetworkSiteId());
        $writer->writeEnumValue('numberSource', $this->getNumberSource());
        $writer->writeEnumValue('numberType', $this->getNumberType());
        $writer->writeStringValue('operatorId', $this->getOperatorId());
        $writer->writeEnumValue('portInStatus', $this->getPortInStatus());
        $writer->writeCollectionOfEnumValues('reverseNumberLookupOptions', $this->getReverseNumberLookupOptions());
        $writer->writeCollectionOfEnumValues('supportedCustomerActions', $this->getSupportedCustomerActions());
        $writer->writeStringValue('telephoneNumber', $this->getTelephoneNumber());
    }

    /**
     * Sets the activationState property value. The activationState property
     * @param ActivationState|null $value Value to set for the activationState property.
    */
    public function setActivationState(?ActivationState $value): void {
        $this->getBackingStore()->set('activationState', $value);
    }

    /**
     * Sets the assignmentCategory property value. Contains the assignment category such as Primary or Private. The possible values are: primary, private, alternate, unknownFutureValue.
     * @param AssignmentCategory|null $value Value to set for the assignmentCategory property.
    */
    public function setAssignmentCategory(?AssignmentCategory $value): void {
        $this->getBackingStore()->set('assignmentCategory', $value);
    }

    /**
     * Sets the assignmentStatus property value. The assignment status of the phone number. The possible values are: unassigned, internalError, userAssigned, conferenceAssigned, voiceApplicationAssigned, thirdPartyAppAssigned, policyAssigned, unknownFutureValue.
     * @param AssignmentStatus|null $value Value to set for the assignmentStatus property.
    */
    public function setAssignmentStatus(?AssignmentStatus $value): void {
        $this->getBackingStore()->set('assignmentStatus', $value);
    }

    /**
     * Sets the assignmentTargetId property value. The ID of the object the phone number is assigned to, either the ObjectId of a user or resource account, or the policy instance ID of a Teams shared calling routing policy instance.
     * @param string|null $value Value to set for the assignmentTargetId property.
    */
    public function setAssignmentTargetId(?string $value): void {
        $this->getBackingStore()->set('assignmentTargetId', $value);
    }

    /**
     * Sets the capabilities property value. The list of capabilities assigned to the phone number.
     * @param array<NumberCapability>|null $value Value to set for the capabilities property.
    */
    public function setCapabilities(?array $value): void {
        $this->getBackingStore()->set('capabilities', $value);
    }

    /**
     * Sets the city property value. The city where the phone number is located or associated with.
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->getBackingStore()->set('city', $value);
    }

    /**
     * Sets the civicAddressId property value. The ID of the civic address assigned to the phone number.
     * @param string|null $value Value to set for the civicAddressId property.
    */
    public function setCivicAddressId(?string $value): void {
        $this->getBackingStore()->set('civicAddressId', $value);
    }

    /**
     * Sets the isoCountryCode property value. The ISO country code assigned to the phone number.
     * @param string|null $value Value to set for the isoCountryCode property.
    */
    public function setIsoCountryCode(?string $value): void {
        $this->getBackingStore()->set('isoCountryCode', $value);
    }

    /**
     * Sets the locationId property value. The ID of the location assigned to the phone number.
     * @param string|null $value Value to set for the locationId property.
    */
    public function setLocationId(?string $value): void {
        $this->getBackingStore()->set('locationId', $value);
    }

    /**
     * Sets the networkSiteId property value. This property is reserved for internal Microsoft use.
     * @param string|null $value Value to set for the networkSiteId property.
    */
    public function setNetworkSiteId(?string $value): void {
        $this->getBackingStore()->set('networkSiteId', $value);
    }

    /**
     * Sets the numberSource property value. The source of the phone number. online is used for phone numbers assigned in Microsoft 365, and onPremises is used for phone numbers assigned in AD on-premises, which are synchronized into Microsoft 365. The possible values are: online, onPremises, unknownFutureValue.
     * @param NumberSource|null $value Value to set for the numberSource property.
    */
    public function setNumberSource(?NumberSource $value): void {
        $this->getBackingStore()->set('numberSource', $value);
    }

    /**
     * Sets the numberType property value. The numberType property
     * @param NumberType|null $value Value to set for the numberType property.
    */
    public function setNumberType(?NumberType $value): void {
        $this->getBackingStore()->set('numberType', $value);
    }

    /**
     * Sets the operatorId property value. The ID of the operator.
     * @param string|null $value Value to set for the operatorId property.
    */
    public function setOperatorId(?string $value): void {
        $this->getBackingStore()->set('operatorId', $value);
    }

    /**
     * Sets the portInStatus property value. The status of any port in order covering the phone number. The possible values are: completed, firmOrderCommitmentAccepted, unknownFutureValue.
     * @param PortInStatus|null $value Value to set for the portInStatus property.
    */
    public function setPortInStatus(?PortInStatus $value): void {
        $this->getBackingStore()->set('portInStatus', $value);
    }

    /**
     * Sets the reverseNumberLookupOptions property value. Status of Reverse Number Lookup (RNL). If set to skipInternalVoip, calls are routed through the external Public Switched Telephone Network (PSTN) instead of using internal VoIP resolution.
     * @param array<ReverseNumberLookupOption>|null $value Value to set for the reverseNumberLookupOptions property.
    */
    public function setReverseNumberLookupOptions(?array $value): void {
        $this->getBackingStore()->set('reverseNumberLookupOptions', $value);
    }

    /**
     * Sets the supportedCustomerActions property value. Indicates what customer actions are available to modify the number.
     * @param array<CustomerAction>|null $value Value to set for the supportedCustomerActions property.
    */
    public function setSupportedCustomerActions(?array $value): void {
        $this->getBackingStore()->set('supportedCustomerActions', $value);
    }

    /**
     * Sets the telephoneNumber property value. The telephone number in the record. The recorded telephone number is always displayed with a '+' prefix, regardless of whether it was originally assigned with one.
     * @param string|null $value Value to set for the telephoneNumber property.
    */
    public function setTelephoneNumber(?string $value): void {
        $this->getBackingStore()->set('telephoneNumber', $value);
    }

}
