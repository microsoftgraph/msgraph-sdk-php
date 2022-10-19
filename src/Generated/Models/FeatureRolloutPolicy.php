<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FeatureRolloutPolicy extends Entity implements Parsable 
{
    /**
     * @var array<DirectoryObject>|null $appliesTo Nullable. Specifies a list of directoryObjects that feature is enabled for.
    */
    private ?array $appliesTo = null;
    
    /**
     * @var string|null $description A description for this feature rollout policy.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name for this  feature rollout policy.
    */
    private ?string $displayName = null;
    
    /**
     * @var StagedFeatureName|null $feature The feature property
    */
    private ?StagedFeatureName $feature = null;
    
    /**
     * @var bool|null $isAppliedToOrganization Indicates whether this feature rollout policy should be applied to the entire organization.
    */
    private ?bool $isAppliedToOrganization = null;
    
    /**
     * @var bool|null $isEnabled Indicates whether the feature rollout is enabled.
    */
    private ?bool $isEnabled = null;
    
    /**
     * Instantiates a new featureRolloutPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.featureRolloutPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeatureRolloutPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeatureRolloutPolicy {
        return new FeatureRolloutPolicy();
    }

    /**
     * Gets the appliesTo property value. Nullable. Specifies a list of directoryObjects that feature is enabled for.
     * @return array<DirectoryObject>|null
    */
    public function getAppliesTo(): ?array {
        return $this->appliesTo;
    }

    /**
     * Gets the description property value. A description for this feature rollout policy.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name for this  feature rollout policy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the feature property value. The feature property
     * @return StagedFeatureName|null
    */
    public function getFeature(): ?StagedFeatureName {
        return $this->feature;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appliesTo' => fn(ParseNode $n) => $o->setAppliesTo($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'feature' => fn(ParseNode $n) => $o->setFeature($n->getEnumValue(StagedFeatureName::class)),
            'isAppliedToOrganization' => fn(ParseNode $n) => $o->setIsAppliedToOrganization($n->getBooleanValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isAppliedToOrganization property value. Indicates whether this feature rollout policy should be applied to the entire organization.
     * @return bool|null
    */
    public function getIsAppliedToOrganization(): ?bool {
        return $this->isAppliedToOrganization;
    }

    /**
     * Gets the isEnabled property value. Indicates whether the feature rollout is enabled.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('appliesTo', $this->appliesTo);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('feature', $this->feature);
        $writer->writeBooleanValue('isAppliedToOrganization', $this->isAppliedToOrganization);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
    }

    /**
     * Sets the appliesTo property value. Nullable. Specifies a list of directoryObjects that feature is enabled for.
     *  @param array<DirectoryObject>|null $value Value to set for the appliesTo property.
    */
    public function setAppliesTo(?array $value ): void {
        $this->appliesTo = $value;
    }

    /**
     * Sets the description property value. A description for this feature rollout policy.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name for this  feature rollout policy.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the feature property value. The feature property
     *  @param StagedFeatureName|null $value Value to set for the feature property.
    */
    public function setFeature(?StagedFeatureName $value ): void {
        $this->feature = $value;
    }

    /**
     * Sets the isAppliedToOrganization property value. Indicates whether this feature rollout policy should be applied to the entire organization.
     *  @param bool|null $value Value to set for the isAppliedToOrganization property.
    */
    public function setIsAppliedToOrganization(?bool $value ): void {
        $this->isAppliedToOrganization = $value;
    }

    /**
     * Sets the isEnabled property value. Indicates whether the feature rollout is enabled.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

}
