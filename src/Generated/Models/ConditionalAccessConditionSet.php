<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ConditionalAccessConditionSet implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new conditionalAccessConditionSet and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessConditionSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessConditionSet {
        return new ConditionalAccessConditionSet();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the applications property value. Applications and user actions included in and excluded from the policy. Required.
     * @return ConditionalAccessApplications|null
    */
    public function getApplications(): ?ConditionalAccessApplications {
        return $this->getBackingStore()->get('applications');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the clientApplications property value. Client applications (service principals and workload identities) included in and excluded from the policy. Either users or clientApplications is required.
     * @return ConditionalAccessClientApplications|null
    */
    public function getClientApplications(): ?ConditionalAccessClientApplications {
        return $this->getBackingStore()->get('clientApplications');
    }

    /**
     * Gets the clientAppTypes property value. Client application types included in the policy. Possible values are: all, browser, mobileAppsAndDesktopClients, exchangeActiveSync, easSupported, other. Required.
     * @return array<ConditionalAccessClientApp>|null
    */
    public function getClientAppTypes(): ?array {
        return $this->getBackingStore()->get('clientAppTypes');
    }

    /**
     * Gets the devices property value. Devices in the policy.
     * @return ConditionalAccessDevices|null
    */
    public function getDevices(): ?ConditionalAccessDevices {
        return $this->getBackingStore()->get('devices');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applications' => fn(ParseNode $n) => $o->setApplications($n->getObjectValue([ConditionalAccessApplications::class, 'createFromDiscriminatorValue'])),
            'clientApplications' => fn(ParseNode $n) => $o->setClientApplications($n->getObjectValue([ConditionalAccessClientApplications::class, 'createFromDiscriminatorValue'])),
            'clientAppTypes' => fn(ParseNode $n) => $o->setClientAppTypes($n->getCollectionOfEnumValues(ConditionalAccessClientApp::class)),
            'devices' => fn(ParseNode $n) => $o->setDevices($n->getObjectValue([ConditionalAccessDevices::class, 'createFromDiscriminatorValue'])),
            'locations' => fn(ParseNode $n) => $o->setLocations($n->getObjectValue([ConditionalAccessLocations::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'platforms' => fn(ParseNode $n) => $o->setPlatforms($n->getObjectValue([ConditionalAccessPlatforms::class, 'createFromDiscriminatorValue'])),
            'servicePrincipalRiskLevels' => fn(ParseNode $n) => $o->setServicePrincipalRiskLevels($n->getCollectionOfEnumValues(RiskLevel::class)),
            'signInRiskLevels' => fn(ParseNode $n) => $o->setSignInRiskLevels($n->getCollectionOfEnumValues(RiskLevel::class)),
            'userRiskLevels' => fn(ParseNode $n) => $o->setUserRiskLevels($n->getCollectionOfEnumValues(RiskLevel::class)),
            'users' => fn(ParseNode $n) => $o->setUsers($n->getObjectValue([ConditionalAccessUsers::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the locations property value. Locations included in and excluded from the policy.
     * @return ConditionalAccessLocations|null
    */
    public function getLocations(): ?ConditionalAccessLocations {
        return $this->getBackingStore()->get('locations');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the platforms property value. Platforms included in and excluded from the policy.
     * @return ConditionalAccessPlatforms|null
    */
    public function getPlatforms(): ?ConditionalAccessPlatforms {
        return $this->getBackingStore()->get('platforms');
    }

    /**
     * Gets the servicePrincipalRiskLevels property value. Service principal risk levels included in the policy. Possible values are: low, medium, high, none, unknownFutureValue.
     * @return array<RiskLevel>|null
    */
    public function getServicePrincipalRiskLevels(): ?array {
        return $this->getBackingStore()->get('servicePrincipalRiskLevels');
    }

    /**
     * Gets the signInRiskLevels property value. Sign-in risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
     * @return array<RiskLevel>|null
    */
    public function getSignInRiskLevels(): ?array {
        return $this->getBackingStore()->get('signInRiskLevels');
    }

    /**
     * Gets the userRiskLevels property value. User risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
     * @return array<RiskLevel>|null
    */
    public function getUserRiskLevels(): ?array {
        return $this->getBackingStore()->get('userRiskLevels');
    }

    /**
     * Gets the users property value. Users, groups, and roles included in and excluded from the policy. Either users or clientApplications is required.
     * @return ConditionalAccessUsers|null
    */
    public function getUsers(): ?ConditionalAccessUsers {
        return $this->getBackingStore()->get('users');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('applications', $this->getApplications());
        $writer->writeObjectValue('clientApplications', $this->getClientApplications());
        $writer->writeCollectionOfEnumValues('clientAppTypes', $this->getClientAppTypes());
        $writer->writeObjectValue('devices', $this->getDevices());
        $writer->writeObjectValue('locations', $this->getLocations());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('platforms', $this->getPlatforms());
        $writer->writeCollectionOfEnumValues('servicePrincipalRiskLevels', $this->getServicePrincipalRiskLevels());
        $writer->writeCollectionOfEnumValues('signInRiskLevels', $this->getSignInRiskLevels());
        $writer->writeCollectionOfEnumValues('userRiskLevels', $this->getUserRiskLevels());
        $writer->writeObjectValue('users', $this->getUsers());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the applications property value. Applications and user actions included in and excluded from the policy. Required.
     * @param ConditionalAccessApplications|null $value Value to set for the applications property.
    */
    public function setApplications(?ConditionalAccessApplications $value): void {
        $this->getBackingStore()->set('applications', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the clientApplications property value. Client applications (service principals and workload identities) included in and excluded from the policy. Either users or clientApplications is required.
     * @param ConditionalAccessClientApplications|null $value Value to set for the clientApplications property.
    */
    public function setClientApplications(?ConditionalAccessClientApplications $value): void {
        $this->getBackingStore()->set('clientApplications', $value);
    }

    /**
     * Sets the clientAppTypes property value. Client application types included in the policy. Possible values are: all, browser, mobileAppsAndDesktopClients, exchangeActiveSync, easSupported, other. Required.
     * @param array<ConditionalAccessClientApp>|null $value Value to set for the clientAppTypes property.
    */
    public function setClientAppTypes(?array $value): void {
        $this->getBackingStore()->set('clientAppTypes', $value);
    }

    /**
     * Sets the devices property value. Devices in the policy.
     * @param ConditionalAccessDevices|null $value Value to set for the devices property.
    */
    public function setDevices(?ConditionalAccessDevices $value): void {
        $this->getBackingStore()->set('devices', $value);
    }

    /**
     * Sets the locations property value. Locations included in and excluded from the policy.
     * @param ConditionalAccessLocations|null $value Value to set for the locations property.
    */
    public function setLocations(?ConditionalAccessLocations $value): void {
        $this->getBackingStore()->set('locations', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the platforms property value. Platforms included in and excluded from the policy.
     * @param ConditionalAccessPlatforms|null $value Value to set for the platforms property.
    */
    public function setPlatforms(?ConditionalAccessPlatforms $value): void {
        $this->getBackingStore()->set('platforms', $value);
    }

    /**
     * Sets the servicePrincipalRiskLevels property value. Service principal risk levels included in the policy. Possible values are: low, medium, high, none, unknownFutureValue.
     * @param array<RiskLevel>|null $value Value to set for the servicePrincipalRiskLevels property.
    */
    public function setServicePrincipalRiskLevels(?array $value): void {
        $this->getBackingStore()->set('servicePrincipalRiskLevels', $value);
    }

    /**
     * Sets the signInRiskLevels property value. Sign-in risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
     * @param array<RiskLevel>|null $value Value to set for the signInRiskLevels property.
    */
    public function setSignInRiskLevels(?array $value): void {
        $this->getBackingStore()->set('signInRiskLevels', $value);
    }

    /**
     * Sets the userRiskLevels property value. User risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
     * @param array<RiskLevel>|null $value Value to set for the userRiskLevels property.
    */
    public function setUserRiskLevels(?array $value): void {
        $this->getBackingStore()->set('userRiskLevels', $value);
    }

    /**
     * Sets the users property value. Users, groups, and roles included in and excluded from the policy. Either users or clientApplications is required.
     * @param ConditionalAccessUsers|null $value Value to set for the users property.
    */
    public function setUsers(?ConditionalAccessUsers $value): void {
        $this->getBackingStore()->set('users', $value);
    }

}
