<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ConditionalAccessConditionSet implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ConditionalAccessConditionSet and sets the default values.
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
     * Gets the applications property value. Applications and user actions included in and excluded from the policy. Required.
     * @return ConditionalAccessApplications|null
    */
    public function getApplications(): ?ConditionalAccessApplications {
        $val = $this->getBackingStore()->get('applications');
        if (is_null($val) || $val instanceof ConditionalAccessApplications) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applications'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
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
        $val = $this->getBackingStore()->get('clientApplications');
        if (is_null($val) || $val instanceof ConditionalAccessClientApplications) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientApplications'");
    }

    /**
     * Gets the clientAppTypes property value. Client application types included in the policy. Possible values are: all, browser, mobileAppsAndDesktopClients, exchangeActiveSync, easSupported, other. Required.  The easUnsupported enumeration member will be deprecated in favor of exchangeActiveSync which includes EAS supported and unsupported platforms.
     * @return array<ConditionalAccessClientApp>|null
    */
    public function getClientAppTypes(): ?array {
        $val = $this->getBackingStore()->get('clientAppTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConditionalAccessClientApp::class);
            /** @var array<ConditionalAccessClientApp>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientAppTypes'");
    }

    /**
     * Gets the devices property value. Devices in the policy.
     * @return ConditionalAccessDevices|null
    */
    public function getDevices(): ?ConditionalAccessDevices {
        $val = $this->getBackingStore()->get('devices');
        if (is_null($val) || $val instanceof ConditionalAccessDevices) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'devices'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applications' => fn(ParseNode $n) => $o->setApplications($n->getObjectValue([ConditionalAccessApplications::class, 'createFromDiscriminatorValue'])),
            'clientApplications' => fn(ParseNode $n) => $o->setClientApplications($n->getObjectValue([ConditionalAccessClientApplications::class, 'createFromDiscriminatorValue'])),
            'clientAppTypes' => fn(ParseNode $n) => $o->setClientAppTypes($n->getCollectionOfEnumValues(ConditionalAccessClientApp::class)),
            'devices' => fn(ParseNode $n) => $o->setDevices($n->getObjectValue([ConditionalAccessDevices::class, 'createFromDiscriminatorValue'])),
            'insiderRiskLevels' => fn(ParseNode $n) => $o->setInsiderRiskLevels($n->getEnumValue(ConditionalAccessInsiderRiskLevels::class)),
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
     * Gets the insiderRiskLevels property value. The insiderRiskLevels property
     * @return ConditionalAccessInsiderRiskLevels|null
    */
    public function getInsiderRiskLevels(): ?ConditionalAccessInsiderRiskLevels {
        $val = $this->getBackingStore()->get('insiderRiskLevels');
        if (is_null($val) || $val instanceof ConditionalAccessInsiderRiskLevels) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'insiderRiskLevels'");
    }

    /**
     * Gets the locations property value. Locations included in and excluded from the policy.
     * @return ConditionalAccessLocations|null
    */
    public function getLocations(): ?ConditionalAccessLocations {
        $val = $this->getBackingStore()->get('locations');
        if (is_null($val) || $val instanceof ConditionalAccessLocations) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locations'");
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
     * Gets the platforms property value. Platforms included in and excluded from the policy.
     * @return ConditionalAccessPlatforms|null
    */
    public function getPlatforms(): ?ConditionalAccessPlatforms {
        $val = $this->getBackingStore()->get('platforms');
        if (is_null($val) || $val instanceof ConditionalAccessPlatforms) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'platforms'");
    }

    /**
     * Gets the servicePrincipalRiskLevels property value. Service principal risk levels included in the policy. Possible values are: low, medium, high, none, unknownFutureValue.
     * @return array<RiskLevel>|null
    */
    public function getServicePrincipalRiskLevels(): ?array {
        $val = $this->getBackingStore()->get('servicePrincipalRiskLevels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RiskLevel::class);
            /** @var array<RiskLevel>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipalRiskLevels'");
    }

    /**
     * Gets the signInRiskLevels property value. Sign-in risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
     * @return array<RiskLevel>|null
    */
    public function getSignInRiskLevels(): ?array {
        $val = $this->getBackingStore()->get('signInRiskLevels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RiskLevel::class);
            /** @var array<RiskLevel>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signInRiskLevels'");
    }

    /**
     * Gets the userRiskLevels property value. User risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
     * @return array<RiskLevel>|null
    */
    public function getUserRiskLevels(): ?array {
        $val = $this->getBackingStore()->get('userRiskLevels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RiskLevel::class);
            /** @var array<RiskLevel>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRiskLevels'");
    }

    /**
     * Gets the users property value. Users, groups, and roles included in and excluded from the policy. Either users or clientApplications is required.
     * @return ConditionalAccessUsers|null
    */
    public function getUsers(): ?ConditionalAccessUsers {
        $val = $this->getBackingStore()->get('users');
        if (is_null($val) || $val instanceof ConditionalAccessUsers) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'users'");
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
        $writer->writeEnumValue('insiderRiskLevels', $this->getInsiderRiskLevels());
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
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Sets the BackingStore property value. Stores model information.
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
     * Sets the clientAppTypes property value. Client application types included in the policy. Possible values are: all, browser, mobileAppsAndDesktopClients, exchangeActiveSync, easSupported, other. Required.  The easUnsupported enumeration member will be deprecated in favor of exchangeActiveSync which includes EAS supported and unsupported platforms.
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
     * Sets the insiderRiskLevels property value. The insiderRiskLevels property
     * @param ConditionalAccessInsiderRiskLevels|null $value Value to set for the insiderRiskLevels property.
    */
    public function setInsiderRiskLevels(?ConditionalAccessInsiderRiskLevels $value): void {
        $this->getBackingStore()->set('insiderRiskLevels', $value);
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
     * @param string|null $value Value to set for the @odata.type property.
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
