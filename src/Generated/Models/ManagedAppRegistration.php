<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedAppRegistration extends Entity implements Parsable 
{
    /**
     * @var MobileAppIdentifier|null $appIdentifier The app package Identifier
    */
    private ?MobileAppIdentifier $appIdentifier = null;
    
    /**
     * @var string|null $applicationVersion App version
    */
    private ?string $applicationVersion = null;
    
    /**
     * @var array<ManagedAppPolicy>|null $appliedPolicies Zero or more policys already applied on the registered app when it last synchronized with managment service.
    */
    private ?array $appliedPolicies = null;
    
    /**
     * @var DateTime|null $createdDateTime Date and time of creation
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $deviceName Host device name
    */
    private ?string $deviceName = null;
    
    /**
     * @var string|null $deviceTag App management SDK generated tag, which helps relate apps hosted on the same device. Not guaranteed to relate apps in all conditions.
    */
    private ?string $deviceTag = null;
    
    /**
     * @var string|null $deviceType Host device type
    */
    private ?string $deviceType = null;
    
    /**
     * @var array<ManagedAppFlaggedReason>|null $flaggedReasons Zero or more reasons an app registration is flagged. E.g. app running on rooted device
    */
    private ?array $flaggedReasons = null;
    
    /**
     * @var array<ManagedAppPolicy>|null $intendedPolicies Zero or more policies admin intended for the app as of now.
    */
    private ?array $intendedPolicies = null;
    
    /**
     * @var DateTime|null $lastSyncDateTime Date and time of last the app synced with management service.
    */
    private ?DateTime $lastSyncDateTime = null;
    
    /**
     * @var string|null $managementSdkVersion App management SDK version
    */
    private ?string $managementSdkVersion = null;
    
    /**
     * @var array<ManagedAppOperation>|null $operations Zero or more long running operations triggered on the app registration.
    */
    private ?array $operations = null;
    
    /**
     * @var string|null $platformVersion Operating System version
    */
    private ?string $platformVersion = null;
    
    /**
     * @var string|null $userId The user Id to who this app registration belongs.
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $version Version of the entity.
    */
    private ?string $version = null;
    
    /**
     * Instantiates a new managedAppRegistration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedAppRegistration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedAppRegistration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedAppRegistration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.androidManagedAppRegistration': return new AndroidManagedAppRegistration();
                case '#microsoft.graph.iosManagedAppRegistration': return new IosManagedAppRegistration();
            }
        }
        return new ManagedAppRegistration();
    }

    /**
     * Gets the appIdentifier property value. The app package Identifier
     * @return MobileAppIdentifier|null
    */
    public function getAppIdentifier(): ?MobileAppIdentifier {
        return $this->appIdentifier;
    }

    /**
     * Gets the applicationVersion property value. App version
     * @return string|null
    */
    public function getApplicationVersion(): ?string {
        return $this->applicationVersion;
    }

    /**
     * Gets the appliedPolicies property value. Zero or more policys already applied on the registered app when it last synchronized with managment service.
     * @return array<ManagedAppPolicy>|null
    */
    public function getAppliedPolicies(): ?array {
        return $this->appliedPolicies;
    }

    /**
     * Gets the createdDateTime property value. Date and time of creation
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the deviceName property value. Host device name
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * Gets the deviceTag property value. App management SDK generated tag, which helps relate apps hosted on the same device. Not guaranteed to relate apps in all conditions.
     * @return string|null
    */
    public function getDeviceTag(): ?string {
        return $this->deviceTag;
    }

    /**
     * Gets the deviceType property value. Host device type
     * @return string|null
    */
    public function getDeviceType(): ?string {
        return $this->deviceType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appIdentifier' => fn(ParseNode $n) => $o->setAppIdentifier($n->getObjectValue([MobileAppIdentifier::class, 'createFromDiscriminatorValue'])),
            'applicationVersion' => fn(ParseNode $n) => $o->setApplicationVersion($n->getStringValue()),
            'appliedPolicies' => fn(ParseNode $n) => $o->setAppliedPolicies($n->getCollectionOfObjectValues([ManagedAppPolicy::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'deviceTag' => fn(ParseNode $n) => $o->setDeviceTag($n->getStringValue()),
            'deviceType' => fn(ParseNode $n) => $o->setDeviceType($n->getStringValue()),
            'flaggedReasons' => fn(ParseNode $n) => $o->setFlaggedReasons($n->getCollectionOfEnumValues(ManagedAppFlaggedReason::class)),
            'intendedPolicies' => fn(ParseNode $n) => $o->setIntendedPolicies($n->getCollectionOfObjectValues([ManagedAppPolicy::class, 'createFromDiscriminatorValue'])),
            'lastSyncDateTime' => fn(ParseNode $n) => $o->setLastSyncDateTime($n->getDateTimeValue()),
            'managementSdkVersion' => fn(ParseNode $n) => $o->setManagementSdkVersion($n->getStringValue()),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([ManagedAppOperation::class, 'createFromDiscriminatorValue'])),
            'platformVersion' => fn(ParseNode $n) => $o->setPlatformVersion($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the flaggedReasons property value. Zero or more reasons an app registration is flagged. E.g. app running on rooted device
     * @return array<ManagedAppFlaggedReason>|null
    */
    public function getFlaggedReasons(): ?array {
        return $this->flaggedReasons;
    }

    /**
     * Gets the intendedPolicies property value. Zero or more policies admin intended for the app as of now.
     * @return array<ManagedAppPolicy>|null
    */
    public function getIntendedPolicies(): ?array {
        return $this->intendedPolicies;
    }

    /**
     * Gets the lastSyncDateTime property value. Date and time of last the app synced with management service.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->lastSyncDateTime;
    }

    /**
     * Gets the managementSdkVersion property value. App management SDK version
     * @return string|null
    */
    public function getManagementSdkVersion(): ?string {
        return $this->managementSdkVersion;
    }

    /**
     * Gets the operations property value. Zero or more long running operations triggered on the app registration.
     * @return array<ManagedAppOperation>|null
    */
    public function getOperations(): ?array {
        return $this->operations;
    }

    /**
     * Gets the platformVersion property value. Operating System version
     * @return string|null
    */
    public function getPlatformVersion(): ?string {
        return $this->platformVersion;
    }

    /**
     * Gets the userId property value. The user Id to who this app registration belongs.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the version property value. Version of the entity.
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('appIdentifier', $this->appIdentifier);
        $writer->writeStringValue('applicationVersion', $this->applicationVersion);
        $writer->writeCollectionOfObjectValues('appliedPolicies', $this->appliedPolicies);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeStringValue('deviceTag', $this->deviceTag);
        $writer->writeStringValue('deviceType', $this->deviceType);
        $writer->writeCollectionOfEnumValues('flaggedReasons', $this->flaggedReasons);
        $writer->writeCollectionOfObjectValues('intendedPolicies', $this->intendedPolicies);
        $writer->writeDateTimeValue('lastSyncDateTime', $this->lastSyncDateTime);
        $writer->writeStringValue('managementSdkVersion', $this->managementSdkVersion);
        $writer->writeCollectionOfObjectValues('operations', $this->operations);
        $writer->writeStringValue('platformVersion', $this->platformVersion);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeStringValue('version', $this->version);
    }

    /**
     * Sets the appIdentifier property value. The app package Identifier
     *  @param MobileAppIdentifier|null $value Value to set for the appIdentifier property.
    */
    public function setAppIdentifier(?MobileAppIdentifier $value ): void {
        $this->appIdentifier = $value;
    }

    /**
     * Sets the applicationVersion property value. App version
     *  @param string|null $value Value to set for the applicationVersion property.
    */
    public function setApplicationVersion(?string $value ): void {
        $this->applicationVersion = $value;
    }

    /**
     * Sets the appliedPolicies property value. Zero or more policys already applied on the registered app when it last synchronized with managment service.
     *  @param array<ManagedAppPolicy>|null $value Value to set for the appliedPolicies property.
    */
    public function setAppliedPolicies(?array $value ): void {
        $this->appliedPolicies = $value;
    }

    /**
     * Sets the createdDateTime property value. Date and time of creation
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the deviceName property value. Host device name
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the deviceTag property value. App management SDK generated tag, which helps relate apps hosted on the same device. Not guaranteed to relate apps in all conditions.
     *  @param string|null $value Value to set for the deviceTag property.
    */
    public function setDeviceTag(?string $value ): void {
        $this->deviceTag = $value;
    }

    /**
     * Sets the deviceType property value. Host device type
     *  @param string|null $value Value to set for the deviceType property.
    */
    public function setDeviceType(?string $value ): void {
        $this->deviceType = $value;
    }

    /**
     * Sets the flaggedReasons property value. Zero or more reasons an app registration is flagged. E.g. app running on rooted device
     *  @param array<ManagedAppFlaggedReason>|null $value Value to set for the flaggedReasons property.
    */
    public function setFlaggedReasons(?array $value ): void {
        $this->flaggedReasons = $value;
    }

    /**
     * Sets the intendedPolicies property value. Zero or more policies admin intended for the app as of now.
     *  @param array<ManagedAppPolicy>|null $value Value to set for the intendedPolicies property.
    */
    public function setIntendedPolicies(?array $value ): void {
        $this->intendedPolicies = $value;
    }

    /**
     * Sets the lastSyncDateTime property value. Date and time of last the app synced with management service.
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value ): void {
        $this->lastSyncDateTime = $value;
    }

    /**
     * Sets the managementSdkVersion property value. App management SDK version
     *  @param string|null $value Value to set for the managementSdkVersion property.
    */
    public function setManagementSdkVersion(?string $value ): void {
        $this->managementSdkVersion = $value;
    }

    /**
     * Sets the operations property value. Zero or more long running operations triggered on the app registration.
     *  @param array<ManagedAppOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value ): void {
        $this->operations = $value;
    }

    /**
     * Sets the platformVersion property value. Operating System version
     *  @param string|null $value Value to set for the platformVersion property.
    */
    public function setPlatformVersion(?string $value ): void {
        $this->platformVersion = $value;
    }

    /**
     * Sets the userId property value. The user Id to who this app registration belongs.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the version property value. Version of the entity.
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}
