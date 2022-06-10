<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsApp extends Entity implements Parsable 
{
    /**
     * @var array<TeamsAppDefinition>|null $appDefinitions The details for each version of the app.
    */
    private ?array $appDefinitions = null;
    
    /**
     * @var string|null $displayName The name of the catalog app provided by the app developer in the Microsoft Teams zip app package.
    */
    private ?string $displayName = null;
    
    /**
     * @var TeamsAppDistributionMethod|null $distributionMethod The method of distribution for the app. Read-only.
    */
    private ?TeamsAppDistributionMethod $distributionMethod = null;
    
    /**
     * @var string|null $externalId The ID of the catalog provided by the app developer in the Microsoft Teams zip app package.
    */
    private ?string $externalId = null;
    
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
        return $this->appDefinitions;
    }

    /**
     * Gets the displayName property value. The name of the catalog app provided by the app developer in the Microsoft Teams zip app package.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the distributionMethod property value. The method of distribution for the app. Read-only.
     * @return TeamsAppDistributionMethod|null
    */
    public function getDistributionMethod(): ?TeamsAppDistributionMethod {
        return $this->distributionMethod;
    }

    /**
     * Gets the externalId property value. The ID of the catalog provided by the app developer in the Microsoft Teams zip app package.
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->externalId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appDefinitions' => function (ParseNode $n) use ($o) { $o->setAppDefinitions($n->getCollectionOfObjectValues(array(TeamsAppDefinition::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'distributionMethod' => function (ParseNode $n) use ($o) { $o->setDistributionMethod($n->getEnumValue(TeamsAppDistributionMethod::class)); },
            'externalId' => function (ParseNode $n) use ($o) { $o->setExternalId($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('appDefinitions', $this->appDefinitions);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('distributionMethod', $this->distributionMethod);
        $writer->writeStringValue('externalId', $this->externalId);
    }

    /**
     * Sets the appDefinitions property value. The details for each version of the app.
     *  @param array<TeamsAppDefinition>|null $value Value to set for the appDefinitions property.
    */
    public function setAppDefinitions(?array $value ): void {
        $this->appDefinitions = $value;
    }

    /**
     * Sets the displayName property value. The name of the catalog app provided by the app developer in the Microsoft Teams zip app package.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the distributionMethod property value. The method of distribution for the app. Read-only.
     *  @param TeamsAppDistributionMethod|null $value Value to set for the distributionMethod property.
    */
    public function setDistributionMethod(?TeamsAppDistributionMethod $value ): void {
        $this->distributionMethod = $value;
    }

    /**
     * Sets the externalId property value. The ID of the catalog provided by the app developer in the Microsoft Teams zip app package.
     *  @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value ): void {
        $this->externalId = $value;
    }

}
