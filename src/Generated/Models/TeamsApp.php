<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsApp extends Entity implements Parsable 
{
    /**
     * Instantiates a new teamsApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsApp {
        return new TeamsApp();
    }

    /**
     * Gets the appDefinitions property value. The details for each version of the app.
     * @return array<TeamsAppDefinition>|null
    */
    public function getAppDefinitions(): ?array {
        return $this->getBackingStore()->get('appDefinitions');
    }

    /**
     * Gets the displayName property value. The name of the catalog app provided by the app developer in the Microsoft Teams zip app package.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the distributionMethod property value. The method of distribution for the app. Read-only.
     * @return TeamsAppDistributionMethod|null
    */
    public function getDistributionMethod(): ?TeamsAppDistributionMethod {
        return $this->getBackingStore()->get('distributionMethod');
    }

    /**
     * Gets the externalId property value. The ID of the catalog provided by the app developer in the Microsoft Teams zip app package.
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->getBackingStore()->get('externalId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appDefinitions' => fn(ParseNode $n) => $o->setAppDefinitions($n->getCollectionOfObjectValues([TeamsAppDefinition::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'distributionMethod' => fn(ParseNode $n) => $o->setDistributionMethod($n->getEnumValue(TeamsAppDistributionMethod::class)),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('appDefinitions', $this->getAppDefinitions());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('distributionMethod', $this->getDistributionMethod());
        $writer->writeStringValue('externalId', $this->getExternalId());
    }

    /**
     * Sets the appDefinitions property value. The details for each version of the app.
     * @param array<TeamsAppDefinition>|null $value Value to set for the appDefinitions property.
    */
    public function setAppDefinitions(?array $value): void {
        $this->getBackingStore()->set('appDefinitions', $value);
    }

    /**
     * Sets the displayName property value. The name of the catalog app provided by the app developer in the Microsoft Teams zip app package.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the distributionMethod property value. The method of distribution for the app. Read-only.
     * @param TeamsAppDistributionMethod|null $value Value to set for the distributionMethod property.
    */
    public function setDistributionMethod(?TeamsAppDistributionMethod $value): void {
        $this->getBackingStore()->set('distributionMethod', $value);
    }

    /**
     * Sets the externalId property value. The ID of the catalog provided by the app developer in the Microsoft Teams zip app package.
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->getBackingStore()->set('externalId', $value);
    }

}
