<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class FeatureRolloutPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new FeatureRolloutPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * Gets the appliesTo property value. Nullable. Specifies a list of directoryObject resources that feature is enabled for.
     * @return array<DirectoryObject>|null
    */
    public function getAppliesTo(): ?array {
        $val = $this->getBackingStore()->get('appliesTo');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliesTo'");
    }

    /**
     * Gets the description property value. A description for this feature rollout policy.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The display name for this  feature rollout policy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the feature property value. The feature property
     * @return StagedFeatureName|null
    */
    public function getFeature(): ?StagedFeatureName {
        $val = $this->getBackingStore()->get('feature');
        if (is_null($val) || $val instanceof StagedFeatureName) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'feature'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('isAppliedToOrganization');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAppliedToOrganization'");
    }

    /**
     * Gets the isEnabled property value. Indicates whether the feature rollout is enabled.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('appliesTo', $this->getAppliesTo());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('feature', $this->getFeature());
        $writer->writeBooleanValue('isAppliedToOrganization', $this->getIsAppliedToOrganization());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
    }

    /**
     * Sets the appliesTo property value. Nullable. Specifies a list of directoryObject resources that feature is enabled for.
     * @param array<DirectoryObject>|null $value Value to set for the appliesTo property.
    */
    public function setAppliesTo(?array $value): void {
        $this->getBackingStore()->set('appliesTo', $value);
    }

    /**
     * Sets the description property value. A description for this feature rollout policy.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name for this  feature rollout policy.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the feature property value. The feature property
     * @param StagedFeatureName|null $value Value to set for the feature property.
    */
    public function setFeature(?StagedFeatureName $value): void {
        $this->getBackingStore()->set('feature', $value);
    }

    /**
     * Sets the isAppliedToOrganization property value. Indicates whether this feature rollout policy should be applied to the entire organization.
     * @param bool|null $value Value to set for the isAppliedToOrganization property.
    */
    public function setIsAppliedToOrganization(?bool $value): void {
        $this->getBackingStore()->set('isAppliedToOrganization', $value);
    }

    /**
     * Sets the isEnabled property value. Indicates whether the feature rollout is enabled.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

}
