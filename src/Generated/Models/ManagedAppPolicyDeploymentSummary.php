<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedAppPolicyDeploymentSummary extends Entity 
{
    /** @var int|null $configurationDeployedUserCount Not yet documented */
    private ?int $configurationDeployedUserCount = null;
    
    /** @var array<ManagedAppPolicyDeploymentSummaryPerApp>|null $configurationDeploymentSummaryPerApp Not yet documented */
    private ?array $configurationDeploymentSummaryPerApp = null;
    
    /** @var string|null $displayName Not yet documented */
    private ?string $displayName = null;
    
    /** @var DateTime|null $lastRefreshTime Not yet documented */
    private ?DateTime $lastRefreshTime = null;
    
    /** @var string|null $version Version of the entity. */
    private ?string $version = null;
    
    /**
     * Instantiates a new managedAppPolicyDeploymentSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedAppPolicyDeploymentSummary
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ManagedAppPolicyDeploymentSummary {
        return new ManagedAppPolicyDeploymentSummary();
    }

    /**
     * Gets the configurationDeployedUserCount property value. Not yet documented
     * @return int|null
    */
    public function getConfigurationDeployedUserCount(): ?int {
        return $this->configurationDeployedUserCount;
    }

    /**
     * Gets the configurationDeploymentSummaryPerApp property value. Not yet documented
     * @return array<ManagedAppPolicyDeploymentSummaryPerApp>|null
    */
    public function getConfigurationDeploymentSummaryPerApp(): ?array {
        return $this->configurationDeploymentSummaryPerApp;
    }

    /**
     * Gets the displayName property value. Not yet documented
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'configurationDeployedUserCount' => function (self $o, ParseNode $n) { $o->setConfigurationDeployedUserCount($n->getIntegerValue()); },
            'configurationDeploymentSummaryPerApp' => function (self $o, ParseNode $n) { $o->setConfigurationDeploymentSummaryPerApp($n->getCollectionOfObjectValues(ManagedAppPolicyDeploymentSummaryPerApp::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'lastRefreshTime' => function (self $o, ParseNode $n) { $o->setLastRefreshTime($n->getDateTimeValue()); },
            'version' => function (self $o, ParseNode $n) { $o->setVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastRefreshTime property value. Not yet documented
     * @return DateTime|null
    */
    public function getLastRefreshTime(): ?DateTime {
        return $this->lastRefreshTime;
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
        $writer->writeIntegerValue('configurationDeployedUserCount', $this->configurationDeployedUserCount);
        $writer->writeCollectionOfObjectValues('configurationDeploymentSummaryPerApp', $this->configurationDeploymentSummaryPerApp);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastRefreshTime', $this->lastRefreshTime);
        $writer->writeStringValue('version', $this->version);
    }

    /**
     * Sets the configurationDeployedUserCount property value. Not yet documented
     *  @param int|null $value Value to set for the configurationDeployedUserCount property.
    */
    public function setConfigurationDeployedUserCount(?int $value ): void {
        $this->configurationDeployedUserCount = $value;
    }

    /**
     * Sets the configurationDeploymentSummaryPerApp property value. Not yet documented
     *  @param array<ManagedAppPolicyDeploymentSummaryPerApp>|null $value Value to set for the configurationDeploymentSummaryPerApp property.
    */
    public function setConfigurationDeploymentSummaryPerApp(?array $value ): void {
        $this->configurationDeploymentSummaryPerApp = $value;
    }

    /**
     * Sets the displayName property value. Not yet documented
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastRefreshTime property value. Not yet documented
     *  @param DateTime|null $value Value to set for the lastRefreshTime property.
    */
    public function setLastRefreshTime(?DateTime $value ): void {
        $this->lastRefreshTime = $value;
    }

    /**
     * Sets the version property value. Version of the entity.
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}
