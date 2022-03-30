<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessConditionSet implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var ConditionalAccessApplications|null $applications Applications and user actions included in and excluded from the policy. Required. */
    private ?ConditionalAccessApplications $applications = null;
    
    /** @var ConditionalAccessClientApplications|null $clientApplications Client applications (service principals and workload identities) included in and excluded from the policy. Either users or clientApplications is required. */
    private ?ConditionalAccessClientApplications $clientApplications = null;
    
    /** @var array<ConditionalAccessClientApp>|null $clientAppTypes Client application types included in the policy. Possible values are: all, browser, mobileAppsAndDesktopClients, exchangeActiveSync, easSupported, other. Required. */
    private ?array $clientAppTypes = null;
    
    /** @var ConditionalAccessDevices|null $devices Devices in the policy. */
    private ?ConditionalAccessDevices $devices = null;
    
    /** @var ConditionalAccessLocations|null $locations Locations included in and excluded from the policy. */
    private ?ConditionalAccessLocations $locations = null;
    
    /** @var ConditionalAccessPlatforms|null $platforms Platforms included in and excluded from the policy. */
    private ?ConditionalAccessPlatforms $platforms = null;
    
    /** @var array<RiskLevel>|null $signInRiskLevels Sign-in risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required. */
    private ?array $signInRiskLevels = null;
    
    /** @var array<RiskLevel>|null $userRiskLevels User risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required. */
    private ?array $userRiskLevels = null;
    
    /** @var ConditionalAccessUsers|null $users Users, groups, and roles included in and excluded from the policy. Required. */
    private ?ConditionalAccessUsers $users = null;
    
    /**
     * Instantiates a new conditionalAccessConditionSet and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessConditionSet
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessConditionSet {
        return new ConditionalAccessConditionSet();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applications property value. Applications and user actions included in and excluded from the policy. Required.
     * @return ConditionalAccessApplications|null
    */
    public function getApplications(): ?ConditionalAccessApplications {
        return $this->applications;
    }

    /**
     * Gets the clientApplications property value. Client applications (service principals and workload identities) included in and excluded from the policy. Either users or clientApplications is required.
     * @return ConditionalAccessClientApplications|null
    */
    public function getClientApplications(): ?ConditionalAccessClientApplications {
        return $this->clientApplications;
    }

    /**
     * Gets the clientAppTypes property value. Client application types included in the policy. Possible values are: all, browser, mobileAppsAndDesktopClients, exchangeActiveSync, easSupported, other. Required.
     * @return array<ConditionalAccessClientApp>|null
    */
    public function getClientAppTypes(): ?array {
        return $this->clientAppTypes;
    }

    /**
     * Gets the devices property value. Devices in the policy.
     * @return ConditionalAccessDevices|null
    */
    public function getDevices(): ?ConditionalAccessDevices {
        return $this->devices;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'applications' => function (self $o, ParseNode $n) { $o->setApplications($n->getObjectValue(ConditionalAccessApplications::class)); },
            'clientApplications' => function (self $o, ParseNode $n) { $o->setClientApplications($n->getObjectValue(ConditionalAccessClientApplications::class)); },
            'clientAppTypes' => function (self $o, ParseNode $n) { $o->setClientAppTypes($n->getCollectionOfEnumValues(ConditionalAccessClientApp::class)); },
            'devices' => function (self $o, ParseNode $n) { $o->setDevices($n->getObjectValue(ConditionalAccessDevices::class)); },
            'locations' => function (self $o, ParseNode $n) { $o->setLocations($n->getObjectValue(ConditionalAccessLocations::class)); },
            'platforms' => function (self $o, ParseNode $n) { $o->setPlatforms($n->getObjectValue(ConditionalAccessPlatforms::class)); },
            'signInRiskLevels' => function (self $o, ParseNode $n) { $o->setSignInRiskLevels($n->getCollectionOfEnumValues(RiskLevel::class)); },
            'userRiskLevels' => function (self $o, ParseNode $n) { $o->setUserRiskLevels($n->getCollectionOfEnumValues(RiskLevel::class)); },
            'users' => function (self $o, ParseNode $n) { $o->setUsers($n->getObjectValue(ConditionalAccessUsers::class)); },
        ];
    }

    /**
     * Gets the locations property value. Locations included in and excluded from the policy.
     * @return ConditionalAccessLocations|null
    */
    public function getLocations(): ?ConditionalAccessLocations {
        return $this->locations;
    }

    /**
     * Gets the platforms property value. Platforms included in and excluded from the policy.
     * @return ConditionalAccessPlatforms|null
    */
    public function getPlatforms(): ?ConditionalAccessPlatforms {
        return $this->platforms;
    }

    /**
     * Gets the signInRiskLevels property value. Sign-in risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
     * @return array<RiskLevel>|null
    */
    public function getSignInRiskLevels(): ?array {
        return $this->signInRiskLevels;
    }

    /**
     * Gets the userRiskLevels property value. User risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
     * @return array<RiskLevel>|null
    */
    public function getUserRiskLevels(): ?array {
        return $this->userRiskLevels;
    }

    /**
     * Gets the users property value. Users, groups, and roles included in and excluded from the policy. Required.
     * @return ConditionalAccessUsers|null
    */
    public function getUsers(): ?ConditionalAccessUsers {
        return $this->users;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('applications', $this->applications);
        $writer->writeObjectValue('clientApplications', $this->clientApplications);
        $writer->writeCollectionOfEnumValues('clientAppTypes', $this->clientAppTypes);
        $writer->writeObjectValue('devices', $this->devices);
        $writer->writeObjectValue('locations', $this->locations);
        $writer->writeObjectValue('platforms', $this->platforms);
        $writer->writeCollectionOfEnumValues('signInRiskLevels', $this->signInRiskLevels);
        $writer->writeCollectionOfEnumValues('userRiskLevels', $this->userRiskLevels);
        $writer->writeObjectValue('users', $this->users);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the applications property value. Applications and user actions included in and excluded from the policy. Required.
     *  @param ConditionalAccessApplications|null $value Value to set for the applications property.
    */
    public function setApplications(?ConditionalAccessApplications $value ): void {
        $this->applications = $value;
    }

    /**
     * Sets the clientApplications property value. Client applications (service principals and workload identities) included in and excluded from the policy. Either users or clientApplications is required.
     *  @param ConditionalAccessClientApplications|null $value Value to set for the clientApplications property.
    */
    public function setClientApplications(?ConditionalAccessClientApplications $value ): void {
        $this->clientApplications = $value;
    }

    /**
     * Sets the clientAppTypes property value. Client application types included in the policy. Possible values are: all, browser, mobileAppsAndDesktopClients, exchangeActiveSync, easSupported, other. Required.
     *  @param array<ConditionalAccessClientApp>|null $value Value to set for the clientAppTypes property.
    */
    public function setClientAppTypes(?array $value ): void {
        $this->clientAppTypes = $value;
    }

    /**
     * Sets the devices property value. Devices in the policy.
     *  @param ConditionalAccessDevices|null $value Value to set for the devices property.
    */
    public function setDevices(?ConditionalAccessDevices $value ): void {
        $this->devices = $value;
    }

    /**
     * Sets the locations property value. Locations included in and excluded from the policy.
     *  @param ConditionalAccessLocations|null $value Value to set for the locations property.
    */
    public function setLocations(?ConditionalAccessLocations $value ): void {
        $this->locations = $value;
    }

    /**
     * Sets the platforms property value. Platforms included in and excluded from the policy.
     *  @param ConditionalAccessPlatforms|null $value Value to set for the platforms property.
    */
    public function setPlatforms(?ConditionalAccessPlatforms $value ): void {
        $this->platforms = $value;
    }

    /**
     * Sets the signInRiskLevels property value. Sign-in risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
     *  @param array<RiskLevel>|null $value Value to set for the signInRiskLevels property.
    */
    public function setSignInRiskLevels(?array $value ): void {
        $this->signInRiskLevels = $value;
    }

    /**
     * Sets the userRiskLevels property value. User risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
     *  @param array<RiskLevel>|null $value Value to set for the userRiskLevels property.
    */
    public function setUserRiskLevels(?array $value ): void {
        $this->userRiskLevels = $value;
    }

    /**
     * Sets the users property value. Users, groups, and roles included in and excluded from the policy. Required.
     *  @param ConditionalAccessUsers|null $value Value to set for the users property.
    */
    public function setUsers(?ConditionalAccessUsers $value ): void {
        $this->users = $value;
    }

}
