<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServiceHealthIssue extends ServiceAnnouncementBase implements Parsable 
{
    /**
     * @var ServiceHealthClassificationType|null $classification The classification property
    */
    private ?ServiceHealthClassificationType $classification = null;
    
    /**
     * @var string|null $feature The feature name of the service issue.
    */
    private ?string $feature = null;
    
    /**
     * @var string|null $featureGroup The feature group name of the service issue.
    */
    private ?string $featureGroup = null;
    
    /**
     * @var string|null $impactDescription The description of the service issue impact.
    */
    private ?string $impactDescription = null;
    
    /**
     * @var bool|null $isResolved Indicates whether the issue is resolved.
    */
    private ?bool $isResolved = null;
    
    /**
     * @var ServiceHealthOrigin|null $origin The origin property
    */
    private ?ServiceHealthOrigin $origin = null;
    
    /**
     * @var array<ServiceHealthIssuePost>|null $posts Collection of historical posts for the service issue.
    */
    private ?array $posts = null;
    
    /**
     * @var string|null $service Indicates the service affected by the issue.
    */
    private ?string $service = null;
    
    /**
     * @var ServiceHealthStatus|null $status The status property
    */
    private ?ServiceHealthStatus $status = null;
    
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
        return $this->classification;
    }

    /**
     * Gets the feature property value. The feature name of the service issue.
     * @return string|null
    */
    public function getFeature(): ?string {
        return $this->feature;
    }

    /**
     * Gets the featureGroup property value. The feature group name of the service issue.
     * @return string|null
    */
    public function getFeatureGroup(): ?string {
        return $this->featureGroup;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'classification' => function (ParseNode $n) use ($o) { $o->setClassification($n->getEnumValue(ServiceHealthClassificationType::class)); },
            'feature' => function (ParseNode $n) use ($o) { $o->setFeature($n->getStringValue()); },
            'featureGroup' => function (ParseNode $n) use ($o) { $o->setFeatureGroup($n->getStringValue()); },
            'impactDescription' => function (ParseNode $n) use ($o) { $o->setImpactDescription($n->getStringValue()); },
            'isResolved' => function (ParseNode $n) use ($o) { $o->setIsResolved($n->getBooleanValue()); },
            'origin' => function (ParseNode $n) use ($o) { $o->setOrigin($n->getEnumValue(ServiceHealthOrigin::class)); },
            'posts' => function (ParseNode $n) use ($o) { $o->setPosts($n->getCollectionOfObjectValues(array(ServiceHealthIssuePost::class, 'createFromDiscriminatorValue'))); },
            'service' => function (ParseNode $n) use ($o) { $o->setService($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(ServiceHealthStatus::class)); },
        ]);
    }

    /**
     * Gets the impactDescription property value. The description of the service issue impact.
     * @return string|null
    */
    public function getImpactDescription(): ?string {
        return $this->impactDescription;
    }

    /**
     * Gets the isResolved property value. Indicates whether the issue is resolved.
     * @return bool|null
    */
    public function getIsResolved(): ?bool {
        return $this->isResolved;
    }

    /**
     * Gets the origin property value. The origin property
     * @return ServiceHealthOrigin|null
    */
    public function getOrigin(): ?ServiceHealthOrigin {
        return $this->origin;
    }

    /**
     * Gets the posts property value. Collection of historical posts for the service issue.
     * @return array<ServiceHealthIssuePost>|null
    */
    public function getPosts(): ?array {
        return $this->posts;
    }

    /**
     * Gets the service property value. Indicates the service affected by the issue.
     * @return string|null
    */
    public function getService(): ?string {
        return $this->service;
    }

    /**
     * Gets the status property value. The status property
     * @return ServiceHealthStatus|null
    */
    public function getStatus(): ?ServiceHealthStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('classification', $this->classification);
        $writer->writeStringValue('feature', $this->feature);
        $writer->writeStringValue('featureGroup', $this->featureGroup);
        $writer->writeStringValue('impactDescription', $this->impactDescription);
        $writer->writeBooleanValue('isResolved', $this->isResolved);
        $writer->writeEnumValue('origin', $this->origin);
        $writer->writeCollectionOfObjectValues('posts', $this->posts);
        $writer->writeStringValue('service', $this->service);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the classification property value. The classification property
     *  @param ServiceHealthClassificationType|null $value Value to set for the classification property.
    */
    public function setClassification(?ServiceHealthClassificationType $value ): void {
        $this->classification = $value;
    }

    /**
     * Sets the feature property value. The feature name of the service issue.
     *  @param string|null $value Value to set for the feature property.
    */
    public function setFeature(?string $value ): void {
        $this->feature = $value;
    }

    /**
     * Sets the featureGroup property value. The feature group name of the service issue.
     *  @param string|null $value Value to set for the featureGroup property.
    */
    public function setFeatureGroup(?string $value ): void {
        $this->featureGroup = $value;
    }

    /**
     * Sets the impactDescription property value. The description of the service issue impact.
     *  @param string|null $value Value to set for the impactDescription property.
    */
    public function setImpactDescription(?string $value ): void {
        $this->impactDescription = $value;
    }

    /**
     * Sets the isResolved property value. Indicates whether the issue is resolved.
     *  @param bool|null $value Value to set for the isResolved property.
    */
    public function setIsResolved(?bool $value ): void {
        $this->isResolved = $value;
    }

    /**
     * Sets the origin property value. The origin property
     *  @param ServiceHealthOrigin|null $value Value to set for the origin property.
    */
    public function setOrigin(?ServiceHealthOrigin $value ): void {
        $this->origin = $value;
    }

    /**
     * Sets the posts property value. Collection of historical posts for the service issue.
     *  @param array<ServiceHealthIssuePost>|null $value Value to set for the posts property.
    */
    public function setPosts(?array $value ): void {
        $this->posts = $value;
    }

    /**
     * Sets the service property value. Indicates the service affected by the issue.
     *  @param string|null $value Value to set for the service property.
    */
    public function setService(?string $value ): void {
        $this->service = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param ServiceHealthStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ServiceHealthStatus $value ): void {
        $this->status = $value;
    }

}
