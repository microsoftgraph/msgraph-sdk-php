<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'jobs' => fn(ParseNode $n) => $o->setJobs($n->getCollectionOfObjectValues([SynchronizationJob::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'secrets' => fn(ParseNode $n) => $o->setSecrets($n->getCollectionOfObjectValues([SynchronizationSecretKeyStringValuePair::class, 'createFromDiscriminatorValue'])),
            'templates' => fn(ParseNode $n) => $o->setTemplates($n->getCollectionOfObjectValues([SynchronizationTemplate::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the jobs property value. Performs synchronization by periodically running in the background, polling for changes in one directory, and pushing them to another directory.
     * @return array<SynchronizationJob>|null
    */
    public function getJobs(): ?array {
        $val = $this->getBackingStore()->get('jobs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SynchronizationJob::class);
            /** @var array<SynchronizationJob>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'jobs'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the secrets property value. Represents a collection of credentials to access provisioned cloud applications.
     * @return array<SynchronizationSecretKeyStringValuePair>|null
    */
    public function getSecrets(): ?array {
        $val = $this->getBackingStore()->get('secrets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SynchronizationSecretKeyStringValuePair::class);
            /** @var array<SynchronizationSecretKeyStringValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'secrets'");
    }

    /**
     * Gets the templates property value. Pre-configured synchronization settings for a particular application.
     * @return array<SynchronizationTemplate>|null
    */
    public function getTemplates(): ?array {
        $val = $this->getBackingStore()->get('templates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SynchronizationTemplate::class);
            /** @var array<SynchronizationTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'templates'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('jobs', $this->getJobs());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('secrets', $this->getSecrets());
        $writer->writeCollectionOfObjectValues('templates', $this->getTemplates());
    }

    /**
     * Sets the jobs property value. Performs synchronization by periodically running in the background, polling for changes in one directory, and pushing them to another directory.
     * @param array<SynchronizationJob>|null $value Value to set for the jobs property.
    */
    public function setJobs(?array $value): void {
        $this->getBackingStore()->set('jobs', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the secrets property value. Represents a collection of credentials to access provisioned cloud applications.
     * @param array<SynchronizationSecretKeyStringValuePair>|null $value Value to set for the secrets property.
    */
    public function setSecrets(?array $value): void {
        $this->getBackingStore()->set('secrets', $value);
    }

    /**
     * Sets the templates property value. Pre-configured synchronization settings for a particular application.
     * @param array<SynchronizationTemplate>|null $value Value to set for the templates property.
    */
    public function setTemplates(?array $value): void {
        $this->getBackingStore()->set('templates', $value);
    }

}
