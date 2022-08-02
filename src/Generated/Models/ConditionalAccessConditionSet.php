<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessConditionSet implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ConditionalAccessApplications|null $applications Applications and user actions included in and excluded from the policy. Required.
    */
    private ?ConditionalAccessApplications $applications = null;
    
    /**
     * @var ConditionalAccessClientApplications|null $clientApplications Client applications (service principals and workload identities) included in and excluded from the policy. Either users or clientApplications is required.
    */
    private ?ConditionalAccessClientApplications $clientApplications = null;
    
    /**
     * @var array<string>|null $clientAppTypes Client application types included in the policy. Possible values are: all, browser, mobileAppsAndDesktopClients, exchangeActiveSync, easSupported, other. Required.
    */
    private ?array $clientAppTypes = null;
    
    /**
     * @var ConditionalAccessDevices|null $devices Devices in the policy.
    */
    private ?ConditionalAccessDevices $devices = null;
    
    /**
     * @var ConditionalAccessLocations|null $locations Locations included in and excluded from the policy.
    */
    private ?ConditionalAccessLocations $locations = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var ConditionalAccessPlatforms|null $platforms Platforms included in and excluded from the policy.
    */
    private ?ConditionalAccessPlatforms $platforms = null;
    
    /**
     * @var array<string>|null $servicePrincipalRiskLevels Service principal risk levels included in the policy. Possible values are: low, medium, high, none, unknownFutureValue.
    */
    private ?array $servicePrincipalRiskLevels = null;
    
    /**
     * @var array<string>|null $signInRiskLevels Sign-in risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
    */
    private ?array $signInRiskLevels = null;
    
    /**
     * @var array<string>|null $userRiskLevels User risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
    */
    private ?array $userRiskLevels = null;
    
    /**
     * @var ConditionalAccessUsers|null $users Users, groups, and roles included in and excluded from the policy. Either users or clientApplications is required.
    */
    private ?ConditionalAccessUsers $users = null;
    
    /**
     * Instantiates a new conditionalAccessConditionSet and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.conditionalAccessConditionSet');
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
     * @return array<string>|null
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
        $o = $this;
        return  [
            'applications' => function (ParseNode $n) use ($o) { $o->setApplications($n->getObjectValue(array(ConditionalAccessApplications::class, 'createFromDiscriminatorValue'))); },
            'clientApplications' => function (ParseNode $n) use ($o) { $o->setClientApplications($n->getObjectValue(array(ConditionalAccessClientApplications::class, 'createFromDiscriminatorValue'))); },
            'clientAppTypes' => function (ParseNode $n) use ($o) { $o->setClientAppTypes($n->getCollectionOfPrimitiveValues()); },
            'devices' => function (ParseNode $n) use ($o) { $o->setDevices($n->getObjectValue(array(ConditionalAccessDevices::class, 'createFromDiscriminatorValue'))); },
            'locations' => function (ParseNode $n) use ($o) { $o->setLocations($n->getObjectValue(array(ConditionalAccessLocations::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'platforms' => function (ParseNode $n) use ($o) { $o->setPlatforms($n->getObjectValue(array(ConditionalAccessPlatforms::class, 'createFromDiscriminatorValue'))); },
            'servicePrincipalRiskLevels' => function (ParseNode $n) use ($o) { $o->setServicePrincipalRiskLevels($n->getCollectionOfPrimitiveValues()); },
            'signInRiskLevels' => function (ParseNode $n) use ($o) { $o->setSignInRiskLevels($n->getCollectionOfPrimitiveValues()); },
            'userRiskLevels' => function (ParseNode $n) use ($o) { $o->setUserRiskLevels($n->getCollectionOfPrimitiveValues()); },
            'users' => function (ParseNode $n) use ($o) { $o->setUsers($n->getObjectValue(array(ConditionalAccessUsers::class, 'createFromDiscriminatorValue'))); },
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
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the platforms property value. Platforms included in and excluded from the policy.
     * @return ConditionalAccessPlatforms|null
    */
    public function getPlatforms(): ?ConditionalAccessPlatforms {
        return $this->platforms;
    }

    /**
     * Gets the servicePrincipalRiskLevels property value. Service principal risk levels included in the policy. Possible values are: low, medium, high, none, unknownFutureValue.
     * @return array<string>|null
    */
    public function getServicePrincipalRiskLevels(): ?array {
        return $this->servicePrincipalRiskLevels;
    }

    /**
     * Gets the signInRiskLevels property value. Sign-in risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
     * @return array<string>|null
    */
    public function getSignInRiskLevels(): ?array {
        return $this->signInRiskLevels;
    }

    /**
     * Gets the userRiskLevels property value. User risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
     * @return array<string>|null
    */
    public function getUserRiskLevels(): ?array {
        return $this->userRiskLevels;
    }

    /**
     * Gets the users property value. Users, groups, and roles included in and excluded from the policy. Either users or clientApplications is required.
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
        $writer->writeCollectionOfPrimitiveValues('clientAppTypes', $this->clientAppTypes);
        $writer->writeObjectValue('devices', $this->devices);
        $writer->writeObjectValue('locations', $this->locations);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('platforms', $this->platforms);
        $writer->writeCollectionOfPrimitiveValues('servicePrincipalRiskLevels', $this->servicePrincipalRiskLevels);
        $writer->writeCollectionOfPrimitiveValues('signInRiskLevels', $this->signInRiskLevels);
        $writer->writeCollectionOfPrimitiveValues('userRiskLevels', $this->userRiskLevels);
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
     *  @param array<string>|null $value Value to set for the clientAppTypes property.
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the platforms property value. Platforms included in and excluded from the policy.
     *  @param ConditionalAccessPlatforms|null $value Value to set for the platforms property.
    */
    public function setPlatforms(?ConditionalAccessPlatforms $value ): void {
        $this->platforms = $value;
    }

    /**
     * Sets the servicePrincipalRiskLevels property value. Service principal risk levels included in the policy. Possible values are: low, medium, high, none, unknownFutureValue.
     *  @param array<string>|null $value Value to set for the servicePrincipalRiskLevels property.
    */
    public function setServicePrincipalRiskLevels(?array $value ): void {
        $this->servicePrincipalRiskLevels = $value;
    }

    /**
     * Sets the signInRiskLevels property value. Sign-in risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
     *  @param array<string>|null $value Value to set for the signInRiskLevels property.
    */
    public function setSignInRiskLevels(?array $value ): void {
        $this->signInRiskLevels = $value;
    }

    /**
     * Sets the userRiskLevels property value. User risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
     *  @param array<string>|null $value Value to set for the userRiskLevels property.
    */
    public function setUserRiskLevels(?array $value ): void {
        $this->userRiskLevels = $value;
    }

    /**
     * Sets the users property value. Users, groups, and roles included in and excluded from the policy. Either users or clientApplications is required.
     *  @param ConditionalAccessUsers|null $value Value to set for the users property.
    */
    public function setUsers(?ConditionalAccessUsers $value ): void {
        $this->users = $value;
    }

}
