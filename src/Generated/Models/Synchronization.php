<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Synchronization extends Entity implements Parsable 
{
    /**
     * Instantiates a new synchronization and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Synchronization
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Synchronization {
        return new Synchronization();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'jobs' => fn(ParseNode $n) => $o->setJobs($n->getCollectionOfObjectValues([SynchronizationJob::class, 'createFromDiscriminatorValue'])),
            'secrets' => fn(ParseNode $n) => $o->setSecrets($n->getCollectionOfObjectValues([SynchronizationSecretKeyStringValuePair::class, 'createFromDiscriminatorValue'])),
            'templates' => fn(ParseNode $n) => $o->setTemplates($n->getCollectionOfObjectValues([SynchronizationTemplate::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the jobs property value. The jobs property
     * @return array<SynchronizationJob>|null
    */
    public function getJobs(): ?array {
        return $this->getBackingStore()->get('jobs');
    }

    /**
     * Gets the secrets property value. The secrets property
     * @return array<SynchronizationSecretKeyStringValuePair>|null
    */
    public function getSecrets(): ?array {
        return $this->getBackingStore()->get('secrets');
    }

    /**
     * Gets the templates property value. The templates property
     * @return array<SynchronizationTemplate>|null
    */
    public function getTemplates(): ?array {
        return $this->getBackingStore()->get('templates');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('jobs', $this->getJobs());
        $writer->writeCollectionOfObjectValues('secrets', $this->getSecrets());
        $writer->writeCollectionOfObjectValues('templates', $this->getTemplates());
    }

    /**
     * Sets the jobs property value. The jobs property
     * @param array<SynchronizationJob>|null $value Value to set for the jobs property.
    */
    public function setJobs(?array $value): void {
        $this->getBackingStore()->set('jobs', $value);
    }

    /**
     * Sets the secrets property value. The secrets property
     * @param array<SynchronizationSecretKeyStringValuePair>|null $value Value to set for the secrets property.
    */
    public function setSecrets(?array $value): void {
        $this->getBackingStore()->set('secrets', $value);
    }

    /**
     * Sets the templates property value. The templates property
     * @param array<SynchronizationTemplate>|null $value Value to set for the templates property.
    */
    public function setTemplates(?array $value): void {
        $this->getBackingStore()->set('templates', $value);
    }

}
