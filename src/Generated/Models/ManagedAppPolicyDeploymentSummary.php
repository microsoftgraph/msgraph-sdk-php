<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedAppPolicyDeploymentSummary extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedAppPolicyDeploymentSummary {
        return new ManagedAppPolicyDeploymentSummary();
    }

    /**
     * Gets the configurationDeployedUserCount property value. Not yet documented
     * @return int|null
    */
    public function getConfigurationDeployedUserCount(): ?int {
        return $this->getBackingStore()->get('configurationDeployedUserCount');
    }

    /**
     * Gets the configurationDeploymentSummaryPerApp property value. Not yet documented
     * @return array<ManagedAppPolicyDeploymentSummaryPerApp>|null
    */
    public function getConfigurationDeploymentSummaryPerApp(): ?array {
        return $this->getBackingStore()->get('configurationDeploymentSummaryPerApp');
    }

    /**
     * Gets the displayName property value. Not yet documented
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configurationDeployedUserCount' => fn(ParseNode $n) => $o->setConfigurationDeployedUserCount($n->getIntegerValue()),
            'configurationDeploymentSummaryPerApp' => fn(ParseNode $n) => $o->setConfigurationDeploymentSummaryPerApp($n->getCollectionOfObjectValues([ManagedAppPolicyDeploymentSummaryPerApp::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastRefreshTime' => fn(ParseNode $n) => $o->setLastRefreshTime($n->getDateTimeValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastRefreshTime property value. Not yet documented
     * @return DateTime|null
    */
    public function getLastRefreshTime(): ?DateTime {
        return $this->getBackingStore()->get('lastRefreshTime');
    }

    /**
     * Gets the version property value. Version of the entity.
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->getBackingStore()->get('version');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('configurationDeployedUserCount', $this->getConfigurationDeployedUserCount());
        $writer->writeCollectionOfObjectValues('configurationDeploymentSummaryPerApp', $this->getConfigurationDeploymentSummaryPerApp());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastRefreshTime', $this->getLastRefreshTime());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the configurationDeployedUserCount property value. Not yet documented
     *  @param int|null $value Value to set for the configurationDeployedUserCount property.
    */
    public function setConfigurationDeployedUserCount(?int $value): void {
        $this->getBackingStore()->set('configurationDeployedUserCount', $value);
    }

    /**
     * Sets the configurationDeploymentSummaryPerApp property value. Not yet documented
     *  @param array<ManagedAppPolicyDeploymentSummaryPerApp>|null $value Value to set for the configurationDeploymentSummaryPerApp property.
    */
    public function setConfigurationDeploymentSummaryPerApp(?array $value): void {
        $this->getBackingStore()->set('configurationDeploymentSummaryPerApp', $value);
    }

    /**
     * Sets the displayName property value. Not yet documented
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastRefreshTime property value. Not yet documented
     *  @param DateTime|null $value Value to set for the lastRefreshTime property.
    */
    public function setLastRefreshTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastRefreshTime', $value);
    }

    /**
     * Sets the version property value. Version of the entity.
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
