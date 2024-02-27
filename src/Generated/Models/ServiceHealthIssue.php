<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ServiceHealthIssue extends ServiceAnnouncementBase implements Parsable 
{
    /**
     * Instantiates a new ServiceHealthIssue and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.serviceHealthIssue');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceHealthIssue
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServiceHealthIssue {
        return new ServiceHealthIssue();
    }

    /**
     * Gets the classification property value. The classification property
     * @return ServiceHealthClassificationType|null
    */
    public function getClassification(): ?ServiceHealthClassificationType {
        $val = $this->getBackingStore()->get('classification');
        if (is_null($val) || $val instanceof ServiceHealthClassificationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classification'");
    }

    /**
     * Gets the feature property value. The feature name of the service issue.
     * @return string|null
    */
    public function getFeature(): ?string {
        $val = $this->getBackingStore()->get('feature');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'feature'");
    }

    /**
     * Gets the featureGroup property value. The feature group name of the service issue.
     * @return string|null
    */
    public function getFeatureGroup(): ?string {
        $val = $this->getBackingStore()->get('featureGroup');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'featureGroup'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'classification' => fn(ParseNode $n) => $o->setClassification($n->getEnumValue(ServiceHealthClassificationType::class)),
            'feature' => fn(ParseNode $n) => $o->setFeature($n->getStringValue()),
            'featureGroup' => fn(ParseNode $n) => $o->setFeatureGroup($n->getStringValue()),
            'impactDescription' => fn(ParseNode $n) => $o->setImpactDescription($n->getStringValue()),
            'isResolved' => fn(ParseNode $n) => $o->setIsResolved($n->getBooleanValue()),
            'origin' => fn(ParseNode $n) => $o->setOrigin($n->getEnumValue(ServiceHealthOrigin::class)),
            'posts' => fn(ParseNode $n) => $o->setPosts($n->getCollectionOfObjectValues([ServiceHealthIssuePost::class, 'createFromDiscriminatorValue'])),
            'service' => fn(ParseNode $n) => $o->setService($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ServiceHealthStatus::class)),
        ]);
    }

    /**
     * Gets the impactDescription property value. The description of the service issue impact.
     * @return string|null
    */
    public function getImpactDescription(): ?string {
        $val = $this->getBackingStore()->get('impactDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'impactDescription'");
    }

    /**
     * Gets the isResolved property value. Indicates whether the issue is resolved.
     * @return bool|null
    */
    public function getIsResolved(): ?bool {
        $val = $this->getBackingStore()->get('isResolved');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isResolved'");
    }

    /**
     * Gets the origin property value. The origin property
     * @return ServiceHealthOrigin|null
    */
    public function getOrigin(): ?ServiceHealthOrigin {
        $val = $this->getBackingStore()->get('origin');
        if (is_null($val) || $val instanceof ServiceHealthOrigin) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'origin'");
    }

    /**
     * Gets the posts property value. Collection of historical posts for the service issue.
     * @return array<ServiceHealthIssuePost>|null
    */
    public function getPosts(): ?array {
        $val = $this->getBackingStore()->get('posts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ServiceHealthIssuePost::class);
            /** @var array<ServiceHealthIssuePost>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'posts'");
    }

    /**
     * Gets the service property value. Indicates the service affected by the issue.
     * @return string|null
    */
    public function getService(): ?string {
        $val = $this->getBackingStore()->get('service');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'service'");
    }

    /**
     * Gets the status property value. The status property
     * @return ServiceHealthStatus|null
    */
    public function getStatus(): ?ServiceHealthStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof ServiceHealthStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('classification', $this->getClassification());
        $writer->writeStringValue('feature', $this->getFeature());
        $writer->writeStringValue('featureGroup', $this->getFeatureGroup());
        $writer->writeStringValue('impactDescription', $this->getImpactDescription());
        $writer->writeBooleanValue('isResolved', $this->getIsResolved());
        $writer->writeEnumValue('origin', $this->getOrigin());
        $writer->writeCollectionOfObjectValues('posts', $this->getPosts());
        $writer->writeStringValue('service', $this->getService());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the classification property value. The classification property
     * @param ServiceHealthClassificationType|null $value Value to set for the classification property.
    */
    public function setClassification(?ServiceHealthClassificationType $value): void {
        $this->getBackingStore()->set('classification', $value);
    }

    /**
     * Sets the feature property value. The feature name of the service issue.
     * @param string|null $value Value to set for the feature property.
    */
    public function setFeature(?string $value): void {
        $this->getBackingStore()->set('feature', $value);
    }

    /**
     * Sets the featureGroup property value. The feature group name of the service issue.
     * @param string|null $value Value to set for the featureGroup property.
    */
    public function setFeatureGroup(?string $value): void {
        $this->getBackingStore()->set('featureGroup', $value);
    }

    /**
     * Sets the impactDescription property value. The description of the service issue impact.
     * @param string|null $value Value to set for the impactDescription property.
    */
    public function setImpactDescription(?string $value): void {
        $this->getBackingStore()->set('impactDescription', $value);
    }

    /**
     * Sets the isResolved property value. Indicates whether the issue is resolved.
     * @param bool|null $value Value to set for the isResolved property.
    */
    public function setIsResolved(?bool $value): void {
        $this->getBackingStore()->set('isResolved', $value);
    }

    /**
     * Sets the origin property value. The origin property
     * @param ServiceHealthOrigin|null $value Value to set for the origin property.
    */
    public function setOrigin(?ServiceHealthOrigin $value): void {
        $this->getBackingStore()->set('origin', $value);
    }

    /**
     * Sets the posts property value. Collection of historical posts for the service issue.
     * @param array<ServiceHealthIssuePost>|null $value Value to set for the posts property.
    */
    public function setPosts(?array $value): void {
        $this->getBackingStore()->set('posts', $value);
    }

    /**
     * Sets the service property value. Indicates the service affected by the issue.
     * @param string|null $value Value to set for the service property.
    */
    public function setService(?string $value): void {
        $this->getBackingStore()->set('service', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param ServiceHealthStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ServiceHealthStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
